<?php
function delete_entry($id) {
  global $link;

  $sql = "DELETE FROM news_entry WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}
function update_entry($id, $headline, $content) {
  global $link;
  $sql = "UPDATE news_entry 
  SET headline = '$headline', content = '$content'
  WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}

function get_entry($id) {
  global $link;

  $sql = "SELECT *, DATE_FORMAT(created_at, '%d.%m.%Y') AS created_at_formatted FROM news_entry WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    die(mysqli_error($link));
  }

  return mysqli_fetch_assoc($result);
}

function get_entries() {
  
  global $link;

  $sql = "SELECT *, DATE_FORMAT(created_at, '%d.%m.%Y') AS created_at_formatted
          FROM news_entry";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_entries = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_entries;
}

?>