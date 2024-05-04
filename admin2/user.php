<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        .td{
            box-sizing: border-box;
            size: 500px;
            box-sizing: 500px;
        }
        table img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
        }
    </style>
</head>

<body>
<?php
include("header-2.php");
    ?>

    <div class="p-5">
      <div class="text-center">
        <h1 class="text-center text-dark mb-5">USER DETAILS</h1>
      </div>

    <table class="table table-striped table-success table-bordered border-2 rounded-top border-success">
        <thead>
            <tr>
                <th scope="col">Uid</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from signup");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>

                <tr>
                    <td><?php echo $fetchcat['uid']  ?></td>
                    <td><?php echo $fetchcat['name']  ?></td>
                    <td><?php echo $fetchcat['email']  ?></td>
                    <td><?php echo $fetchcat['mobno']  ?></td>
                    <td><?php echo $fetchcat['password']  ?></td>
                    <td><?php echo $fetchcat['address']  ?></td>
                    
                    
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    </div>
</body>

</html>