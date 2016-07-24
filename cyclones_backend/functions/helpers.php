<?php
function is_logged_in() {
  return (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true);
}
function is_checked($value) {
  if($value) { return "checked"; }
}
function is_post_request() {
  return (strtolower($_SERVER["REQUEST_METHOD"]) == "post" && !empty($_POST));
}
function redirect_to($location, $message = "", $icon = "default") {
  $popup = explode("at", $message);
	  	switch ($icon) {
		    case "default":
		        $_SESSION["popup_icon"] = "img/default_icon.png";
		        break;
		    case "success":
		        $_SESSION["popup_icon"] = "img/success_icon.png";
		        break;
		    case "error":
		        $_SESSION["popup_icon"] = "img/error_icon.png";
		        break;
		}
	$_SESSION["popup"] = $popup[0];
  $_SESSION["flash"] = $message;
  header("location: $location");
  exit();
}
?>