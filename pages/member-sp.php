<?php
include("../components/header.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSTELER - Member Name</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../../style/bootstrap.min.css">

    <!-- main css -->
    <link rel="stylesheet" href="../../style/style.css">

    <!-- member.css -->
    <link rel="stylesheet" href="../../style/member.css">
</head>

<body>

    <div class="container">
        <div class="profile px-2">
            <div class="m-5">
                <div class="d-flex g-0">
                    <div class="">
                        <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="p-4">
                        <div class="card-body">
                            <h4 class="card-title">Name - Name</h4>
                            <h4 class="card-title">Reg No - Reg no</h4>
                            <h4 class="card-title">Gender - </h4>
                            <h4 class="card-title">Hostel - </h4>
                            <h4 class="card-title">Rating - </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h4>Total No Of Request - </h4>
            </div>
            <div class="">
                <h4>Total No Of Service Provide - </h4>
            </div>
        </div>
        <div class="testemonials">
            <h2>TESTEMONIALS</h2>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
                    </blockquote>
                    <h3>Wisteria Ravenclaw</h3>
                    <h4>Google Inc.</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
                    </blockquote>
                    <h3>Ursula Gurnmeister</h3>
                    <h4>Facebook</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>The only skills I have the patience to learn are those that have no real application in life.
                        </p>
                    </blockquote>
                    <h3>Ingredia Nutrisha</h3>
                    <h4>Twitter</h4>
                </figcaption>
            </figure>
        </div>
        <div class="rating my-5">
            <h2>RATING AND REVIEWS</h2>
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    5 stars and 4 Stars reviews
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Username</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Rating out of 5</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's
                                                content.</p>
                                            <!-- <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    3 stars and 2 Stars reviews
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the
                                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's
                                    imagine
                                    this being
                                    filled with some actual content.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    1 Stars reviews
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body.
                                    Nothing more
                                    exciting
                                    happening here in terms of content, but just filling up the space to make it look,
                                    at least
                                    at first
                                    glance, a bit more representative of how this would look in a real-world
                                    application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <p>4.1 average based on 254 reviews.</p>
                    <hr style="border:3px solid #f1f1f1">

                    <div class="row">
                        <div class="side">
                            <div>5 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-5"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>150</div>
                        </div>
                        <div class="side">
                            <div>4 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-4"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>63</div>
                        </div>
                        <div class="side">
                            <div>3 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-3"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>15</div>
                        </div>
                        <div class="side">
                            <div>2 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-2"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>6</div>
                        </div>
                        <div class="side">
                            <div>1 star</div>
                        </div>
                        <div class="middle">
                            <div class="bar-container">
                                <div class="bar-1"></div>
                            </div>
                        </div>
                        <div class="side right">
                            <div>20</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
include("../components/footer.php")
?>
    <!-- bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>