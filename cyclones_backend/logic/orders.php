<?php

if(isset($_GET['action'])) {
  $action = $_GET["action"];

  if($action == "cancel" && isset($_GET["id"])) {
  	$id = (int)$_GET["id"];
  	cancel_order($id);
  	redirect_to("index.php?site=orders", "Order with ID: " . $_GET["id"] . " at " . date('l jS \of F Y h:i:s A') . " deleted");

  }
}else {
  	$all_orders = get_orders();
  	$all_products = get_ordered_products();
  	require("views/orders.php");
  }



?>