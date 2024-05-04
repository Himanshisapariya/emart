<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
     
     h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
    </style>
</head>

<body>
<?php
include("header-2.php");
    ?>
    
    <div class="p-5">
      <div class="text-center">
        <h1 class="text-centers mb-5 shadow">CONTACT US</h1>
      </div>

    <table class="table table-striped table-secondary table-bordered border-10 rounded-top border-dark-subtle">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>

            <?php
            include("connection.php");
            $query = mysqli_query($conn, "select * from contact");

            while ($fetchcat = mysqli_fetch_array($query)) {

            ?>

                <tr>
                    <td><?php echo $fetchcat['firstname']  ?></td>
                    <td><?php echo $fetchcat['lastname']  ?></td>
                    <td><?php echo $fetchcat['subject']  ?></td>
                    <td><?php echo $fetchcat['message']  ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    </div> 
</body>

</html>