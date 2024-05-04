<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  if (isset($_POST['addtocart'])) {

    if (isset($_SESSION['cart'])) {

      if ($myitems = array_column($_SESSION['cart'], 'item_name')) {
        if (in_array($_POST['item_name'], $myitems)) {
?><script>
            alert('item already added');
            window.location.href = 'category3.php';
          </script>"
        <?php


        }else{
      

        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage'], 'quantity' => $_POST['qty']);
        ?><script>
          window.location.href = 'category3.php';
        </script>"
      <?php
        }
      }
    }else {
      $_SESSION['cart'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage'], 'quantity' => $_POST['qty']);
      ?><script>
        window.location.href = 'category3.php';
      </script>"
      <?php


    }
  }
  
  if (isset($_POST['remove_item'])) {

    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['item_name'] == $_POST['item_name']) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
      ?>
        <script>
          window.location.href = 'carts.php';
        </script>
<?php
      }
    }
  }

  

 



// wishlist

if (isset($_POST['wishlist'])) {

  if (isset($_SESSION['wishlist'])) {

    if ($myitems = array_column($_SESSION['wishlist'], 'item_name')) {
      if (in_array($_POST['item_name'], $myitems)) {
?><script>
          alert('item already added');
          window.location.href = 'category3.php';
        </script>"
      <?php


      }else{
    

      $count = count($_SESSION['wishlist']);
      $_SESSION['wishlist'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage']);
      ?><script>
        window.location.href = 'category3.php';
      </script>"
    <?php
      }
    }
  }else {
    $_SESSION['wishlist'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage']);
    ?><script>
      window.location.href = 'category3.php';
    </script>"
    <?php


  }
}

if (isset($_POST['remove_wishlist'])) {

  foreach ($_SESSION['wishlist'] as $key => $value) {
    if ($value['item_name'] == $_POST['item_name']) {
      unset($_SESSION['wishlist'][$key]);
      $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);
    ?>
      <script>
        window.location.href = 'wishlist.php';
      </script>
<?php

    }
  }
}




$session = count($_SESSION['wishlist']);
if($session==0){
  unset($_SESSION['wishlist']);
  }

  $session = count($_SESSION['cart']);
if($session==0){
  unset($_SESSION['cart']);
  }

}

//  $wishlist = count($_SESSION['wishlist']);
//   if($wishlist==0){
//     $session = $_SESSION['wishlist'];
//     unset($_SESSION['wishlist']);
//     header("location : wishlist.php");
//   }
?>