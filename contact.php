<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

<?php include_once './template-parts/header.php'; ?> 
<?php include_once './template-parts/header-2.php'; ?> 

<header>
<main>
    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12  text-center">
                <h1>CONTACT US</h1>
            </div>
        </div>
    </div>

    <!-- map starts -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="map-wrapper ratio ratio-21x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.68688958263!2d70.7388938005586!3d22.27362502883913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1688914578075!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--map ends -->

<!--details starts -->
<div class="container p-5">
    <div class="row gx-5">
        <div class="col-md-6">
            <h3>Get in touch</h3>

            <h6 class="pt-3 pb-3">If You Have Any Query Related To Products And Services Contact Us Via , <br>
           </h6>

            <hr>
            <h6 class="pt-1 pb-1"><i class="fa-solid fa-location-dot"></i> <b>Address:</b> Opp. Firestation , Nirmala Convent Road , Near Kotecha Chowk , Kalawad Road ,Rajkot. </h6>
            <hr>
            <h6 class="pt-1 pb-1"><i class="fa-solid fa-phone-volume"></i> <b>Phone:</b> +919714053874</h6>
            <hr>
            <h6 class="pt-1 pb-1"><i class="fa-solid fa-envelope"></i> <b>Email:</b> electromart@gmail.com</h6>
            <hr>
        </div>
        
<!-- form starts -->   
    <div class="col-md-6">
        <form class="border p-5 bg-info-subtle" method="post">
            <div class="row">
                <div class="col py-3">
                    <label for="first" class="form-label"><b>First Name</b></label>
                    <input type="text" required name="fname" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col py-3">
                    <label for="last" class="form-label"><b>Last Name</b></label>
                <input type="text" required name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col-12 py-3">
                    <label for="subject" class="form-label"><b>Subject</b></label>
                <input type="text" required name="subject" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="col py-3">
                    <label for="message" class="form-label"><b>Message</b></label>
                    <textarea class="form-control" required name="message" placeholder="Leave a message here..." id="message" style="height: 100px"></textarea>
                </div>
                <div class="row pt-2">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary px-5" type="submit" name="submit" >Send</button>
                </div>
            </div>
            
            
            
           
        </form>
    </div>
<!-- form ends -->
    </div>

<!-- details ends -->

    
</div>
</main>
</header>
</html>
<?php 

include ("connection.php");

if(isset($_POST['submit'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$insertquery = "insert into contact (firstname , lastname ,subject ,message)
 values ('$fname' , '$lname' ,'$subject' , '$message')";

$query = mysqli_query($conn , $insertquery);

if($insertquery){
      ?>
      <script>
        alert ("Your Message Sent ");
      </script>
      <?php
}else{
    echo "data is not inserted";
}
}
?>


<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>