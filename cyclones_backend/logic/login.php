<?php
if(is_logged_in()) {
  redirect_to("index.php");
} else {

  if(is_post_request()) {
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);

    $sql = "SELECT email, pw_hash, id, is_admin FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user["pw_hash"]) && $user["is_admin"] == 1) {
          $_SESSION['logged_in'] = true;
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['is_admin'] = true;
          redirect_to("index.php", "Logged in as " . $user['email'] . " on " . date('l jS \of F Y h:i:s A'), "success");
        } else {
          $error = 1;
        }
    } else {
      $error = 1;
    }

    if($error == 1) {
      redirect_to("index.php", "User not found please try again!", "error");

    }
  }
}


?>
