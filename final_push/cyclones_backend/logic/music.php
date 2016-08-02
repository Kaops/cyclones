<?php
if(isset($_GET['action'])) {
  $action = $_GET["action"];

  if($action == "new") {

  }
  elseif($action == "edit" && isset($_GET["id"])){
    $id = (int)$_GET["id"];

    $form_action = "index.php?site=music&action=update_album";

    $album = get_album($id);

    include("views/music_edit_form.php");
  }
  elseif($action == "update_album" && is_post_request()) {

    update_album($_POST["id"], $_POST["title"], $_POST["album_info"] );

    redirect_to("index.php?site=music", "Album with ID: " . $_POST["id"] . " at " . date('l jS \of F Y h:i:s A') . " updated");

  }
  elseif($action == "delete" && isset($_GET["id"])){
    delete_user($_GET["id"]);

    redirect_to("index.php?site=music", "Album with ID: " . $_GET["id"] . " at " . date('l jS \of F Y h:i:s A') . " deleted");
  }
}
  else{
      $all_albums = get_albums();

      require("views/music.php");
  }
?>