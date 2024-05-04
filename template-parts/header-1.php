<header class="header-1">
    <!-- top nav bar starts -->
    <div class="top-bar bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav justify-content-start">
                        <li class="nav-item fs-6"><a class="nav-link"><i class="fa-solid fa-envelope"></i> electromart@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-end">
                        <li  class="nav-item">
                            <a class="nav-link"><i class="fa-solid fa-location-dot"></i> Store locator</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link"><i class="fa-solid fa-truck"></i> Free shipping</a>
                        </li>
                        <li  class="nav-item">
                            <a class="nav-link" href="admin2/adminlogin.php"><i class="fa-solid fa-login"></i>Admin Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top nav bar ends -->

    <!-- menu bar starts -->
    <div class="menu-bar admin-menu-2 py-2">
        <div class="container logo">
            <div class="row">
                <div class="col-md-1">
                    <div class="img-wrapper">
                        <img src="./assets/img/logo/electrologo.png" alt="image can't display" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8 d-flex align-items-center">

                    <ul class="nav nav-actions">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories</a>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=1">Television & Accessories</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=2">Home Appliances</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=3">Phone & Wearables</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=4">Computer & Tablets</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=5">Gaming Accesories</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=7">Camera</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=8">Speaker</a></li>
                                    <li><a class="dropdown-item p-3" href="subcategory.php?cid=9">Kitchen Appliances</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a href="category3.php" class="nav-link">Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="feedback.php" class="nav-link">Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a href="previous.php" class="nav-link">Orders</a>
                            </li>
                        </ul>
                    </div>
                <div class="col-md-3 d-flex align-items-center">
                    <ul class="nav nav-actions">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tooltip" data-placement="top"
                               title="Search" data-bs-toggle="modal"
                                    data-bs-target="#searchModal">
                                <i class="fa-solid fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="wishlist.php" class="nav-link" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <i class="fa-solid fa-heart"></i>
                             <sup>   <?php   if(isset($_SESSION['wishlist'])){
                                    $count2 = count($_SESSION['wishlist']);
                                    echo $count2;
                                }     ?> </sup>
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="carts.php" class="nav-link" data-toggle="tooltip" data-placement="top" title="Shopping Bag">
                                <i class="fa-solid fa-bag-shopping"></i>
                             <sup> <?php   if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo $count;
                                }     ?> </sup> 
                            </a>
                        </li>
                        <li class="nav-item">
                        <?php
					    if(!isset($_SESSION['username']))
					    //if($_SESSION['u_nm']=="")
					{
					?> <a href="signup.php" class="nav-link" data-toggle="tooltip" data-placement="top" title="My Account"><i class="fa-solid fa-user"></i>
                    </a>
                        <?php }else { ?>
				<a href="logout.php" class="nav-link" style="font-size:17px">
                <i class="fa-solid fa-user" title="LogOut"></i>
					<?Php echo "LogOut";}?>
                    </a> 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include 'search-bar.php' ?>
    </div>
    <!-- menu bar ends -->


</header>