<?php

//GET Parameters
$site = isset($_GET['site']) ? $_GET["site"] : "home";

require("header.php");

if($site == "bio") {
  include("views/bio.php");
} elseif($site == "music") {
  include("logic/music.php");
} elseif($site == "news") {
  include("news.php");
} elseif($site == "shop") {
  include("shop.php");
} elseif($site == "checkout") {
  include("logic/checkout.php");
} else {
  include("views/home.php");
}

require("footer.html");
 ?>
