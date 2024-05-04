<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<?php
session_start();
if(!isset($_SESSION['admin'])){
   echo "<h1>Please Login First</h1>";
   header("location:adminlogin.php");
}else{
  ?>
  




 <?php
//include('header.php');
include('header-1.php');
?>

<?php

}


?>

<?php

if(isset($_POST['logout'])){
     session_destroy();
}
$adminname = $_SESSION['admin'];
$admin = strtoupper($adminname);

?>


    
    

<main  class="welcome  position-relative">
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row align-middle">
        <div class="col-md-12 text-center m-5">
            
            <h1 class="mb-4 animate__animated animate__zoomIn text-light font-size">Welcome To Admin Panel-<?php echo $admin;?></h1> 
        </div>
    </div>  
</div>
</main>

</html>