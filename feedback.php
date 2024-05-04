<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

<?php 
//include "connection.php"
include_once './template-parts/header.php'; ?>  
<?php include_once './template-parts/header-2.php'; ?>

<main>
    <div class="container-fluid heading py-4 pg-title text-black">
        <div class="row py-4">
            <div class="col-md-12  text-center">
                <h1>FEEDBACK</h1>
            </div>
        </div>
    </div>
    
    <div class="container   mt-5 ">
        <div class="row">
            <div class="col-md-6 bg-info-subtle border p-5 offset-md-3">
                <form action="" method="post">
                    <div class="row">
                        <div class="col py-3">
                            <label for="first" class="form-label"><b>First Name</b></label>
                            <input type="text" name="fname" class="form-control" required placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col py-3">
                            <label for="last" class="form-label"><b>Last Name</b></label>
                        <input type="text" required name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                        <div class="col py-3">
                            <label for="last" class="form-label"><b>Email</b></label>
                        <input type="text" name="email" class="form-control" placeholder="Your mail" aria-label="Last name">
                        </div>
                        <div class="col-12 py-3">
                            <label for="subject" class="form-label"><b>Subject</b></label>
                        <input type="text" name="subject" required class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="col py-3">
                            <label for="message" class="form-label"><b>Message</b></label>
                            <textarea class="form-control" name ="message" placeholder="Leave a message here..." id="message" style="height: 100px"></textarea>
                        </div>
                        <div class="row pt-2">
                        <div class="col d-flex justify-content-center">
                            <button class="btn btn-primary px-5" type="submit" name="submit" >Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
</html>

<?php include_once './template-parts/footer.php'; ?>


<?php 

include ("connection.php");

if(isset($_POST['submit'])){

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$insertquery = "insert into feedback(fname , lname ,email ,subject ,message)
 values ('$fname' , '$lname' , '$email' ,'$subject' , '$message')";

$query = mysqli_query($conn , $insertquery);

if($insertquery){
 ?>
 <script>
    alert("Thanks For Your Valueable Feedback.")
 </script>
 <?php
}else{
    echo "data is not inserted";
}
}
?>

<?php include_once './template-parts/footer-1.php'; ?>
<?php include_once './template-parts/footer.php'; ?>