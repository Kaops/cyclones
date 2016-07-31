<?php

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
} else {
  include("views/home.php");
}

require("footer.html");
 ?>
