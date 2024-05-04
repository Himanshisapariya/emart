
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
        <h1 class="text-center text-primary mb-5">CHECKOUT</h1>
      </div>

    <table class="table table-striped table-danger table-bordered border-10 rounded-top border-dark-subtle">
        <thead>
            <tr>

                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address 1</th>
                <th scope="col">Address 2</th>
                <th scope="col">Pincode</th>
                <th scope="col">City</th>
                <th scope="col">District</th>
                <th scope="col">State</th>

            </tr>
        </thead>
        <tbody>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from checkout");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>


                <tr>
                    <td><?php echo $fetchcat['fname']  ?></td>
                    <td><?php echo $fetchcat['lname']  ?></td>
                    <td><?php echo $fetchcat['email']  ?></td>
                    <td><?php echo $fetchcat['mobile']  ?></td>
                    <td><?php echo $fetchcat['address1']  ?></td>
                    <td><?php echo $fetchcat['address2']  ?></td>
                    <td><?php echo $fetchcat['pincode']  ?></td>
                    <td><?php echo $fetchcat['city']  ?></td>
                    <td><?php echo $fetchcat['district']  ?></td>
                    <td><?php echo $fetchcat['state']  ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    </div>
</body>

</html>