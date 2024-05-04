<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin2/css/animate.min.css">
    <link rel="stylesheet" href="../admin2/css/aos.css"/>
    <link rel="stylesheet" href="../admin2/css/slick_slick.css"/>
    <link rel="stylesheet" href="../admin2/css/slick-theme.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../admin2/css/app.css">
    <script src="../assets/js/fontawesome.js"></script>
</head>

<body>
<?php

include("connection.php");
include("header.php");

if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $password = $_POST['password'];

    $selectquery = "select * from useradmin where adminname = '$name' and password = '$password'";
    $query = mysqli_query($conn, $selectquery);

    if (mysqli_num_rows($query) == 1) {
        ?>
        <script>
            alert("Hello Admin");
        </script>
        <?php
        session_start();
        $_SESSION['admin'] = $name;
        header("location:index.php");
    } else {
        echo "login Unsuccessful";
    }


}

?>


<main class="login account-pages vh-100 position-relative text-white">
    <div class="login-box contianer">
        <div class="row">
            <div class="form-holder col-md-4 border rounded-5 px-4 py-5 position-absolute top-50 start-50 translate-middle">
                <h1 class="mb-5 text-center text-light">Login</h1>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-4">
                                    <input name="uname" type="text"
                                           class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25"
                                           id="email" placeholder="Email">
                                    <label for="username">Username</label>
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-3">
                                    <input name="password" type="password"
                                           class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25"
                                           id="password" placeholder="Password">
                                    <label for="password bg-transparent">Password</label>
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4 pt-3 text-light">
                        <div class="col">
                            <input type="checkbox"> Remember Me
                        </div>
                        <div class="col text-end">
                            <a class="text-decoration-none text-light" href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button name="submit" class="btn btn-light w-100 py-2 fs-5 px-5 rounded-5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
 </body>
</html> 
