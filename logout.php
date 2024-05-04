 
<?php
include_once './template-parts/header.php';


session_start();
   if(isset($_SESSION['username'])){
       session_destroy();
       header('location: login.php');
   }
   else{
       header('location: index.php');
   }

   include_once './template-parts/footer.php';
?>