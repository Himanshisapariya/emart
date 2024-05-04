<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST['wishlist'])){

    if (isset($_SESSION['wishlist'])) {

      if($myitems = array_column($_SESSION['wishlist'], 'item_name')){
      if (in_array($_POST['item_name'], $myitems)) {
?><script>
          alert('item already added');
          window.location.href = 'category2.php';
        </script>"
      <?php
      }
    }

      $count = count($_SESSION['wishlist']);
      $_SESSION['wishlist'][$count] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage'], 'quantity' => $_POST['qty']);
      ?><script>
        alert('item added');
        window.location.href = 'category2.php';
      </script>"
    <?php
    }
    
  }else {
      $_SESSION['wishlist'][0] = array('item_name' => $_POST['item_name'], 'price' => $_POST['price'], 'pimage' => $_POST['pimage'], 'quantity' => $_POST['qty']);
    ?><script>
        alert('item added');
        window.location.href = 'category2.php';
      </script>"
    <?php
    
}


if (isset($_POST['remove_wishlist'])) {

  foreach ($_SESSION['wishlist'] as $key => $value) {
    if ($value['item_name'] == $_POST['item_name']) {
      unset($_SESSION['wishlist'][$key]);
      $_SESSION['wishlist'] = array_values($_SESSION['wishlist']);
    ?>
      <script>
        alert('item Removed');
        window.location.href = 'wishlist.php';
      </script>
    <?php
    }
  }
}
}
