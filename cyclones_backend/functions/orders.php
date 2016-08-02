<?php 



function cancel_order($id) {
  global $link;

  $sql = "UPDATE orders SET canceled = 1 WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}


function get_ordered_products() {
  
  global $link;

  $sql = "SELECT product.name, product.description, orders.id, orders.created_at, orders.user_id, users.email, COUNT(*) AS ordered_amount FROM ordered_products LEFT JOIN product ON product.id = ordered_products.product_id LEFT JOIN orders ON ordered_products.order_id = orders.id LEFT JOIN users ON orders.user_id = users.id GROUP BY product.name";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_products = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_products;
}
function get_orders(){

  global $link;

  $sql ="SELECT order_id,product.name, amount, orders.sum, orders.created_at, users.email FROM ordered_products LEFT JOIN product ON product.id = ordered_products.product_id LEFT JOIN orders ON ordered_products.order_id = orders.id LEFT JOIN users ON users.id = orders.user_id WHERE orders.canceled = 0 ORDER BY orders.created_at DESC";
  
  $result = mysqli_query($link, $sql);

    if(!$result) {
    echo mysqli_error($link);
  }

  $all_orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_orders;
}
?>
