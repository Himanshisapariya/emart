<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: green;
    }
    .himanshi{
        /* text-shadow: 1px 1px 2px black,  0 0 5px darkblue; */
        
    }
</style>
    <?php include_once './template-parts/header.php'; ?>
<?php include_once './template-parts/header-2.php'; ?>

<?php

include("connection.php");
?>
</head>
<body>
    
<?php
 

$user = $_SESSION['username'];
$userr = strtoupper($user);

?>


<div class="container mt-5 realated-products image-size">
<div class="row g-5 d-flex justify-content-center">
    
<div class="d-flex align-items-center justify-content-center text-secondary">
<?php  echo "<h1>Hello  $userr  Here Your Previous Orders.</h1>"?>
 </div>

    <div class="d-flex justify-content-center">
    <table class="table table-striped table-bordered table-primary table-border border-2 rounded-top text-center">
        <thead class="mb-5">
            <tr>
                <th scope="col"><h5>Product Name</th>
                <th scope="col"><h5>Product Price</th>
                <th scope="col"><h5>Image</th>
                <th scope="col"><h5>Quantity</th>
            </tr>
        </thead>
        <tbody class="text-center">

        <?php
$selectquery = "(select * from cart where uname= '$user')";
$query = mysqli_query($conn , $selectquery);

while($orders = mysqli_fetch_array($query)){
    ?>
                <tr>
                    <td><?php echo $orders['pname']  ?></td>
                    <td><?php echo $orders['pprice']  ?></td>
            
                    <td>   
                    <img src="./image/<?php echo $orders['piamge'];  ?>" alt="" width="200px">
                 </td>
        
                    <td><?php echo $orders['pquantity']  ?></td>
                    
                    
                </tr>
            <?php
            }
            ?>      

        </tbody>

    </table>

    </div>
  
</div>
</div>


    
</body>
</html>