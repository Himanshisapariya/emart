<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include_once './template-parts/header.php'; 
   // include_once './template-parts/header-1.php';  
 include_once './template-parts/header-2.php'; 
        include('connection.php');
    ?>

<br>
<form action="mymgcart.php" method="post">
<!-- <input type="text" name="search" value="<?php 
                            if(isset($_get['search'])){
                                echo $_get['search'];
                            }
                        ?>">
<button type="submit">Search</button> -->

<?php


if(isset($_GET['search'])){
   $filtervalues = $_GET['search'];
   $i=1;
    $query = "select * from product where CONCAT(pid,pname,pimage,brand,price) LIKE '%$filtervalues%' ";
    $query_run = mysqli_query($conn, $query);
 
    $filter = mysqli_num_rows($query_run) ;

    if($filter > 0){
        foreach($query_run as $items){
           
            ?>
           

<main>
    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12  text-center">
                <h1><?php echo "$i"."-"." ". $items['pname'] ?></h1>
            </div>
        </div>
    </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="img-wrapper">
                    <img src="./image/<?php echo $items['pimage'] ?>" class="img-fluid" height="100"  alt="Image can't loaded">    
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-info">
                <h2><?php echo $items['pname'] ?></h2>
                <h3><?php echo $items['price'] ?></h3>
                <hr>
                <i class="fa-solid fa-eye py-2"></i><b> <?php echo $items['description'] ?></p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="qty-wrapper d-flex w-25">
                        <span class="btn btn-dark rounded-0 minus">-</span>
                        <input type="text" name = "qty" class="form-control rounded-0 qty text-center" value="1"/>
                        <span class="btn btn-dark rounded-0 plus">+</span>
                    </div>
                </div>
            </div>
            <div class="actions py-3">
                <div class="row">
                    <div class="col">
                        <a href="carts.php">
                            <button class="btn btn-outline-dark btn-lg w-100" name="cart"><i class="fa-solid fa-shopping-bag"></i> Add to cart</button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="wishlist.php">
                            <button class="btn btn-dark btn-lg w-100"><i class="fa-solid fa-heart"></i> Add to Wislist</button>
                           
                        </a>
                        
                    </div>
                </div>
            </div>
            <input type="hidden" name="pimage" value="<?php  $items['pimage'] ?>">
            <input type="hidden" name="item_name" value="<?php  $items['pname'] ?>">
            <input type="hidden" name="price" value="<?php  $items['price']  ?>">
 
            <hr class="mb-4">
            <div class="shipping-info">
                <span class="fs-5 d-block "><i class="fa-solid fa-truck"></i> Free worldwide shipping on all orders over $100</span>
                <span class="fs-5 d-block mt-3"><i class="fa-solid fa-truck-ramp-box"></i> Delivers in: 3-7 Working Days</span>
            </div>
            <hr class="mt-4 mb-4">
            <div class="product-data w-50 border p-3 rounded">
                <div class="data-item d-flex justify-content-between mb-2">
                    <span><b>SKU:</b></span>
                    <span>D2409</span>
                </div>
                <div class="data-item d-flex justify-content-between mb-2">
                    <span><b>Brand</b></span>
                    <span><?php echo $items['brand']; ?></span>
                </div>
            </div>
            <div class="share-this mt-4">
                <p class="fs-5 text-uppercase">Share</p>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link px-2 py-0 text-black" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-0 text-black" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-0 text-black" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-0 text-black" href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
   
</div>
<br><br><br>
<div class="d-flex justify-content-right align-items-right">
<?php
$i++;

?>
</div>

</main>


      <?php
  }
    }else{
       // echo "No Records Found";
       ?>
       <div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-secondary-subtle">
       <div class="row align-middle">
               <div class="col-md-12 text-center m-5 ">
      
<h1 class="mb-4 animate__animated animate__zoomIn">No Records Found</h1>
<h1 class="mb-4 animate__animated animate__zoomIn"><?php echo $filtervalues ?>&nbsp; Is Maybe Not Available In Our Store.</h1>

               </div>
               </div>
       </div> 
       <?php
    }
}



?>

</form> 
</div>

</body>

</html>

<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>