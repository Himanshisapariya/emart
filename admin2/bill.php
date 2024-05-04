<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billing Details</title>
  </head>
  <body>
  <?php
include("header-2.php");
    ?>

<div class="container mt-5">

<h1 class="text-center text-white bg-dark mb-5">BILLING DETAILS</h1>
  
  <table class="table bg-success-stripped">
  <thead>
    <tr>
      <th scope="col">Order Id</th>
      <th scope="col">User Name</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  <?php

include("connection.php");
$query = mysqli_query($conn, "select * from cart");

while ($fetch = mysqli_fetch_array($query)) {
  

?>
    <tr>
    <td><?php  echo $fetch['order_id'] ?></td>
    <td><?php  echo $fetch['uname'] ?></td>
    <td><?php  echo $fetch['pname'] ?></td>
    <td><?php  echo $fetch['pprice'] ?></td>
    <td><?php  echo $fetch['pquantity'] ?></td>   
    </tr>
    <?php
}
    ?>
 
  </tbody>
</table>
</div> 

</body>
</html>