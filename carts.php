<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
<?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>
<?php 

error_reporting(0);

?>

<main>
    <!-- Page Title -->
    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12 text-center">
                <h1>CART</h1>
                <?php
                if(isset($_SESSION['cart'])){
                ?>
                <form action="" method="post">
                <button class="btn btn-secondary btn-lg" name="empty">Empty The cart</button>
                </form>
                <?php
                }
if(isset($_POST['empty'])){
 unset($_SESSION['cart']);
 header("location:index.php");
}          
?>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Content -->


    <div class="container cart bg-body-tertiary p-5 rounded mt-5">

        <div class="row">
            <div class="col">
                <h3 class="text-uppercase">Shopping Cart</h3>
                <hr class="mt-4 mb-5">
            </div>
        </div>
    
      
        <?php

   $count2 = $_SESSION['cart'];
   if(!$_SESSION['cart']){
  echo $_SESSION['username']."<h1>Your Cart Is Empty</h1>";
   }else{
?> 

        <div class="row">
            <div class="col-md-12">
         
                <div class="cart-items">
                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                    ?>


                            <div class="cart-item p-4 shadow d-flex rounded mb-4">
                                
                                <img src="./image/<?php echo $value['pimage'];  ?>" alt="" class="img-thumbnail" width="100">
                        
                                <div class="product-info ms-3 w-50">

                                    <h4><?php echo $value['item_name'] ?></h4>
                                    <p><b>Price:</b> ₹<?php echo $value['price'] ?>
                                        <input type="hidden" class="iprice" value="<?php echo $value['price'] ?>">
                                    </p>

                                </div>


                                <div class="qty-wrapper w-25 d-flex align-items-center justify-content-center">
                                    <span class="btn btn-dark rounded-0 minus">-</span>
                                    <input type="text" class="form-control rounded-0 qty text-center iquantity" onchange='subtotal()' value="<?php echo $value['quantity'] ?>" min="1" name="qty" />
                                    <span class="btn btn-dark rounded-0 plus">+</span>
                                </div>
<!-- total  -->
                                <div class="qty-wrapper w-25 d-flex align-items-center justify-content-center itotal">
                                ₹ 0
                                </div>

                                <!-- total -->


                                <div class="actions-wrapper d-flex align-items-center justify-content-center">
                                    <form action="mymgcart.php" method="POST">
                                        <button class="btn btn-danger" name="remove_item">Remove<i class="fas fa-trash"></i></button>
                                        <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
                                    </form>
                                </div>

                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-4">
                            <h3>Summary</h3>
                            <hr class="mt-4 mb-5">
                            <div class="summary-item d-flex justify-content-between">
                                <span class="fs-5">Total</span>
             <form action="" method="post">
            
                                <span class="fs-5" name= "subtotal" id="gtotal">₹</span>
<input type="hidden" name="subtotal2" value = "<?php $_POST['subtotal'] ?>">
            
                            </div>
                            <!-- <div class="summary-item d-flex justify-content-between">
                                <span class="fs-5">Shipping Charge </span>
                                <span class="fs-5"><?php echo "  " . $charge = '49'; ?></span>
                            </div>
                            <hr>
                            <div class="summary-item d-flex justify-content-between">
                                <span class="fs-5">Total</span>
                                <span class="fs-5" id="tgtotal"></span>
                            </div> -->
                            <br><br><br>
                            <hr>
                            <div class="d-flex justify-content-center align-items-center>
                        <div class=" form-check">
                                <h2>
                                    <input class="form-check-input d-flex justify-content-between" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                </h2>
                                &nbsp;&nbsp;&nbsp;
                                <label class="form-check-label d-flex justify-content-between" for="flexRadioDefault1">
                                    <h2>Cash On Delivery</h2>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="checkout.php">
                    <button class="btn btn-dark btn-lg w-100 mt-5" type="submit" name="checkout">Checkout</button>
              </a>
            </div>
        </div>
    </div>
    <?php

}  

include ("connection.php");
$qty2 = $value['quantity'];

if(isset($_POST['checkout'])){

    foreach($_SESSION['cart'] as $key=>$value){

    $name = $_SESSION['username'];

    $pname = $value['item_name'];
    $price = $value['price'];
    $qty = $value['quantity'];
    $image = $value['pimage'];

    // $insertquery = "INSERT INTO `cart`(`uname` ,`pname`, `piamge`, `pprice`, `pquantity`,`date`) VALUES ('$name','$pname','$image','$price','$qty2')";

     $insertquery = "INSERT INTO cart(`uname` ,`pname`, `piamge`, `pprice`, `pquantity`) VALUES ('$name','$pname','$image','$price','$qty2')";

  
    $query = mysqli_query($conn , $insertquery);
    }

    if($query){
        ?>
        <script>
            <?php
                unset($_SESSION['cart']);
            ?>
            location.replace("checkout.php");
            
            
        </script>
        <?php
    }else{
        echo "not inserted";
    }
}


   ?>
    <!-- Content -->
    </form>
</main>
</html>

<script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');


    function subtotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value);
        }
        gtotal.innerText = "₹ "+gt;
    }
    subtotal();


    function grandtotal() {
        document.getElementById('tgtotal').innerText = gt + 49;
    }
    grandtotal();
</script>


<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>