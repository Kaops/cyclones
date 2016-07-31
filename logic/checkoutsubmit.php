<?php
if(is_post_request()) {
    //error checker
    $error = 0;
    $errors = [];

    //get billing stuff
    if (isset($_POST["gender"])) {
      $gender = $_POST["gender"];
    }
    if (isset($_POST["title"])) {
      $title = mysqli_real_escape_string($link, $_POST["title"]);
    }

    //$company = mysqli_real_escape_string($link, $_POST["company"]);
    $address = mysqli_real_escape_string($link, $_POST["address"]);
    $country = $_POST["country"];
    $city = mysqli_real_escape_string($link, $_POST["city"]);
    $plz = mysqli_real_escape_string($link, $_POST["plz"]);
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $surname = mysqli_real_escape_string($link, $_POST["surname"]);

    //billing validation
    if(strlen($address) > 5) {

    } else {
      $error = 1;
      $errors["auth"] = "The address you entered was too short.";
    }
    if(strlen($city) > 3) {

    } else {
      $error = 1;
      $errors["auth"] = "The name of the City you entered was too short.";
    }
    if(strlen($plz) > 4) {

    } else {
      $error = 1;
      $errors["auth"] = "The Post Code you entered was too short.";
    }
    if(!is_nan(intval($plz))) {

    } else {
      $error = 1;
      $errors["auth"] = "Your post code can only consist of numbers.";
    }
    if(strlen($name) > 3) {

    } else {
      $error = 1;
      $errors["auth"] = "The name you entered was too short.";
    }
    if(strlen($surname) > 3) {

    } else {
      $error = 1;
      $errors["auth"] = "The surname you entered was too short.";
    }

    //in case user is not logged in yet, also get email and pw to make him/her an account
    if (isset($_POST["billing_email"])) {
      $email = mysqli_real_escape_string($link, $_POST["billing_email"]);
      $password = mysqli_real_escape_string($link, $_POST["billing_password"]);
      $password_re = mysqli_real_escape_string($link, $_POST["billing_password_re"]);

      //email verification
      $email_array = explode("@", $email);


      if(count($email_array) === 2) {
          $dot_index = strpos($email_array[1], ".");
      } else {
          $dot_index = -1;
      }
      if(!isset($email_array[1])) {
        $email_array[1] = "";
      }
      if(strlen($email) > 5) {

      } else {
        $error = 1;
        $errors["auth"] = "The email you entered is too short.";
      }
      if(count($email_array) === 2) {

      } else {
        $error = 1;
        $errors["auth"] = "Email can only contain one @";
      }

      if(strpos($email, "@") >= 1) {
      } else {
        $error = 1;
        $errors["auth"] = "@ cannot be the first sign of your email";
      }
      if($dot_index < (strlen($email_array[1])-2) && $dot_index > 1) {

      } else {
        $error = 1;
        $errors["auth"] = ". darf nicht direkt nach bzw. vor dem @-Zeichen stehen";
      }

      //password verification
      if (strlen($password) >= 6) {

      } else {
        $error = 1;
        $errors["auth"] = "Your password must be at least 6 characters long";
      }
      if ($password === $password_re) {

      }else {
        $error = 1;
        $errors["auth"] = "Your password does not match your repeated password";
      }
    }

    //alternate shipping address
    if ($_POST["use_alternate"] == 1) {
      //$alternate_company = mysqli_real_escape_string($link, $_POST["alternate_company"]);
      $alternate_address = mysqli_real_escape_string($link, $_POST["alternate_address"]);
      $alternate_country = $_POST["alternate_country"];
      $alternate_city = mysqli_real_escape_string($link, $_POST["alternate_city"]);
      $alternate_plz = mysqli_real_escape_string($link, $_POST["alternate_plz"]);
      $alternate_name = mysqli_real_escape_string($link, $_POST["alternate_name"]);
      $alternate_surname = mysqli_real_escape_string($link, $_POST["alternate_surname"]);

      //alternate shipping address validation
      if(strlen($alternate_address) > 5) {

      } else {
        $error = 1;
        $errors["auth"] = "The alternate shipping address you entered was too short.";
      }
      if(strlen($alternate_city) > 3) {

      } else {
        $error = 1;
        $errors["auth"] = "The name of the City in your alternate shipping address you entered was too short.";
      }
      if(strlen($alternate_plz) > 4) {

      } else {
        $error = 1;
        $errors["auth"] = "The Post Code in your alternate shipping address you entered was too short.";
      }
      if(!is_nan(intval($alternate_plz))) {

      } else {
        $error = 1;
        $errors["auth"] = "Your post code in your alternate shipping address can only consist of numbers.";
      }
      if(strlen($alternate_name) > 3) {

      } else {
        $error = 1;
        $errors["auth"] = "The name you entered in your alternate shipping address was too short.";
      }
      if(strlen($alternate_surname) > 3) {

      } else {
        $error = 1;
        $errors["auth"] = "The surname you entered in your alternate shipping address was too short.";
      }
    }

    //get chosen payment method
    if (intval($_POST["use_paypal"]) == 1) {
      $payment = "PayPal";
    } elseif (intval($_POST["use_sofort"]) == 1) {
      $payment = "Sofort";
    } elseif (intval($_POST["use_cc"]) == 1) {
      $payment = "Credit";
    } else {
      $error = 1;
      $errors["auth"] = "You did not choose a payment method.";
    }

    //get shipping method
    if (isset($_POST["shipping_method"])) {
      $shipping = $_POST["shipping_method"];
    }


    //shipping validation
    if($shipping == "standard") {

    } elseif ($shipping == "express") {

    } else {
      $error = 1;
      $errors["auth"] = "You did not choose a shipping method.";
    }



    //the big motherfucking moment
    //form submission into db

    //if fuckwit customer fucked it up
    if($error == 1) {
      print_r("pls stop happening");
      echo get_error($errors, "auth");
      print_r($error);
    } else { //if customer finally got his shit together
      print_r("why does this suffering never end?");
      echo get_error($errors, "auth");
      print_r($error);
      // $password_hash = password_hash($password, PASSWORD_DEFAULT);
      // global $link;
      //
      // // query zusammenbauen
      // $sql = "INSERT INTO
      // users (email, password_hash)
      // VALUES
      // ('$email', '$password_hash')";
      //
      // // query ausführen
      // $result = mysqli_query($link, $sql);
      // red("index.php", "Registrierung erfolgreich!");
    }

    // //email verification
    // $email_array = explode("@", $email);
    // $error = 0;
    //
    // if(count($email_array) === 2) {
    //     $dot_index = strpos($email_array[1], ".");
    // } else {
    //     $dot_index = -1;
    // }
    // if(!isset($email_array[1])) {
    //   $email_array[1] = "";
    // }
    // if(strlen($email) > 5) {
    //
    // } else {
    //   $error == 1;
    //   $errors["auth"] = "Deine eingegebene E-Mail-Adresse ist zu kurz.";
    // }
    // if(count($email_array) === 2) {
    //
    // } else {
    //   $error == 1;
    //   $errors["auth"] = "Email darf nur 1 @-Zeichen enthalten";
    // }
    //
    // if(strpos($email, "@") >= 1) {
    // } else {
    //   $error == 1;
    //   $errors["auth"] = "@-Zeichen darf nicht an 1. Stelle stehen";
    // }
    // if($dot_index < (strlen($email_array[1])-2) && $dot_index > 1) {
    //
    // } else {
    //   $error == 1;
    //   $errors["auth"] = ". darf nicht direkt nach bzw. vor dem @-Zeichen stehen";
    // }
    //
    // //password verification
    // if (strlen($password) >= 6) {
    //
    // } else {
    //   $error = 1;
    //   $errors["auth"] = "Dein Passwort muss mind. 6 Zeichen lang sein.";
    // }
    // if ($password === $password_re) {
    //
    // }else {
    //   $error = 1;
    //   $errors["auth"] = "Passwort stimmt nicht mit Passwortwiederholung überein.";
    // }
    //
    //
    // if($error == 1) {
    //
    // } else {
    //   $password_hash = password_hash($password, PASSWORD_DEFAULT);
    //   global $link;
    //
    //   // query zusammenbauen
    //   $sql = "INSERT INTO
    //   users (email, password_hash)
    //   VALUES
    //   ('$email', '$password_hash')";
    //
    //   // query ausführen
    //   $result = mysqli_query($link, $sql);
    //   red("index.php", "Registrierung erfolgreich!");
    // }
  }
  function get_error($errors, $key) {
  if(isset($errors[$key])) {
    // HEREDOC-Syntax
    $error = <<<HEREDOC

<p class="help-block">
  {$errors[$key]}
</p>
HEREDOC;

  } else {
    $error = "";
  }

  return $error;
}
 ?>
