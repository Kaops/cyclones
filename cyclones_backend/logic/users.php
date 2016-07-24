<?php
if(isset($_GET['action'])) {
  $action = $_GET["action"];

  if($action == "new") {

  }
  elseif($action == "edit" && isset($_GET["id"])){
    $id = (int)$_GET["id"];

    $form_action = "index.php?site=users&action=update_user";

    $user = get_user($id);
    $orders = get_orders_by_user($id);
    include("views/user_edit_form.php");
  }
  elseif($action == "update_user" && is_post_request()) {

    update_user($_POST["id"], $_POST["email"], $_POST["name"], $_POST["surname"], $_POST["pref_payment"], $_POST["title"], $_POST["company"], $_POST["is_admin"] );

    redirect_to("index.php?site=users", "User with ID: " . $_POST["id"] . " at " . date('l jS \of F Y h:i:s A') . " updated");

  }
  elseif($action == "delete" && isset($_GET["id"])){
    delete_user($_GET["id"]);

    redirect_to("index.php?site=users", "User with ID: " . $_GET["id"] . " at " . date('l jS \of F Y h:i:s A') . " deleted");
  }
}
  else{
      $all_users = get_users();

      require("views/users_test.php");
  }
?>