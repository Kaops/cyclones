<?php
ob_start();

session_start();
error_reporting(-1);

//GET Parameters
$site = isset($_GET['site']) ? $_GET["site"] : "home";

require("db/dbconnect.php");
require("logic/cartfunct.php");
require("header.php");

if($site == "bio") {
  include("views/bio.php");
} elseif($site == "music") {
  include("views/music.php");
} elseif($site == "news") {
  include("views/news.php");
} elseif($site == "shop") {
  include("views/shop.php");
} elseif($site == "checkout") {
  include("logic/checkout.php");
} elseif($site == "item") {
  include("views/item.php");
}elseif($site == "home") {
  include("views/home.php");
}elseif($site == "cart") {
  include("views/cart.php");
}elseif($site == "register") {
  include("views/register.php");
}elseif($site == "ordersuccess") {
  include("views/ordersuccess.php");
}elseif($site == "registersuccess") {
  include("views/registersuccess.php");
}elseif($site == "logout") {
  include("logic/logout.php");
} else {
  include("views/home.php");
}

require("footer.html");

ob_end_flush();
 ?>
