<!-- login page or starting page when you enter website -->
<?php 
session_start();

// Check if user is already logged in
if (isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

  // Validate user input
if (empty($email) || empty($password)) {
    $error_msg = "incorrect credentials";
} else {
    // Connect to database and check user credentials
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'society';
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    
    // include("../adminpanel/conn.php")

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    $sql = "SELECT * FROM members WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // if (password_verify($password, $row['password'])) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            header("Location: home.php");
            exit();
        } else {
            $error_msg = "Invalid email or password.";
        }
    } else {
        $error_msg = "Invalid email or password.";
    }

    mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="./style/bootstrap.min.css">

    <!-- login.css -->
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>

    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" >
                    <?php if (isset($error_msg)) { ?>
                        <p><?php echo $error_msg; ?></p>
                    <?php } ?>
                    <div class="login__field">
                        <input type="text" class="login__input" name="email" placeholder="Email">
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" name="password" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text" value="Login">Log In Now</span>
                    </button>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>