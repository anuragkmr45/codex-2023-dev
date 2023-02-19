<?php
include("../adminpanel/conn.php");

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

    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <!-- main css / style.css -->
    <link rel="stylesheet" href="../style/style.css">

    <style>
        .navbar {
            border-radius: 0 0 1rem 1rem;
            background-color: #0c0737;
            box-shadow: 0 15px 15px 0 #0c073798;
        }

        .dropdown-menu {
            background-color: inherit;
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            background-color: #332c7250;
            color: white;
            transition-duration: 0.5s;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark px-2">
        <div class="container py-2 container-fluid">
            <a class="navbar-brand">HOSTELER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="../pages/home.php?email=<?php echo $result['email'] ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="../pages/request.php?email=<?php echo $result['email'] ?>">Request Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="../pages/provide.php?email=<?php echo $result['email'] ?>">Service Provider</a>
                    </li>
                </ul>
                <!-- <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">

                </a> -->
                <li class="nav-item dropdown d-flex" style="list-style: none;">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <strong><?php echo $result['username'] ?></strong>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/profile/profile.php?email=<?php echo $result['email']?> ">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Your Request</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
                <!-- <button class="btn btn-primary m-1" type="submit">Dashboard</button> -->
                <!-- <button class="btn btn-outline-primary m-1" type="submit">Logout</button> -->
            </div>
        </div>
    </nav>

    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>