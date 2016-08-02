<?php
$all_entries = get_entries();
require("views/blog_test.php");
if(isset($_GET['action'])) {
  $action = $_GET["action"];

  if($action == "new") {

  }  
  elseif($action == "edit" && isset($_GET["id"])){
    $id = (int)$_GET["id"];

    $form_action = "index.php?site=blog&action=update_entry";

    $blog = get_entry($id);

    include("views/entry_update_form.php");
  }
  elseif($action == "update_entry" && is_post_request()) {

    update_entry($_POST["id"], $_POST["headline"], $_POST["content"] );

    redirect_to("index.php?site=blog", "Entry with ID: " . $_POST["id"] . " at " . date('l jS \of F Y h:i:s A') . " updated", "success");

  }
  elseif($action == "delete" && isset($_GET["id"])){
    delete_entry($_GET["id"]);

    redirect_to("index.php?site=blog", "Entry with ID: " . $_GET["id"] . " at " . date('l jS \of F Y h:i:s A') . " deleted", "success");
  }
 }else{
      
  }

?>