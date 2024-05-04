<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">serial number</th>
      <th scope="col">item name</th>
      <th scope="col">item price</th>
      <th>image</th>
      <th scope="col">quantity
        <th>remove</th>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php 
    session_start();
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
            print_r($value);
            echo "
              <tr>
                <td>1</td>
                <td>$value[item_name]</td>
                <td>$value[price]</td>
                <td>$value[pimage]</td>
                <td><input type='number' value=$value[quantity] min='1' max='10'></td>
                <td><button>Remove</button></td>
                </tr>
            ";
            echo "$value"['pimage'];" ";
        }
    }
    ?>

  </tbody>
</table>

</body>
</html>