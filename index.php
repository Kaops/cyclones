<?php

//GET Parameters
$site = isset($_GET['site']) ? $_GET["site"] : "home";

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
} elseif($site == "home") {
  include("views/checkout.php");
} else {
  include("views/home.php");
}

require("footer.html");
 ?>
