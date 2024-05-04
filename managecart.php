<?php
session_start();

if($_SERVER["REQUEST_METHOD"=="POST"]){
    if(isset($_POST['cart'])){
        if(isset($_SESSION['cart'])){
            
        }else{
           
        }
    }
}

?>