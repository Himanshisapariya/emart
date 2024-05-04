<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>

<?php include_once './template-parts/header.php'; ?>  
<?php include_once './template-parts/header-2.php'; ?>

<main>
    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12  text-center">
                <h1>WISHLIST</h1>
                <form action="" method="post">
                <button class="btn btn-primary" name="empty">Empty Wishlist</button>
                </form>
                <?php
if(isset($_POST['empty'])){
 unset($_SESSION['wishlist']);
}

?>
            </div>
        </div>
    </div>

    <div class="container cart bg-body-tertiary p-5 rounded mt-5">

        <!--<div class="row">
            <div class="col">
                <h3 class="text-uppercase">Wishlist</h3>
                <hr class="mt-4 mb-5">
            </div>
        </div>-->

        <div class="row">
            <div class="col-md-12">
                <?php
    if(!isset($_SESSION['wishlist'])) {
        echo "Hello"."  ".$_SESSION['username'];
         echo "<h1>Your Wishlist Is Empty Now</h1>";
    } else {
        if(isset($_SESSION['wishlist'])) {
            foreach($_SESSION['wishlist'] as $key => $value){
	?> 

    <form action="mymgcart.php" method="post">
    <div class="container mt-5 realated-products image-size">
        <div class="row d-flex justify-content-center g-5">
            <div class="col-md-3 p-3 border rounded mx-4 product-item">
                <div class="img-wrapper border bg-body-secondary p-4">
                    <img src="./image/<?php  echo $value['pimage']?>" class="img-fluid" height="100"  alt="Image can't loaded" >
                </div>
                <h3 class="fs-4 mt-3 text-center "><?php echo $value['item_name'] ?></h3>
                <p class="price text-center fs-5"><?php echo "Price: ₹".$value['price']  ?></p>
                
                <div class="btn-group w-100" aria-label="Basic outlined example">
                
                <a href="" class="btn btn-lg">
                    <button name="addtocart" class="btn btn-outline-dark btn-lg">
                        <i class="fas fa-shopping-bag"></i> Add to cart
                    </button>
                </a>
                <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ;?>">
                <input type="hidden" name="price" value="<?php echo $value['price'] ?>">
                <input type="hidden" name="pimage" value="<?php echo $value['pimage'] ?>">
                <input type="hidden" name="qty" value="1">
                <a href="wishlist.php" class="btn btn-outline-yellow px-0 d-flex justify-content-center align-items-center">
                <form action="mymgcart.php" method="POST">
                    <button class="btn btn-danger" name="remove_wishlist">
                    <i class="fas fa-trash"></i>
                    </button>
                    <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>"></a>
                </form>


                </div>
            </div>        

    
        </div>
    </div>
<?php
        }
    }

    }
    ?>


</main>
</form>

            </div>
        </div>

    </div>

<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>