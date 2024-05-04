<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

<?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>
<?php
?>

    <main>
        <!-- Page Title -->
        <div class="container-fluid heading py-4 pg-title text-black">
            <div class="row py-4">
                <div class="col-md-12  text-center">
                    <h1>CHECKOUT</h1>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Content -->
        <div class="container cart bg-body-tertiary p-5 rounded mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="text-uppercase">Billing Information</h3>
                    <hr class="mt-4 mb-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="thankyou.php" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input  name="fname" type="text" class="form-control" id="fname" placeholder="First Name" required>
                                    <label for="">First Name</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
                                    <label for="">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your E-mail" required>
                                    <label for="">Your E-mail</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="mobile" type="tel" class="form-control" id="mobile" placeholder="Mobile">
                                    <label for="">Mobile</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="h5 py-3">Address</p>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="address1" type="text" class="form-control" id="address-line-1" placeholder="Address
                                    Line 1" required>
                                    <label for="">Address Line 1</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input name="address2" type="text" class="form-control" id="address-line-2" placeholder="Address
                                    Line 2">
                                    <label for="">Address Line 2</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="pincode" type="text" class="form-control" id="pincode" placeholder="Pincode">
                                    <label for="">Pincode</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="city" type="text" class="form-control" id="city" placeholder="City" required>
                                    <label for="">City</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="district" type="text" class="form-control" id="district" placeholder="District">
                                    <label for="">District</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input name="state" type="text" class="form-control" id="state" placeholder="State">
                                    <label for="">State</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg mt-5" name="placeorder" type="submit">Place Order</button>
                </div>
                <?php

?>
            <!-- <div class="row py-3 mt-5">
                <div class="success-message bg-success text-light p-4 rounded shadow text-center">
                    <span class="fs-2 d-block">Thank You!</span>
                    <span class="fs-4 d-block">Your order has been placed.</span>
                </div>
            </div> -->
        </div>
        <!-- Content -->

        
 <!-- <script>
    alert("Your Order Has Been Placed");
    window.location.href='feedback.php'; 
 </script> -->
    </main>
</html>
    <?php 

include ("connection.php");

// $selectquery = ("select * from cart");
// $query = mysqli_query($conn , $selectquery);

// while($items = mysqli_fetch_array($query)){
// echo $items['pname'];
// echo $items['pprice'];
// }


if(isset($_POST['placeorder'])){

    echo "hello";
 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$pincode = $_POST['pincode'];
$city= $_POST['city'];
$district = $_POST['district'];
$state = $_POST['state'];


$insertquery = "insert into checkout(fname , lname ,email ,mobile ,address1 ,address2 ,pincode ,city ,district , state)
 values ('$fname' , '$lname' , '$email' ,'$mobile' , '$address1' ,'$address2' , '$pincode' , '$city' ,'$district' , '$state')";

$query = mysqli_query($conn , $insertquery);


   
if($insertquery){

    ?>
    <!-- thank you message -->
        <div class="row py-3 mt-5">
                <div class="success-message bg-success text-light p-4 rounded shadow text-center">
                    <span class="fs-2 d-block">Thank You!</span>
            <h2> <span class="fs-4 d-block">Your order has been placed.
             </span> </h2>
             <span>Share Us Your Feedback Here.</span>
             <a href="feedback.php">
                Feedback</a>
                </div>
            </div>


            <?php
}else{
    echo "data is not inserted";
}
}

?>
  </form>

 


<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>