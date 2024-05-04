<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-secondary-subtle">
<div class="row align-middle">
        <div class="col-md-12 text-center m-5 ">

<h1 class="mb-4">Update Product</h1>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
     <i class="bi bi-plus-square-fill"></i>    
  Update Product
</button>

        </div>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

<?php
$id = $_GET['pid'];
$category = "select * from product where pid=$id";
$query = mysqli_query($conn,$category);
$old = mysqli_fetch_assoc($query);


?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Product</h1>
      </div>
      <div class="modal-body">
        
      <div class="input-group mb-3">
  <span class="input-group-text" >Category Id:</span>
  <!-- <input type="text" class="form-control" name="cid" required>-->
  <select value="" name="cid" class="form-control" id="categoryId" onchange="catchange()">

<option value="">Select Category</option>
<?php
$category = "select * from category";
$query = mysqli_query($conn,$category);
while($cat = mysqli_fetch_array($query)){
 ?>
  <option value="<?php echo $cat['cid'] ?>"><?php echo $cat['cname']; ?></option>
<?php
}
?>

<script>
function catchange(){
  var categoryid = document.getElementById('categoryId').value;
  console.log(categoryid);
} 

</script>

</select> 



</div>
  
<div class="input-group mb-3">
  <span class="input-group-text" >Subcategory Id:</span>
  <!-- <input type="text" class="form-control" name="sid" required> -->

  <select value="" name="sid" class="form-control">
  <option value="">--Select Category--</option>
<?php
$id = $_GET['sid'];
$category = "select * from subcategory";
$query = mysqli_query($conn,$category);
while($cat = mysqli_fetch_array($query)){
 ?>
  <option value="<?php echo $cat['sid']; ?>"><?php echo $cat['sname']; ?></option>
 <?php
}

?>
</select> 
</div>

      <div class="input-group mb-3">
  <span class="input-group-text" >Product Name:</span>
  <input type="text" value="<?php echo $old['pname'] ?>" class="form-control" name="uname" required>
</div>



<span class="input-group-text modal-header justify-content-center">Product Image</span>
<br>

<div class="input-group mb-3">
  <input type="file" class="form-control" name="uimage" required>
  <label class="input-group-text">Upload</label>
</div>

  
<div class="input-group mb-3">
  <span class="input-group-text" >Product Price:</span>
  <input type="text" value="<?php echo $old['price'] ?>" class="form-control" name="price" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >Product Quantity:</span>
  <input type="text" class="form-control" value="<?php echo $old['qty'] ?>" name="qty" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >Produvt Brand:</span>
  <input type="text" class="form-control" name="brand" required>
</div>

  
<div class="input-group mb-3">
  <span class="input-group-text" >Product Description:</span>
  <!-- <input type="text" class="form-control" value="<?php // echo $old['description'] ?>" name="dpt" required></input> -->
  <textarea id="" name="dpt" cols="30" value="<?php echo $old['description'] ?>" rows="10"><?php echo $old['description'] ?></textarea>
</div>

  


      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="update">Update Product</button>
      </div>
    </div>

    </form>

  </div>
</div>

</form>

</body>

<?php

if(isset($_POST['update'])){
    $id = $_GET['pid'];
    $cid = $_POST['cid'];
    $sid = $_POST['sid'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $brand = $_POST['brand'];

    $dpt = $_POST['dpt'];


    $name = $_POST['uname'];
    
    $path = $_FILES['uimage']['name'];
	if($path!="")
	{
	
	$new_file_name=$path;
	$path= "../image/".$path; 

move_uploaded_file($_FILES['uimage'] ['tmp_name'],$path);
	}

    $updatequery = "update product set pid=$id ,cid=$cid ,sid= $sid, pname='$name' ,pimage='$new_file_name' ,brand='$brand' ,price='$price', description='$dpt' ,qty='$qty' where pid=$id ";
    $query = mysqli_query($conn , $updatequery);

    if($query){
        echo "Category is Updated ";?>
       <script>
        window.location.href = 'product.php';
       </script>
       <?php
    }

}
?>

