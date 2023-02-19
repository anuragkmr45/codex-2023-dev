<?php      
    include('./adminpanel/conn.php');  
    
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'society';
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    
    // Check if user is already logged in
    if (isset($_SESSION['email'])) {
        header("Location: ./pages/home.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];  
        $password = $_POST['password'];  
    
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $password = stripcslashes($password);  
            $email = mysqli_real_escape_string($conn, $email);  
            $password = mysqli_real_escape_string($conn, $password);  
        
            $sql = "select * from members where email = '$email' and password = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
            
            if($count == 1){  
                // echo "<h1><center> Login successful </center></h1>";  
                header("Location: ./pages/home.php?email=".urlencode($email));
                
            }  
            else{  
                echo "<h1> Login failed. Invalid email or password.</h1>";  
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
<!-- ./pages/home.php?email=<?php echo $result['email']?> -->
                <form class="login" method="POST">
                    <!-- <?php if (isset($error_msg)) { ?>
                        <p><?php echo $error_msg; ?></p>
                    <?php } ?> -->
                    <div class="login__field">
                        <input type="text" class="login__input" name="email" placeholder="email">
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" name="password" placeholder="Password">
                    </div>
                    <button class="button login__submit">
                        <span class="button__text" value="Login">Log In Now</span>
                    </button>
                    <div class="text-center my-1">
                        <small style="color: white;">Don't have an account - <a style="text-decoration: none;"
                                href="./signup.php">SignIn</a></small>
                    </div>
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