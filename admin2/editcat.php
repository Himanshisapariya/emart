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



Button trigger modal
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
     <i class="bi bi-plus-square-fill"></i>    
  Insert Category
</button>



<!-- Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

<form action="" method="post" enctype="multipart/form-data">

    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
      </div>
      <div class="modal-body">

      <div class="input-group mb-3">
  <span class="input-group-text" >Category Name:</span>
  <input type="text" class="form-control" name="cname" required>
</div>

<span class="input-group-text modal-header justify-content-center">Category Image</span>
<br>

<div class="input-group mb-3">
  <input type="file" class="form-control" name="image" accept=".jpg , .png ,.jpeg ,.svg" required>
  <label class="input-group-text">Upload</label>
</div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="add">Add</button>
      </div>
    </div>

    </form>

  </div>
</div>

</form>



</body>

<?php

include("connection.php");
if(isset($_POST['add'])){

    $name = $_POST['cname'];
    
    $path = $_FILES['image']['name'];
	if($path!="")
	{
	
	$new_file_name=$path;
	$path= "../image/".$path; 

move_uploaded_file($_FILES['image'] ['tmp_name'],$path);
	}

    $insertquery = "insert into category(cname , cimage) values ('$name' , '$new_file_name')";
    $query = mysqli_query($conn , $insertquery);

    if($query){
        echo "Category is Inserted ";
    }

}
?>

