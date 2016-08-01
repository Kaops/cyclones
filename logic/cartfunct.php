<?php
require("./functions/helpers.php");
//session_start();
error_reporting(-1);
setlocale(LC_ALL, 'de_AT');

global $link;
$sql = "SELECT * FROM product";
$result = mysqli_query($link, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
if(!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}
$action = (isset($_GET['action'])) ? $_GET['action'] : '';
switch ($action) {
  case 'add_product':
    if(isset($_GET['product_id'])) {
      add_product($_GET['product_id']);
      header('Location: index.php?site=cart');
    }
    break;
  case 'update_quantity':
    if(isset($_GET['product_id']) && isset($_GET['new_quantity'])) {
      update_quantity($_GET['product_id'], $_GET['new_quantity']);
    }
    break;
  case 'delete_product':
    if(isset($_GET['product_id'])) {
      delete_product($_GET['product_id']);
    }
    break;
  case 'delete_cart':
    delete_cart();
    break;
}
$json_response = array();
$products_in_cart = array_filter($products, "is_in_cart");
foreach ($products_in_cart as &$product) {
  $quantity = $_SESSION['cart'][$product['id']];
  $product["quantity"] = $quantity;
  $product["position_price"] = $quantity * $product["price"];
}
$json_response["products"] = array_values($products_in_cart);
$json_response["total_price"] = total_price($products_in_cart);
// if(is_ajax()) {
//   echo json_encode($json_response);
//   exit();
// } elseif(!empty($action)) {
//   header("Location: index.php");
// }
function add_product($product_id) {
  if(array_key_exists($product_id, $_SESSION['cart'])) {
    $_SESSION['cart'][$product_id]++;
    header('Location: index.php?site=cart');
  } else {
    $_SESSION['cart'][$product_id] = 1;
    header('Location: index.php?site=cart');
  }
}
function delete_product($product_id) {
  unset($_SESSION['cart'][$product_id]);
}
function delete_cart() {
  $_SESSION['cart'] = [];
}
function update_quantity($product_id, $new_quantity) {
  if($new_quantity <= 0) {
    unset($_SESSION['cart'][$product_id]);
  } elseif($new_quantity > 5) {
    $_SESSION['cart'][$product_id] = 5;
  } else {
    $_SESSION['cart'][$product_id] = $new_quantity;
  }
}
function is_in_cart($product) {
  return array_key_exists($product['id'], $_SESSION['cart']);
}
function is_ajax() {
  return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == "XMLHttpRequest");
}
function total_price($products_in_cart) {
  $sum = 0.0;
  foreach ($products_in_cart as $product) {
    $sum += ($product['price'] * $_SESSION['cart'][$product['id']]);
  }
  return $sum;
}

?>
