<?php
include("../components/header.php");

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
    <title>HOSTELER - Home</title>

    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <!-- main css file -->
    <link rel="stylesheet" href="../style/style.css">

    <!-- home.css -->
    <link rel="stylesheet" href="../style/home.css">


</head>

<body>
    <div class="container">

        <!-- <div class="row align-items-md-stretch mt-5" style="border: 2px solid balck;">
            <div class="col-md-6">
                <div class="h-100 p-5 rounded-3">
                    <h1>HOSTELER</h1>
                    <p>The one stop platform for all urgent need of ITER HOSTELLER</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../imgs/homeImg1.png" alt="">
            </div>
        </div> -->
        <div class="col-xl-10 col-xxl-8 px-4">
            <div class="row align-items-center g-lg-5 py-3">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold">HOSTELER</h1>
                    <p class="col-lg-10 fs-4">The one stop platform for all urgent need of ITER HOSTELLER</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <img src="../imgs/homeImg1.png" alt="">
                </div>
            </div>
        </div>

        <!-- <form class="my-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form> -->

        <div id="category my-5">
            <h1 class="text-center">CATEGORIES</h1>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <a class="nav-link" href="./medicine.php?email=<?php echo $result['email'] ?>">
                        <div class="category-box">
                            <img src="https://images.unsplash.com/photo-1544991875-5dc1b05f607d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top" alt="...">
                            <h3 class="text-center" style="color: black;">Medicine</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="category-box">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="card-img-top" alt="...">
                        <h3 class="text-center">Electronics</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="category-box">
                        <img src="https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
                            class="card-img-top" alt="...">
                        <h3 class="text-center" style="color: black;">Others</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="requests">
            <h2 class="text-center">Latest Requests</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="request w-75 my-3 mx-auto d-flex justify-content-between">
                        <div class="card-body">
                            <h6 class="card-title">Requested Item - <b style="text-transform: uppercase;">item name</b>
                            </h6>
                            <p class="card-text">Request id - auto generated id</p>
                            <p class="card-text">Hostel No - BH2
                            </p>
                            <p class="card-text">Time of request - req real Time</p>
                            <a href="#" class="btn btn-outline-primary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="provider">
            <h2 class="text-center">Latest Provider</h2>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="request w-75 my-3 mx-auto d-flex justify-content-between">
                        <div class="card-body">
                            <h6 class="card-title">Requested Item - <b style="text-transform: uppercase;">item name</b>
                            </h6>
                            <p class="card-text">Request id - auto generated id</p>
                            <p class="card-text">Hostel No - BH2
                            </p>
                            <p class="card-text">Time of request - req real Time</p>
                        </div>
                        <div class="avatar">
                            <img src="data:image/png;base64,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"
                                alt="">
                        </div>
                    </div>
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