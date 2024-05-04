<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<?php
ob_start();
session_start();
//include "connection.php"
?>
<?php include_once './template-parts/header.php'; ?>

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
                                    <input name="uname" type="text" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="email" placeholder="Email">
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
                                    <input name="password" type="password" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="password" placeholder="Password">
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
                <hr class="text-light my-4">
                <div class="registration-link text-center text-light">
                    <h4>Don't have an account?</h4>
                    <a class="text-decoration-none text-light fs-5" href="signup.php">Register</a>
                </div>
            </div>
        </div>
    </div>
</main>
</html>

<?php

include("connection.php");

if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $uname_search = ("select * from signup where name = '$username'");
    $query = mysqli_query($conn , $uname_search);
 
    $uname_count = mysqli_num_rows($query);
    if($uname_count){
        $uname_pass = mysqli_fetch_assoc($query);
        $db_pass = $uname_pass['password'];  

        $pass_decode = password_verify($password ,$db_pass);

        if($pass_decode){
           $_SESSION['username']=$username;
           header("location:index.php");
        }else{
            ?>
            <script>
                alert("Your Password is not Correct");
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("Your Username Is Maybe Invalid");
        </script>
        <?php
    }
}
?>
<?php include './template-parts/footer.php' ?>