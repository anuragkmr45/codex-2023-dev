<?php
include("../components/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTELER - Product</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <!-- main css file -->
    <link rel="stylesheet" href="../style/style.css">

    <style>
        .box {
            background-color: #3a384cc7;
            padding: 1rem;
            border-radius: 1px;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="py-5">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="box">
                    <div class="d-flex justify-content-between container">
                        <span class="p-2" style="background-color: yellow; color: black; border-radius: 2px;">Verified
                            SELLER</span>
                        <button class="btn btn-outline-primary">Chat With Seller</button>
                    </div>
                    <h3 class="my-3">Product name</h3>
                    <h5>Provider username</h5>
                    <h5>Provider Rating</h5>
                </div>

                <div class="box">
                    <h3>Product Description</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate veniam quia esse nulla
                        animi libero praesentium consequuntur id tempore. Nobis ipsam autem eaque vitae asperiores
                        incidunt debitis, nihil ea!</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="box">
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    include('../components/footer.php')
    ?>

    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>