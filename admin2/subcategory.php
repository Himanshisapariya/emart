<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subategories</title>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Subcategory</h1>
      </div>
      <div class="modal-body">

      <div class="input-group mb-3">
  <span class="input-group-text" >Category Id:</span>
<!-- <input type="number" class="form-control" name="cid" required> -->

<select value="" name="cid" class="form-control">

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
</select>


</div>

      <div class="input-group mb-3">
  <span class="input-group-text" >Subcategory Name:</span>
  <input type="text" class="form-control" name="sname" required>
</div>

<span class="input-group-text modal-header justify-content-center">Subcategory Image</span>
<br>

<div class="input-group mb-3">
  <input type="file" class="form-control" name="simage" accept=".jpg , .png ,.jpeg ,.svg" required>
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
    $cid = $_POST['cid'];

    $name = $_POST['sname'];
    
    $path = $_FILES['simage']['name'];
	if($path!="")
	{
	
	$new_file_name=$path;
	$path= "../image/".$path; 

move_uploaded_file($_FILES['simage'] ['tmp_name'],$path);
	}

    $insertquery = "insert into subcategory(cid ,sname , simage) values ('$cid', '$name' , '$new_file_name')";
    $query = mysqli_query($conn , $insertquery);

    if($query){
        echo "SubCategory is Inserted ";
    }

}
?>










    <div class="p-5">
      <div class="text-center">
        <h1 class="text-center mb-5">SUBCATEGORIES</h1>
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#addproduct">
        <i class="fa-solid fa-square-plus"></i> Insert Subcategory</button>  
      </div><br>
        
    <table class="table table-striped table-secondary-subtle table-bordered border-10 rounded-top border-dark-subtle text-center">
        <thead>


            <tr>
                <th scope="col">Sid</th>
                <th scope="col">Sname</th>
                <th scope="col">Simage</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

        <?php
        include("connection.php");

if(isset($_GET['remove']))
{
    $del="delete from subcategory where sid=".$_GET['remove'];
$query = mysqli_query($conn , $del);


if($query){
    echo "
    <script>
    alert('Your Subcategory Is Deleted');
    location.replace('subcategory.php');
    </>
    ";
}


}

?>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from subcategory");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>
            <form action="" method="">

                <tr>
                    <td ><?php echo $fetchcat['sid']  ?></td>
                    <td><?php echo $fetchcat['sname']  ?></td>
                    <td class="d-flex justify-content-center container-fluid"><img src="./image/<?php echo $fetchcat['simage']  ?>" alt=""></td>
                        <td style="cursor:pointer"><a href="updsubcategory.php?sid=<?php echo $fetchcat['sid']?>"><button type="button" class="btn btn-success w-100">Edit</button></a></td>
                        <td style="cursor:pointer"><a href="subcategory.php?remove=<?php echo $fetchcat['sid'] ?>"><button type="button" class="btn btn-danger w-75">Remove</button></a></td>
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

