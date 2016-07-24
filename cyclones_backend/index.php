<?php

// OB = Output Buffer
// Alle Ausgaben werden in einem Zwischenspeicher gespeichert und erst
// ausgegeben wenn z.B. ob_end_flush() aufgerufen wird.
// Somit umgeht man mögliche "Headers already sent"-Error, wenn bspw. versucht
// wird einen Header zu setzen nachdem bereits eine Ausgabe stattgefunden hat.
ob_start();

session_start();
error_reporting(-1);

date_default_timezone_set("Europe/Vienna");

setlocale(LC_ALL, "de_AT");


if(!isset($_SESSION['popup_icon'])){ $_SESSION['popup_icon'] = "img/default_icon.png"; }
$errors = [];
$current_page = isset($_GET['page']) ? $_GET["page"] : 1;
$site = isset($_GET['site']) ? $_GET["site"] : "welcome";

require_once("views/header.php");
require("dbconnect.php");
require("functions/helpers.php");
require("functions/blog.php");
require("functions/music.php");
require("functions/shop.php");
require("functions/users.php");
require("functions/graphs.php");
if($site == "login"){
	include("logic/login.php");
}
if(isset($_SESSION["logged_in"]) === true){
	if($site == "users") {
	  include("logic/users.php");
	} elseif($site == "blog") {
	  include("logic/blog.php");
	} elseif($site == "music") {
		include("logic/music.php");
	}elseif($site == "shop"){
		include("logic/shop.php");
	}elseif($site == "orders"){
		include("views/orders.php");
	}
	else {
	  include("views/dashboard.php");
	}
}else {
	include("views/login_form.php");
}


mysqli_close($link);

require_once("views/footer.php");

// Output-Buffer leeren und ausgeben
ob_end_flush();

?>
