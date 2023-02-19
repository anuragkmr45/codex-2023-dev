<?php
include("../../adminpanel/conn.php");

$email = $_GET['email'];
$query=mysqli_query($conn,"select * from members where email = '$email'");
$result = mysqli_fetch_array($query); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTELER - Profile</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- main css -->
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>

    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
            <a href="../home.php?email=<?php echo $result['email'] ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <span class="fs-4"><?php echo $result['username']?></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../home.php?email=<?php echo $result['email'] ?>" class="nav-link text-white" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="./profile.php?email=<?php echo $result['email'] ?>" class="nav-link text-white">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white active">
                        Request Panel
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        Service Provider Panel
                    </a>
                </li>
            </ul>
            <hr>
            <div class="text-center">
                <a href="../../logout.php" class="text-white text-decoration-none">
                    <strong>Logout</strong>
                </a>
            </div>
        </div>

        <div class="p-2">
            <div class="d-flex align-items-center d-flex justify-content-between">
                <h3>Total Request made - </h3>
                <div>
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <span class="fs-4"><?php echo $result['username']?></span>
                </div>
            </div>
            <hr style="width: 150vh;">



            <div>
                <h4>Latest Request</h4>

            </div>
        </div>
    </div>
    <!-- bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>