<?php
if(isset($_GET['action'])) {
  $action = $_GET["action"];

  if($action == "new") {
     $form_action = "index.php?site=shop&action=add_item";

     include("views/item_edit_form.php");
  }
  elseif($action == "add_item" && is_post_request()){
    $file_name = $_FILES['img']['tmp_name'];
    $original_name = $_FILES['img']['name'];
    $waddup = move_uploaded_file($_FILES['img']['tmp_name'], "../img/shopitems/$original_name");
    new_item($_POST["name"], $_POST["description"], $_POST["price"], $_POST["in_stock"], "img/shopitems/".$original_name,  $_POST["category"]);

    redirect_to("index.php?site=shop", "New item at " . date('l jS \of F Y h:i:s A') . " added $waddup");
  }
  elseif($action == "edit" && isset($_GET["id"])){
    $id = (int)$_GET["id"];

    $form_action = "index.php?site=shop&action=update_item";

    $item = get_item($id);

    include("views/item_edit_form.php");
  }
  elseif($action == "update_item" && is_post_request()) {

    update_item($_POST["id"], $_POST["name"], $_POST["description"], $_POST["price"], $_POST["in_stock"], $_POST["img"] );

    redirect_to("index.php?site=shop", "Item with ID: " . $_POST["id"] . " at " . date('l jS \of F Y h:i:s A') . " updated");

  }
  elseif($action == "delete" && isset($_GET["id"])){
    delete_item($_GET["id"]);

    redirect_to("index.php?site=shop", "Item with ID: " . $_GET["id"] . " at " . date('l jS \of F Y h:i:s A') . " deleted");
  }
}
  else{
      $all_items = get_items();

      require("views/shop.php");
  }
?>