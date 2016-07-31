<?php
function get_entries() {

  global $link;

  $sql = "SELECT * FROM product";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_entries = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_entries;
}

?>
