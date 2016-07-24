<?php
function get_entries() {
  
  global $link;

  $sql = "SELECT *, DATE_FORMAT(created_at, '%d.%m.%Y') AS created_at_formatted
          FROM news_entry ORDER BY created_at DESC";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_entries = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_entries;
}

?>