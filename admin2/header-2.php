<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
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
error_reporting(0);
include("header.php");
?>


<style>
     .menu-bar .nav-item>li:hover>a {
    color: seagreen;
    background: var(--em-secondary);
    color: primary;
    border-radius: 100px;
    outline: none;
}

</style>

<header class="header-2">
     <!-- menu-bar starts  -->
    <div class="menu-bar py-2 admin-menu-1">
        <div class="container logo">
            <div class="row">
                <div class="col-md-1">
                    <div class="img-wrapper">
                        <a href="index.php"><img src="../image/logo/electrologo.png" alt="image can't display" class="img-fluid" width="100"></a>
                    </div>
                </div>
                <div class="col-md-10  text-secondary d-flex align-items-center">

                    <ul class="nav nav-actions fs-1">

                            <li class="nav-item text-white">
                                <a href="index.php" class="nav-link text-light">Home</a>
                            </li>
                            <li class="nav-item text-light">
                                <a href="catadmin.php" class="nav-link text-light">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="subcategory.php" class="nav-link text-light">Subcategories</a>
                            </li>
                            <li class="nav-item">
                                <a href="product.php" class="nav-link text-light">Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="admincontact.php" class="nav-link text-light">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="admineedback.php" class="nav-link text-light">Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a href="bill.php" class="nav-link text-light">Bill</a>
                            </li>
                            <li class="nav-item">
                                <a href="admincheckout.php" class="nav-link text-light">Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a href="user.php" class="nav-link text-light">User Details</a>
                            </li>        
                        </ul>
                    </div>
                    
                    <div class="col-md-1">    
                        <form action="" method="post">
                            <button class="btn btn-light" name="logout"><i class="fa fa-user"></i> LOGOUT</button>
                        </form> 
                    </div>
            </div>
        </div>
        
    </div>
    <!-- menu-bar ends -->
</header>
<style>
    .main{
  box-sizing: border-box;
}
</style>
