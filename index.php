<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<?php
include_once './template-parts/header.php';
ob_start();
session_start();

if(!isset($_SESSION['username'])){
    echo "<h1>Hello , Please Login First</h1>";
    header("location:login.php");
}else{
 

include "connection.php"
?>
<?php include_once './template-parts/header-1.php'; ?>
    <main>
        <!-- slider starts -->
        <div class="container-fluid p-0">
            <div id="homeHero" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" data-aos="zoom-in">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="./assets/img/slider1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            
                            <h4 class="pt-2 heading-slider animate__animated animate__fadeInRight" ><b>Noise</b></h4>

                            <h1 class="h1slider animate__animated animate__slideInDown">Headphones and<br>
                                Bluetooth Headphones</h1>

                            <h5 class="pt-2 heading-slider animate__animated animate__fadeInRight" >Complete collection of headphones</h5>

                            <a href="subcategory.php?cid=3 and sid=8"><button class="btn btn-lg mt-3 btn-white  shopslider animate__animated animate__zoomIn" >
                                Shop Now</button></a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="./assets/img/slider2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            
                            <h4 class="pt-2 heading-slider animate__animated animate__fadeInRight"><b>Samsung</b></h4>

                            <h1 class="h1slider animate__animated animate__slideInDown" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="700">Mobile Phones</h1>
                            
                            <h5 class="pt-2 heading-slider animate__animated animate__fadeInRight">Complete collection of mobile phones</h5>

                            <a href="product.php?sid=7 and cid=3 and pid=16"><button class="btn btn-lg mt-3 btn-white shopslider animate__animated animate__zoomIn" data-aos="zoom-out" data-aos-delay="300"
                                data-aos-duration="1000">Shop Now</button></a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="./assets/img/slider3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="pt-2 heading-slider animate__animated animate__fadeInRight" ><b>Sony</b></h4>

                            <h1 class="h1slider animate__animated animate__slideInDown" data-aos="fade-down" data-aos-easing="linear"
                                data-aos-duration="700">Loud Speaker</h1>

                            <h5 class="pt-2 heading-slider animate__animated animate__fadeInRight" >Complete collection of loud speakers</h5>

                            <a href="subcategory.php?cid=8"><button class="btn btn-lg mt-3 btn-white shopslider animate__animated animate__zoomIn" data-aos="zoom-out" data-aos-delay="300"
                                data-aos-duration="1000">Shop Now</button></a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeHero" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeHero" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- slider ends -->

        <!-- product_list_1 starts -->
        <div class="container py-5 px-4 products-list">
            <div class="row">
                <div class="col-md-4 product-item">
                    <div class="bg-dark-subtle px-4 py-5 d-flex align-items-center justify-content-between rounded shadow"
                         data-aos="flip-right" data-aos-delay="300"
                         data-aos-duration="1000">
                        <div class="title-wrapper">
                            <h2>Laptop</h2>
                            <h5>Best Deals</h5>
                            <a class="btn btn-dark border-0 mt-3" href="product.php?sid=10 and cid=4">Shop now</a>
                        </div>
                        <div class="img-wrapper">
                            <img src="./assets/img/homelaptop.png" class="img-fluid" height="200"  alt="Image can't loaded" data-aos-delay="200"
                                 data-aos-duration="1000">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-item">
                    <div class="bg-dark-subtle px-4 py-5 d-flex align-items-center justify-content-between rounded
                    shadow"  data-aos="flip-right" data-aos-delay="100"
                         data-aos-duration="1000">
                        <div class="title-wrapper">
                            <h2>Headphone</h2>
                            <h5>Best Deals</h5>
                            <a class="btn btn-dark border-0 mt-3" href="subcategory.php?cid=3 and sid=8">Shop now</a>
                        </div>
                        <div class="img-wrapper">
                            <img src="./assets/img/homeheadphone.png" class="img-fluid" height="200" alt="Image can't loaded">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-item">
                    <div class= "bg-dark-subtle px-4 py-5 d-flex align-items-center justify-content-between rounded
                    shadow"  data-aos="flip-right">
                        <div class="title-wrapper">
                            <h2>Refrigerator</h2>
                            <h5>Best Deals</h5>
                            <a class="btn btn-dark border-0 mt-3" href="subcategory.php?cid=2 and sid=5">Shop now</a>
                        </div>
                        <div class="img-wrapper">
                            <img src="./assets/img/homefridge.png" class="img-fluid" height="200" alt="Image can't loaded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product_list_1 ends  -->

        <!-- category list starts -->

        <?php    

include("connection.php");


$sel = mysqli_query($conn ,"select * from category");
$cat=mysqli_fetch_array($sel)

    ?>
        <div class="container categories-wrapper mb-5">
            <div class="row">
                <div class="title py-5 mt-5">
                    <h1 class="text-center">Categories</h1>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="50"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=7">
                        <i class="fa-solid fa-camera fs-1"></i>
                        <h6 class="mt-3">Camera</h6>
                    </a>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="150"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=5">
                        <i class="fa-solid fa-gamepad fs-1"></i>
                        <h6 class="mt-3">Gaming</h6>
                    </a>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="250"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=3 and sid=8">
                        <i class="fa-solid fa-headphones fs-1"></i>
                        <h6 class="mt-3">Headphone</h6>
                    </a>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="350"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=4">
                        <i class="fa-solid fa-laptop fs-1"></i>
                        <h6 class="mt-3">Laptops & Computers</h6>
                    </a>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="450"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=3 and sid=7">
                        <i class="fa-solid fa-mobile fs-1"></i>
                        <h6 class="mt-3">Smartphone</h6>
                    </a>
                </div>
                <div class="col-md-2 text-center category-item" data-aos="fade-up" data-aos-delay="550"
                     data-aos-duration="1000">
                    <a href="subcategory.php?cid=8">
                        <i class="fa-solid fa-volume-high fs-1"></i>
                        <h6 class="mt-3">Speakers</h6>
                    </a>
                </div>
            </div>
        </div>
        <!-- category list ends -->


        <!-- RELATED PRODUCTS starts -->
 

        <div class="container realated-products image-size">
            <div class="row">
                <div class="col">
                    <div class="title py-5 mt-5">
                        <h1 class="text-center">Related Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row gy-4">
                        <div class="col-md-6" >
                            <div class="product-item border rounded p-2 " data-aos="fade-up" 
                            data-aos-delay="50" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper p-0 d-flex align-items-center">
                                    <img src="./assets/img/products/4ktv2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info position-relative">
                                    <h3 class="fs-6 mt-3">LED TV </h3>
                                    <p class="price">₹48,990</p>
                                    <a href="quantity.php?pid=1 and sid=1 and cid=1"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="150" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/androidphone-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Android Phone</h3>
                                    <p class="price">₹18,999</p>
                                    <a href="quantity.php? pid=16 and sid=7 and cid=3"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product </button></a>
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="50" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/ac-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Air Conditioner</h3>
                                    <p class="price">₹34,990</p>
                                    <a href="quantity.php?pid=9 and sid=4 and cid=2"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="150" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/bluetooth-headphone-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Headphone</h3>
                                    <p class="price">₹1,298</p>
                                    <a href="quantity.php? pid=19 and sid =8 and cid=3"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 h-100">
                    <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="250" data-aos-duration="500">
                        <div class="bg-body-secondary img-wrapper d-flex justify-content-center pb-4">
                            <img src="./assets/img/products/multimediaspeaker-3.png" style="min-height: 570px;" class="img-fluid w-100" alt="">
                        </div>
                        <div class="product-info">
                            <h3 class="fs-4 mt-3">Multimedia Speaker</h3>
                            <p class="price fs-5">₹12,943</p>
                        </div>
                        <p class="fs-5"><b>End in:</b></p>
                        <div class="countdown mb-4" id="timer" style="font-size:14px">
                        </div>
                        <a href="quantity.php?pid=39 and sid=19 and cid=8">
                            <button class="btn btn-outline-dark btn-lg w-100"> View Product </button>
</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="350" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/coffeemaker-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info position-relative">
                                    <h3 class="fs-6 mt-3">Coffee Maker</h3>
                                    <p class="price">₹2,338</p>
                                    <a href="quantity.php?pid=31 and sid=15 and cid=6"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i>  View Product </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="450" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/wachinetop-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Wachine Machine</h3>
                                    <p class="price">₹28,490</p>
                                    <a href="quantity.php?pid=6 and sid=3 and cid=2"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i>  View Product </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="350" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/fridgesingle-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Refrigerator</h3>
                                    <p class="price">₹15,590</p>
                                    <a href="quantity.php? pid=11 and sid =5 and cid=2"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                            data-aos-delay="450" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/fullframecamera-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Camera</h3>
                                    <p class="price">₹41,989</p>
                                    <a href="quantity.php?pid=36 and sid=18 and cid=7"><button class="btn btn-outline-dark add-to-cart mx-1"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- RELATED PRODUCTS ends -->

        <!-- CTA Start -->
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="cta-wrapper">
                        <h2>Good Price, Installment</h2>
                        <p>Buy laptop, genuine laptop Macbook M2, Asus Laptop…</p>
                        <a href="quantity.php?pid=23 and sid=10 and cid=4"><button class="btn btn-dark mt-3">Shop Now</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA End -->

        <!-- Top-selling starts -->
        <div class="container realated-products image-size">
            <div class="row">
                <div class="col">
                    <div class="title py-5 mt-5">
                        <h1 class="text-center">Top Selling</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="top-selling-img text-light px-4 py-5" data-aos="" 
                         data-aos-delay="" data-aos-duration="">
                        <h3>Genuine Wireless Headphones</h3>
                        <p>Stay ahead of the trend..</p>
                        <a class="btn btn-outline-light" href="quantity.php?pid=18 and sid=8 and cid=2">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row gy-4">
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="50" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/fullhdtv-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Television</h3>
                                    <p class="price">₹16,999</p>
                                    <a href="quantity.php?pid=1 and sid=1 and cid=1"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="150" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/gaminglaptop-3.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Gaming Laptop</h3>
                                    <p class="price">₹25,990</p>
                                    <a href="quantity.php?pid=26 and sid=12 and cid=5"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="250" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/fullhdprojector-2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Projector</h3>
                                    <p class="price">₹11,960</p>
                                    <a href="quantity.php? pid=4 and sid=2 and cid=1"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="350" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/handblender-2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Hand Blender</h3>
                                    <p class="price">₹2,632</p>
                                    <a href="quantity.php?pid=33 and sid=16 and cid=6"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="50" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/injectprinter-1.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info position-relative">
                                    <h3 class="fs-6 mt-3">Inkject Printer</h3>
                                    <p class="price">₹11,549</p>
                                    <a href="quantity.php?pid=24 and sid=11 and cid=4"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="150" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/iphone-2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">I-Phone</h3>
                                    <p class="price">₹66,999</p>
                                    <a href="quantity.php?pid=17 and sid=7 and cid=3"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="250" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/macbook-2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Macbook</h3>
                                    <p class="price">₹2,36,490</p>
                                    <a href="quantity.php?pid=23 and sid=10 and cid=4"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-item border rounded p-2" data-aos="fade-up" 
                                 data-aos-delay="350" data-aos-duration="500">
                                <div class="bg-body-secondary img-wrapper">
                                    <img src="./assets/img/products/dronecamera2.png" class="img-fluid" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="fs-6 mt-3">Drone Camera</h3>
                                    <p class="price">₹4,899</p>
                                    <a href="quantity.php?pid=35 and sid=17 and cid=7"><button class="btn btn-outline-dark add-to-cart mx-1 px-4"><i class="fas
                                    fa-shopping-bag"></i> View Product</button></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top-selling ends -->
    </main>
</html>
<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>
<?php
}
?>
