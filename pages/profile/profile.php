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
                <span class="fs-4"> <?php echo $result['username'] ?> </span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../home.php?email=<?php echo $result['email'] ?>" class="nav-link text-white" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white active">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="./req-panel.php?email=<?php echo $result['email'] ?>" class="nav-link text-white">
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

        <div class="profile px-2">
            <div class="m-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 p-4">
                        <div class="card-body">
                            <h4 class="card-title">Username - <b style="text-transform: uppercase;" > <?php echo $result['username']?></b></h4>
                            <h4 class="card-title">Reg No - <b style="text-transform: uppercase;" > <?php echo $result['regNo']?></b></h4>
                            <h4 class="card-title">Gender - <b style="text-transform: uppercase;" > <?php echo $result['gender']?></b></h4>
                            <h4 class="card-title">Hostel - <b style="text-transform: uppercase;" > <?php echo $result['hostel']?></b></h4>
                            <h4 class="card-title">Rating - <b style="text-transform: uppercase;" > <?php echo $result['rating']?></b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h4>Total No Of Request - 10</h4>
            </div>
            <div class="">
                <h4>Total No Of Service Provide - 2</h4>
            </div>
        </div>
    </div>
    <!-- bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>