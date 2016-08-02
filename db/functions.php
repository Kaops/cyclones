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

function get_all_albums(){
  global $link;

  $sql = "SELECT * FROM albums";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_albums = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_albums;
}

function get_album($id){
global $link;

  $sql = "SELECT title, album_info, cover FROM albums WHERE id = '$id'";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    die(mysqli_error($link));
  }

  return mysqli_fetch_assoc($result);
}
function get_tracks($id){
	 global $link;

  $sql = "SELECT track_nr, track, lyrics FROM tracklist WHERE album_id = '$id'";

  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $tracklist = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $tracklist;

}
function get_tourdates(){
  global $link;

  $sql = "SELECT * FROM tourdates ORDER BY date LIMIT 10";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $tourdates = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $tourdates;
}
?>