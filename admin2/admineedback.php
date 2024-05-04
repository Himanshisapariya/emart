<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<style>
  h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 11px blue, 0 0 5px darkblue;
}
</style>

<body>
<?php
include("header-2.php");
    ?>

    <div class="p-5">
      <div class="text-center">
        <h1 class="text-center text-light mb-5">FEEDBACK</h1>
      </div>

    <table class="table table-striped table-primary table-bordered border-10 rounded-top border-dark-subtle">
        <thead>
            <tr>
                <th scope="col" class="rounded-start">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th class="rounded-end">Remove</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from feedback");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>
<form action="" method="get">
                <tr>
                    <td><?php echo $fetchcat['id']  ?></td>
                    <td><?php echo $fetchcat['fname']  ?></td>
                    <td><?php echo $fetchcat['lname']  ?></td>
                    <td><?php echo $fetchcat['email']  ?></td>
                    <td><?php echo $fetchcat['subject']  ?></td>
                    <td><?php echo $fetchcat['message']  ?></td>
                    <td><a href="admineedback.php?remove=<?php echo $fetchcat['id']?>"><button type="button" class="btn btn-danger w-100">Remove</button></a></td>
                </tr>
                </form>
            <?php
            }
            ?>

        </tbody>
    </table>
    </div> 
</body>

</html>

<?php

if(isset($_GET['remove'])){ 
    include("connection.php");
    $remove = "delete from feedback where id=".$_GET['remove'];
    $query = mysqli_query($conn , $remove);

    if($query){
        echo "
        <script>
        alert('deleted');
        </script>
        ";
    }
}



?>