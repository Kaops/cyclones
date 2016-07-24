<?php
function new_item($name, $description, $price, $in_stock, $img){
  global $link;

  $sql = "INSERT INTO `product`(`name`, `description`, `price`, `in_stock`, `img`) VALUES ('$name', '$description', '$price', '$in_stock', '$img')";
  $result = mysqli_query($link, $sql);

  return $result;
}
function delete_item($id) {
  global $link;

  $sql = "DELETE FROM product WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}
function update_item($id, $name, $description, $price, $in_stock, $img) {
  global $link;
  $sql = "UPDATE product 
  SET name = '$name', description = '$description', price = '$price', in_stock = '$in_stock', img = '$img'
  WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}

function get_item($id) {
  global $link;

  $sql = "SELECT * FROM product WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    die(mysqli_error($link));
  }

  return mysqli_fetch_assoc($result);
}

function get_items() {
  
  global $link;

  $sql = "SELECT * FROM product";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_items = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_items;
}

?>