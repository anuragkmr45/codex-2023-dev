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
    <title>HOSTELER - Medicine</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../style/bootstrap.min.css">

    <!-- main style -->
    <link rel="stylesheet" href="../style/style.css">

    <!-- medicien.css -->
    <link rel="stylesheet" href="../style/medicine.css">

    <style>
        label {
            color: black;
        }

        .cards {
            background-color: #c7cdfb;
            color: black;
            text-align: center;
            padding: 5px;
            border-radius: 1rem;
        }
        
        .cards a{
            text-decoration: none;
        }
        .cards:hover {
            cursor: pointer;
            box-shadow: 0 15px 15px 0 #0c0737b9;
            transition-duration: 0.5s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Services Providing Center</h1>
                    <p class="col-lg-10 fs-4">Lorem ipsum dolor, sit amet consectetur </p>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Provide Medicine
                    </button> -->
                </div>

                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background: linear-gradient(90deg, #343247, #0d0c2b);">
                            <div class="modal-header">
                                <button style="background-color: white;" type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="login mx-auto" method="POST">
                                    <div class="login__field">
                                        <input type="text" class="login__input" name="Name" placeholder="Your Name">
                                    </div>
                                    <div class="login__field">
                                        <input type="number" class="login__input" name="reg-no"
                                            placeholder="Registration Number">
                                    </div>
                                    <div class="login__field">
                                        <input type="text" class="login__input" name="email" placeholder="Email">
                                    </div>
                                    <div class="login__field">
                                        <input type="text" class="login__input" name="hostel"
                                            placeholder="Hostel and Room No.">
                                    </div>
                                    <button class="button login__submit">
                                        <span class="button__text" value="Login">Make Request</span>
                                    </button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Service">
                            <label for="floatingInput">Service</label>
                        </div>
                        <div class="form-floating my-2">
                            <textarea type="text" class="form-control" id="floatingPassword"
                                placeholder="Description"></textarea>
                            <label for="floatingPassword">Description</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Price">
                            <label for="floatingPassword">Price</label>
                        </div>
                        <!-- <div class="form-floating mb-3">
                            <input type="image" src="" alt="">
                        </div> -->
                        <!-- <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div> -->
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit Response</button>
                        <!-- <hr class="my-4"> -->
                    </form>
                </div>
            </div>
        </div>

        <div>
            <h4>Find Your Matched Required Hear</h4>

        </div>

        <div class="row">
            <div class="row">
                <div class="col-lg-7 col-sm-12 ">
                    <form class="my-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="cards mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThseXGcCcSm_nolQJBwe72nxcWbmHgpmpFe-5rmc5P&s" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">CETIRIZINE</h5>
                                    <p class="card-text">Present at BH6</p>
                                    <p class="card-text">Expire Date - Dec 2023</p>
                                </div>
                                <button href="../pages/chat/chat.html" class="btn btn-primary">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="cards mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">DOLO 650</h5>
                                    <p class="card-text">Present at BH6</p>
                                    <p class="card-text">Expire Date - Dec 2023</p>
                                </div>
                                        <button href="../pages/chat/chat.html" class="btn btn-primary">Contact</button>
                            </div>
                        </div>
                    </div>
                    <div class="cards mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">CROCIN ADVANCE</h5>
                                    <p class="card-text">Present at BH6</p>
                                    <p class="card-text">Expire Date - Dec 2023</p>
                                </div>
                                        <button href="../pages/chat/chat.html" class="btn btn-primary">Contact</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <h2>Top Service Provider</h2>
                    <form class="my-2" role="search">
                        <input class="form-control me-2" type="search"
                            placeholder="Search Your Favourite Service Provider" aria-label="Search">
                    </form>
                    <div class="row py-2">
                        <?php
                        while($result = mysqli_fetch_array($query)){
                        ?>
                        <div class="col-lg-6 col-sm-12">
                            <div class="cards">
                                <a href="./member-sp.php" >
                                    <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $result['username']?></h5>
                                        <p class="card-text"><?php echo $result['rating']?></p>
                                        <p class="card-text"><?php echo $result['hostel']?></p>
                                        <button href="../pages/chat/chat.html" class="btn btn-primary">Contact</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
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