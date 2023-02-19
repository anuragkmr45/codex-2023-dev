<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include './adminpanel/conn.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exists=false;

    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO members ( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result){
            header("Location: ./index.php");
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp - HOSTELER</title>

    <style>
        body {
            background: linear-gradient(90deg, #3a384c, #0d0c2b);
            color: white;
        }

        .box {
            box-shadow: 0 15px 15px 0 #0c0737fb;
            border-radius: 1rem;
            padding: 2rem;
            max-width: 25rem;
            margin: auto;
            text-align: center;

        }
    </style>

</head>

<body>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center">Signup HOSTELER</h1>
        <div class="box">
            <form method="post">
                <div class="form-group py-2">
                    <!-- <label for="username">Username</label> -->
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                        placeholder="Username">

                </div>
                <div class="form-group py-2">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Email">
                </div>
                <div class="form-group py-2">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group py-2">
                    <!-- <label for="cpassword">Confirm Password</label> -->
                    <input type="password" class="form-control" id="cpassword" name="cpassword"
                        placeholder="Confirm Password">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>

                <button type="submit" class="btn btn-primary">SignUp</button>
                
                    <div class="text-center my-1">
                        <small style="color: white;">Already have an account - <a style="text-decoration: none;"
                                href="./index.php">Login</a></small>
                    </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>