<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand</title>
    <style>
        .scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

    </style>

<?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>

 

<?php
  include("connection.php");
  $queryi = ("select * from product where brand = 'Samsung'  ");
  $himanshi =mysqli_query($conn ,$queryi);
?>  


<main class="scrollmenu">
<div class="container-fluid heading py-4 pg-title text-black bg-info-subtle">
    <div class="row py-5">
        <div class="col-md-12 text-center">
            <h1 class="py-4 fs-1">BRAND PRODUCTS</h1>
        </div>
        
        <div class="col-md-12 mt-5">
            <div class="container">
                <div class="row brand-slider justify-content-center">
                    <div class="col-md-2 d-flex justify-content-center">
                <a href="brand2.php?brand=Samsung"><img src="./assets/img/logo/samsung-logo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Philips"><img src="./assets/img/logo/philips-logo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                    <a href="brand2.php?brand=Xiomi"><img src="./assets/img/logo/xiomi-logo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=LG"><img src="./assets/img/logo/lg-logo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Sony"><img src="./assets/img/logo/sony-logo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Apple"><img src="./assets/img/logo/applelogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>
                    
                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Asus"><img src="./assets/img/logo/asuslogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Bajaj"><img src="./assets/img/logo/bajajlogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Bose"><img src="./assets/img/logo/boselogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Canon"><img src="./assets/img/logo/canonlogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Lenovo"><img src="./assets/img/logo/lenovologo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Nescafe"><img src="./assets/img/logo/nescafelogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=JBL"><img src="./assets/img/logo/jbllogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-center">
                        <a href="brand2.php?brand=Prestige"><img src="./assets/img/logo/prestigelogo.png" alt="" class="img-fluid" width="150"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div>

<?php
if($_GET['brand']){
$brand=$_GET['brand'];
}
?>  

<form action="mymgcart.php" method="post">

    
<div class="container mt-5 realated-products image-size">
<div class="d-flex justify-content-center m-3 p-5">
<?php  echo "<h1>Brand: ".$brand."</h1>"; ?>
</div>
    <div class="row d-flex justify-content-center g-5">
   <div class="border-rounded img-wrapper text-dark justify-content-center d-flex">  
   


<?php
include ("connection.php");

$sel = mysqli_query($conn ,"select * from product where brand = '$brand'");
while($prods=mysqli_fetch_array($sel)){
	?>


        <div class="col-md-3 p-3 border rounded mx-4 product-item">
            <div class="img-wrapper border bg-body-secondary p-4">

   

                <img src="image/<?php echo $prods['pimage']; ?>" class="img-fluid" height="100"  alt="Image can't loaded" >
            </div>
            <h3 class="fs-4 mt-3 text-center "><?php echo $prods['pname'] ;?></h3>
            <p class="price text-center fs-5"><?php echo "Price: ₹".$prods['price']; ?></p>
            
            <div class="btn-group w-100  aria-label="Basic outlined example">

                <a href="quantity.php?pid=<?php echo $prods['pid'];?> and sid=<?php echo $prods['sid'];?> and cid=<?php echo $prods['cid'];?>" class="btn btn-outline-dark btn-lg">
              
                <i class="fas fa-shopping-bag" name = "s1"></i>
                View Product </button>

              <a href="wishlist.php" class="btn btn-outline-dark px-0 d-flex justify-content-center align-items-center">
              <button type="submit" name="wishlist" class="btn">
                <i class="fas fa-heart"></i>
                </button></a>
                
        
                <input type="hidden" name="item_name" value="<?php echo $prods['pname']; ?>">
                <input type="hidden" name="price" value="<?php echo $prods['price'] ?>">
                <input type="hidden" name="pimage" value="<?php echo $prods['pimage'] ?>">
                                <!-- <input type="hidden" name="qty" value="<?php  $_POST['qty'] ?>"> -->

               
                
                
            


            </div>
        </div>   

        <?php
}
?>
      
      </form>
</div> 
    </div>
</div>



</div>

</main>

<?php include_once './template-parts/footer.php'; ?>
<?php include_once './template-parts/footer-1.php'; ?>