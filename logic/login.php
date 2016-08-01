<?php

session_start();
require("../functions/helpers.php");
require("../db/dbconnect.php");
if(is_logged_in()) {
  redirect_to("index.php");
} else {
   print_r("gibts ned");
  if(is_post_request()) {
    //global $link;
    $error = 0;
    $email = mysqli_real_escape_string($link, $_POST["login_username"]);
    $password = mysqli_real_escape_string($link, $_POST["login_password"]);

    $sql = "SELECT email, pw_hash, id FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) === 1) {
      //print_r("at least you tried");
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user["pw_hash"])) {
          print_r("eingeloggt");
          $_SESSION['logged_in'] = true;
          print_r($_SESSION['logged_in']);
          $_SESSION['id'] = $user["id"];
          print_r($_SESSION['id']);
          redirect_to("../index.php?site=" . $_GET["site"], "Erfolgreich eingeloggt!");
          //print_r("success");

        } else {
          $error = 1;
        }
    } else {
      $error = 1;
    }

    if($error == 1) {
      redirect_to("../index.php?site=" . $_GET["site"], "User gibts ned OIDA!");
      print_r("gibts ned");
    }
  }
}


?>
