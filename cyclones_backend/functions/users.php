<?php
function get_orders_by_user($id){
  global $link;

  $sql = "SELECT product.name, product.description, orders.created_at, orders.user_id, COUNT(*) AS ordered_amount FROM orders 
  LEFT JOIN ordered_products ON orders.ordered_product_id = ordered_products.id
  LEFT JOIN product ON product.id = ordered_products.product_id
  WHERE orders.user_id = '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_orders;
}
function delete_user($id) {
  global $link;

  $sql = "UPDATE users SET deleted = 1 WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}

function update_user($id, $email, $name, $surname, $pref_payment, $title, $company, $is_admin) {
  global $link;

  $is_admin = ($is_admin == "on") ? "1" : "0";
  $sql = "UPDATE users 
  SET email = '$email', name = '$name', surname = '$surname', pref_payment = '$pref_payment', title = '$title', company = '$company', is_admin = $is_admin 
  WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}

function get_user($id) {
  global $link;

  $sql = "SELECT *, DATE_FORMAT(created_at, '%d.%m.%Y') AS created_at_formatted FROM users WHERE id = '$id' AND deleted IS NULL";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    die(mysqli_error($link));
  }

  return mysqli_fetch_assoc($result);
}

function get_users() {
  
  global $link;

  $sql = "SELECT *, DATE_FORMAT(created_at, '%d.%m.%Y') AS created_at_formatted
          FROM users
          WHERE deleted IS NULL";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_users;
}

?>