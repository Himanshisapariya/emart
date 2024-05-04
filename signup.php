<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
<?php include_once './template-parts/header.php'; ?>

<main class="signup account-pages vh-100 position-relative text-white">
    <div class="signup-box contianer">
        <div class="row">
            <div class="form-holder col-md-4 border rounded-5 px-4 py-2 position-absolute top-50 start-50 translate-middle">
                <h1 class="mb-5 mt-5 text-center text-light">Signup</h1>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-4">
                                    <input type="text" name="name" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="fullname" placeholder="Full Name">
                                    <label for="fullname">Full Name</label>
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-4">
                                    <input type="email" name="email" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="email" placeholder="E-mail">
                                    <label for="email">E-mail</label>
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-4">
                                    <input type="tel" name="mobno" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="mobile" placeholder="Mobile No">
                                    <label for="mobile">Mobile No</label>
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" id="password" placeholder="Password">
                                    <label for="password bg-transparent">Password</label>
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                    </div>
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-4">
                                <textarea name="address" class="form-control text-light rounded-5 px-4 bg-white bg-opacity-25" placeholder="Address" id="address" cols="30" rows="4"></textarea>
                                <label for="mobile">Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4 text-center text-light">
                        <div class="col">
                            <input type="checkbox"> I agree to the terms of services
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-light w-100 py-2 fs-5 px-5 rounded-5" name="submit">Register</button>
                        </div>
                    </div>
                </form>
                <hr class="text-light mb-4">
                <div class="registration-link text-center text-light mb-3 ">
                    <h4>Already have an account?</h4>
                    <a class="text-decoration-none text-light fs-5" href="login.php">Login</a>
                </div>
            </div>
        </div>
    </div>
</main>
</html>
<?php

include ("connection.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $pass = password_hash($password , PASSWORD_BCRYPT);

$insertquery = "insert into signup (name, email ,mobno ,password ,address) values ('$name' , '$email' ,'$mobno' ,'$pass' ,'$address')";

$query = mysqli_query($conn,$insertquery);

if($query){
    ?>
      <script>
        alert("Successfully Registered");
     </script>
    header('location: login.php');
    <?php
}else{
    ?>
    <script>
        alert("Data not Inserted");
    </script>
    <?php
}


}

?>

<?php include './template-parts/footer.php' ?>