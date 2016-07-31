<?php
function get_article($id) {

  global $link;

  $sql = "SELECT * FROM product WHERE id= '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_entries = mysqli_fetch_assoc($result);

  return $all_entries;
}

?>
