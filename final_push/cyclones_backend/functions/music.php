<?php
function delete_album($id) {
  global $link;

  $sql = "DELETE FROM albums WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}
function update_album($id, $title, $album_info) {
  global $link;
  $sql = "UPDATE albums 
  SET title = '$title', album_info = '$album_info'
  WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  return $result;
}

function get_album($id) {
  global $link;

  $sql = "SELECT * FROM albums WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    die(mysqli_error($link));
  }

  return mysqli_fetch_assoc($result);
}

function get_albums() {
  
  global $link;

  $sql = "SELECT * FROM albums";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_albums = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_albums;
}

?>