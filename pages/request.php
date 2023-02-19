<?php
include("../components/header.php");

$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'society';
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

$email = $_GET['email'];
$query=mysqli_query($conn,"select * from members where email = '$email'");
$result = mysqli_fetch_array($query); 


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];  
            $hostel = $_POST['hostel'];  
            $req = $_POST['req']; 
            $regNo = $result['regNo'];
            $hostel = $result['hostel'];

        $sql = "INSERT INTO request ( `username`, `email`, `reqName`, `regNo`, `hostel`,) VALUES ('$name', '$email', '$req', '$regNo', 'hostel')";
        $resultInsert = mysqli_query($conn, $sql);
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTELER - Requests</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <!-- request.css -->
    <link rel="stylesheet" href="../style/request.css">

    <!-- main css file -->
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="container my-5">


        <div class="main">
            <div class="row">
                <div class="col-lg-4 col-sm-12 p-2">
                    <h3 class="text-center">Make Your Request</h3>
                    <form class="login" method="POST">
                        <div class="login__field">
                            <input type="text" class="login__input" name="Name" placeholder="Your Name">
                        </div>
                        <div class="login__field">
                            <input type="text" class="login__input" name="hostel" placeholder="Hostel and Room No.">
                        </div>
                        <div class="login__field">
                            <input type="text" class="login__input" name="req" placeholder="Requested Product Name">
                        </div>
                        <button type='submit' class="button login__submit">
                            <span class="button__text" value="Login">Make Request</span>
                        </button>
                    </form>
                </div>
                <div class="col-lg-8 col-sm-12" style="border: 2px solid #3a384c; border-radius: 1rem;">
                        <form class="m-5" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                                                <?php
                        $email = $_GET['email'];
                        $query=mysqli_query($conn,"select * from members where email = '$email'");
                        while($result = mysqli_fetch_array($query)) {
                        ?>
                    <div class="request w-75 my-3 mx-auto d-flex justify-content-between">
                        <div class="card-body">
                            <h5 class="card-title">Requested Item - <b style="text-transform: uppercase;"><?php echo $result['reqName'] ?></b>
                            </h5>
                            <p class="card-text">Request id - <?php echo $result['id'] ?> </p>
                            <p class="card-text">Hostel No - <?php echo $result['hostel'] ?>
                            </p>
                            <p class="card-text">Time of request - req real Time</p>
                            <a href="#" class="btn btn-outline-primary">Contact</a>
                        </div>
                    </div>
                                            <?php 
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
include("../components/footer.php")
?>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>