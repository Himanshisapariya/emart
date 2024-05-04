<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
<?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>  


<main>
<div class="container-fluid heading py-4 pg-title text-black bg-info-subtle">
    <div class="row py-5">
        <div class="col-md-12 text-center">
            <h1 class="py-4 fs-1">CATEGORIES</h1>
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
                    </div>>

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

    <div class="container mt-5 realated-products image-size">
        <div class="row g-5 d-flex justify-content-center">
           
        <?php
        include("connection.php");
$categories = mysqli_query($conn ,"select * from category");

while($cat=mysqli_fetch_array($categories)){
    ?>    


            <a href="subcategory.php?cid=<?php echo $cat['cid'] ?>" class="col-md-3 p-3 mx-3 border rounded text-decoration-none text-black text-center product-item">    
                <div class="">
                    <div class="img-wrapper border bg-body-secondary p-4">
                        <img src="./image/<?php echo $cat['cimage']; ?>" class="img-fluid" height="100"  alt="Image can't loaded" >
                    </div>
                    <span class="fs-4 d-block pt-3"><?php echo $cat['cname']; ?></span>
                </div>
            </a>
<?php           
}       
    ?> 
            
            

        
        </div>
    </div>
</main>
</html>
<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>