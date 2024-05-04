<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
        h1{
          text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
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

    <div class="p-5">
      <div class="text-center">
        <h1 class="text-center mb-5">CATEGORIES</h1>
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#addproduct">
        <i class="fa-solid fa-square-plus"></i> Insert Category</button>  
      </div><br>

    <table class="table table-striped table-secondary-subtle table-bordered border-10 rounded-top border-dark-subtle text-center">
        <thead>


            <tr>
                <th scope="col">Cid</th>
                <th scope="col">Cname</th>
                <th scope="col">Cimage</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
        include("connection.php");

if(isset($_GET['remove']))
{
    $del="delete from category where cid=".$_GET['remove'];
$query = mysqli_query($conn , $del);


if($query){
    echo "
    <script>
    alert('Category Is Deleted');
    </script>
    ";
}


}

?>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from category");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>
            <form action="" method="">

                <tr>
                    <td><?php echo $fetchcat['cid']  ?></td>
                    <td><?php echo $fetchcat['cname']  ?></td>
                    <td class="d-flex justify-content-center container-fluid"><img src="../image/<?php echo $fetchcat['cimage']  ?>" alt=""></td>
                        <td style="cursor:pointer"><a href="updcategory.php?cid=<?php echo $fetchcat['cid']?>"><button type="button" class="btn btn-success w-100">Edit</button></a></td>
                        <td style="cursor:pointer"><a href="catadmin.php?remove=<?php echo $fetchcat['cid'] ?>"><button type="button" class="btn btn-danger w-75">Remove</button></a></td>
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

