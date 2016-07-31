<?php
// require("logic/cartfunct.php");
if(is_post_request()) {
    //error checker
    $error = 0;
    $errors = [];

    //get the dank money
    $total_after_submission = $_POST["total_after_submission"];

    //get billing stuff
    if (isset($_POST["gender"])) {
      $gender = $_POST["gender"];
    }
    $title;
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
    if(strlen($plz) > 3) {

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
      $birthdate = $_POST["billing_date"];

      //birthdate verification
      if(strlen($birthdate) > 1) {

      } else {
        $error = 1;
        $errors["auth"] = "Please enter your birthdate.";
      }

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
      echo get_error($errors, "auth");
      print_r($birthdate);
    } else { //if customer finally got his shit together
      print_r("Order successful!");

      if (isset($_POST["billing_email"])) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        global $link;

        $sql = "INSERT INTO
        users (email, pw_hash, pref_payment, title, name, surname, birthday, address, country, city, postcode)
        VALUES
        ('$email', '$password_hash', '$payment', '$title', '$name', '$surname', '$birthdate', '$address', '$country', '$city', '$plz')";
        $result = mysqli_query($link, $sql);
      }

      global $link;
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($link, $sql);
      //print_r($result);
      $idhelper = mysqli_fetch_assoc($result);
      //print_r($idhelper);
      if(isset($_SESSION["logged_in"]) === true){$user_id = $_SESSION['user_id'];}else {$user_id = $idhelper['id'];}

      if ($_POST["use_alternate"] == 1) {
        $address = $alternate_address;
        $country = $alternate_country;
        $city = $alternate_city;
        $plz = $alternate_plz;
        $name = $alternate_name;
        $surname = $alternate_surname;
      }
      $productids = [];
      foreach ($products_in_cart as $product_in_cart){
        $productids[] = $product_in_cart["id"];
        //print_r($product_in_cart["id"]);
      }
      print_r($productids);
      $ordered_product_id = $productids[0];
      print_r($ordered_product_id);

      $sql = "INSERT INTO
      orders (user_id, sum, ordered_product_id, address, country, city, postcode, name, surname, payed_with, shipping_method )
      VALUES
      ('$user_id', '$total_after_submission', '$ordered_product_id', '$address', '$country', '$city', '$plz', '$name', '$surname', '$payment', '$shipping' )";
      $result = mysqli_query($link, $sql);
      print_r($result);

      $orderid = mysqli_insert_id($link);
      print_r($orderid);
      foreach ($products_in_cart as $product_in_cart){
        $entry = get_article($product_in_cart['id']);
        $op_product_id = $entry['id'];
        $op_amount = $product_in_cart['quantity'];
        $sql = "INSERT INTO
        ordered_products (product_id, amount, order_id)
        VALUES
        ('$op_product_id', '$op_amount', '$orderid')";
        $result = mysqli_query($link, $sql);

      }
      //empty cart after order was submitted
      $_SESSION['cart'] = [];

    }

  }
  function get_error($errors, $key) {
  if(isset($errors[$key])) {
    // HEREDOC-Syntax
    $error = <<<HEREDOC

<p class="help-block" style="text-align:center;">
  {$errors[$key]}
</p>
HEREDOC;

  } else {
    $error = "";
  }

  return $error;
}
 ?>
