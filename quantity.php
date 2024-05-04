<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <style>
        input::-webkit-inner-spin-button,
        input::-webkit-outer-spin-button{
            -webkit-appearance: none;
        }
    </style>

<?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>

<?php
include "connection.php";


if (isset($_GET['sid']))
    $sid = $_GET['sid'];

if (isset($_GET['pid']))
    $pid = $_GET['pid'];

$sel = mysqli_query($conn, "select * from product where pid =$pid");
while ($prods = mysqli_fetch_array($sel)) {
?>

    <main class="product_detail">
        <form action="mymgcart.php" method="post">
            <div class="container-fluid heading py-4 pg-title text-black">
                <div class="row py-4">
                    <div class="col-md-12  text-center">
                        <h1><?php echo $prods['pname'] ?></h1>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="./image/<?php echo $prods['pimage'] ?>" class="img-fluid" height="100" alt="Image can't loaded">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-info">
                            <h2><?php echo $prods['pname'] ?></h2>
                            <h3>₹<?php echo $prods['price'] ?></h3>
                            <h1><?php echo $prods['brand'] ?></h1>
                            <hr>
                             
                           <b><?php echo $prods['description'] ?></b>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <div class="qty-wrapper d-flex w-25">
                                    <form action="" method="post">
                                        <span class="btn btn-dark rounded-0 minus">-</span>
                                        <input type="number" min="1" name="qty" class="form-control rounded-0 qty text-center" value="1" />
                                        <span class="btn btn-dark rounded-0 plus">+</span>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="actions py-3">
                            <div class="row">
                                <div class="col">
                                    <a href="carts.php">
                                        <button type="submit" class="btn btn-outline-dark btn-lg w-100" name="addtocart"><i class="fa-solid fa-shopping-bag"></i> Add to cart</button>
                                    </a>
                                </div>

                                
                                <div class="col">
                                    <a href="wishlist.php">
                                        <button class="btn btn-dark btn-lg w-100" name="wishlist"><i class="fa-solid fa-heart"></i> Add to Wishlist</button>
                                    </a>
                                </div>

                                <input type="hidden" name="item_name" value="<?php echo $prods['pname']; ?>">
                                <input type="hidden" name="price" value="<?php echo $prods['price'] ?>">
                                <input type="hidden" name="pimage" value="<?php echo $prods['pimage'] ?>">
                                <!-- <input type="hidden" name="qty" value="<?php  $_POST['qty'] ?>"> -->
        </form>
        </div>
        </div>
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
                <span><?php echo $prods['brand']; ?></span>
            </div>
        </div>
        <div class="share-this mt-4">
            <p class="fs-5 text-uppercase">Share</p>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link px-2 py-0 text-black" href="https://facebook.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 py-0 text-black" href="https://twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 py-0 text-black" href="https://www.instagram.com/hima_nshi21114">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 py-0 text-black" href="https://www.whatsapp.com">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        </div>
        </div>


    <?php
}

    ?>

    </main>
</html>
    <?php include_once './template-parts/footer-1.php'; ?>
    <?php include_once './template-parts/footer.php'; ?>