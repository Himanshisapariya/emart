<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .td{
            box-sizing: border-box;
            size: 500px;
            box-sizing: 500px;
        }
        table img {
            padding: 5px;
            width: 150px;
        }
        h1 {
  color: white;
  text-shadow: 1px 1px 2px black,  0 0 5px darkblue;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
<?php
include("header-2.php");
    ?>

<div class="container">





<!-- Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">

<form action="" method="post" enctype="multipart/form-data">

    <div class="modal-content">

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
      </div>
      <div class="modal-body">

      
      <div class="input-group mb-3">
  <span class="input-group-text" >Category Id:</span>
  <input type="text" class="form-control" name="cid" required>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" >Subcategory Id:</span>
  <input type="text" class="form-control" name="sid" required>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" >Product Name:</span>
  <input type="text" class="form-control" name="pname" required>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" >Product Price:</span>
  <input type="text" class="form-control" name="price" required>
</div>


     

<span class="input-group-text modal-header justify-content-center">Product Image</span>
<br>

<div class="input-group mb-3">
  <input type="file" class="form-control" name="pimage" accept=".jpg , .png ,.jpeg ,.svg" required>
  <label class="input-group-text">Upload</label>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >Product Quantity:</span>
  <input type="text" class="form-control" name="qty" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >Product Description:</span>
  <input type="text" class="form-control" name="dpt" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" >Product Brand:</span>
  <input type="text" class="form-control" name="brand" required>
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

    $cid = $_POST['cid'];
    $sid = $_POST['sid'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $dpt = $_POST['dpt'];
    $qty = $_POST['qty'];




    $name = $_POST['pname'];
    
    $path = $_FILES['pimage']['name'];
	if($path!="")
	{
	
	$new_file_name=$path;
	$path= "../image/".$path; 

move_uploaded_file($_FILES['pimage'] ['tmp_name'],$path);
	}

    $insertquery = "insert into product(cid , sid ,pname ,pimage ,qty , description ,price ,brand) values ('$cid' ,'$sid','$name' , '$new_file_name' ,'$qty','$dpt','$price', '$brand')";
    $query = mysqli_query($conn , $insertquery);

    if($query){
        echo "Category is Inserted ";
    }

}
?>










    <div class="p-5">
      <div class="text-center">
        <h1 class="mb-5">STORE PRODUCTS</h1>
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#addproduct">
        <i class="fa-solid fa-square-plus"></i> Insert Product</button>  
      </div><br>
        
    <table class="table table-striped table-secondary-subtle table-bordered border-10 rounded-top border-dark-subtle text-center">
        <thead>


            <tr>
                <th scope="col">Pid</th>
                <th scope="col">Pname</th>
                <th scope="col">Pimage</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Description</th>
                <th scope="col">Brand</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
        include("connection.php");

if(isset($_GET['remove']))
{
    $del="delete from product where pid=".$_GET['remove'];
$query = mysqli_query($conn , $del);


if($query){
    echo "
    <script>
    alert('Product IS Deleted');
    location.replace('product.php');
    </script>
    ";
}


}

?>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from product");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>
            <form action="" method="">

                <tr>
                    <td ><?php echo $fetchcat['pid']  ?></td>
                    <td><?php echo $fetchcat['pname']  ?></td>
                    <td class="d-flex justify-content-center container-fluid"><img src="./image/<?php echo $fetchcat['pimage']  ?>" alt=""></td>
                    <td><?php echo $fetchcat['price']  ?></td>
                    <td><?php echo $fetchcat['qty']  ?></td>
                    <td><?php echo $fetchcat['description']  ?></td>
                    <td><?php echo $fetchcat['brand']  ?></td>
                        <td style="cursor:pointer"><a href="updproduct.php?pid=<?php echo $fetchcat['pid']?>"><button type="button" class="btn btn-success">Edit</button></a></td>
                        <td style="cursor:pointer"><a href="product.php?remove=<?php echo $fetchcat['pid'] ?>"><Remove type="button" class="btn btn-danger">Remove</button></a></td>
                </tr>
                </form>
            <?php
            }
            ?>

        </tbody>
    </table>
    </div> 
    </div>
</body>

</html>

