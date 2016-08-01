<?php
require("functions/helpers.php");
if(is_logged_in()) {
  redirect_to("index.php");
} else {
   print_r("gibts ned");
  if(is_post_request()) {
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $sql = "SELECT email, pw_hash, is_admin FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user["password_hash"])) {
          print_r("eingeloggt");
          $_SESSION['logged_in'] = true;
          $_SESSION['is_admin'] = $user["is_admin"]
          redirect_to("index.php", "Erfolgreich eingeloggt!");

        } else {
          $error = 1;
        }
    } else {
      $error = 1;
    }

    if($error == 1) {
      redirect_to("index.php", "User gibts ned OIDA!");
      print_r("gibts ned");
    }
  }
}


?>
