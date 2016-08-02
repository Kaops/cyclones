<?php
// require("logic/cartfunct.php");
if(is_post_request()) {

    //error checker
    $error = 0;
    $errors = [];

    //get the dank money
    //$total_after_submission = $_POST["total_after_submission"];

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
    if(strlen($name) > 2) {

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
      // $password = mysqli_real_escape_string($link, $_POST["billing_password"]);
      // $password_re = mysqli_real_escape_string($link, $_POST["billing_password_re"]);
      // $birthdate = $_POST["billing_date"];

      // //birthdate verification
      // if(strlen($birthdate) > 1) {
      //
      // } else {
      //   $error = 1;
      //   $errors["auth"] = "Please enter your birthdate.";
      // }

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
    //   if (strlen($password) >= 6) {
    //
    //   } else {
    //     $error = 1;
    //     $errors["auth"] = "Your password must be at least 6 characters long";
    //   }
    //   if ($password === $password_re) {
    //
    //   }else {
    //     $error = 1;
    //     $errors["auth"] = "Your password does not match your repeated password";
    //   }
    }
    if($error == 1) {
      echo get_error($errors, "auth");
      //print_r($birthdate);
    } else {

        // $password_hash = password_hash($password, PASSWORD_DEFAULT);
        global $link;
        $id = $_SESSION['id'];
        $sql = "UPDATE users
        SET title = '$title'
        WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        //  print_r($result);

        $address_user_id = mysqli_insert_id($link);
        //  print_r($address_user_id);

        $sql = "UPDATE address
        SET country = '$country', city = '$city', plz = '$plz', street = '$address'
        WHERE user_id = '$id'";
        // print_r($sql);
        $result = mysqli_query($link, $sql);
        // print_r($result);
        redirect_to("index.php?site=account", "Logged in as " . $user['email'] . " on " . date('l jS \of F Y h:i:s A'), "success");

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
<main class="site_main_content">
    <?php if(isset($_SESSION["logged_in"]) === true){
    $logid = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = '$logid'";
    $result = mysqli_query($link, $sql);
    $pre_user = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM address WHERE user_id = '$logid'";
    $result = mysqli_query($link, $sql);
    $pre_address = mysqli_fetch_assoc($result);
  }
    ?>
  <form action="index.php?site=account" method="post">

    <h2 class="main_headline">Account</h2>
    <p style="text-align:center">
      Here you can view and change your account Details!
    </p>
    <!-- <form action="billingform.php" method="post"> -->
      <div class="main_billingform">
        <div class="main_billingform_col">
        <div class="main_form_splitwrapper main_billingform_row">


            <label for="title_input" class="main_form_label">
              Title
              <input type="text" id="title_input" name="title" class="main_form_input_half" value="<?php if(isset($_SESSION['logged_in']) === true){ echo $pre_user['title']; } ?>">
            </label>

        </div>
        <p class="main_billingform_row">
          <label for="address_input" class="main_form_label">
          Address
          <input type="text" id="address_input" name="address" class="main_form_input" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['street']; } ?>">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="country_input" class="main_form_label">
          Country
          <select id="country_input" name="country" class="main_form_input" required>
            <option value="AT" <?php if($pre_address['country'] == 'AT'){ echo "selected"; } ?>>Austria</option>
            <option value="DK" <?php if($pre_address['country'] == 'DK'){ echo "selected"; } ?>>Denmark</option>
            <option value="DE" <?php if($pre_address['country'] == 'DE'){ echo "selected"; } ?>>Germany</option>
          </select>
          </label>
        </p>
        <div class="main_form_splitwrapper main_billingform_row">

          <div class="main_form_split">
            <label for="city_input" class="main_form_label">
            City
            <input type="text" id="city_input" name="city" class="main_form_input_half" pattern="\w{3,}" title="Need to be at least 3 characters long" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['city']; } ?>">
            </label>
          </div>
          <div class="main_form_split">
            <label for="plz_input" class="main_form_label">
            Post Code
            <input type="text" id="plz_input" name="plz" class="main_form_input_half"  title="Can only contain numbers" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['plz']; } ?>">
            </label>
          </div>
        </div>

      </div>
      <div class="main_billingform_col">
        <p class="main_billingform_row">
          <label for="name_input" class="main_form_label">
          Name
          <input readonly type="text" id="name_input" name="name" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_user['name']; } ?>">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="surname_input" class="main_form_label">
          Surname
          <input readonly type="text" id="surname_input" name="surname" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_user['surname']; } ?>">
          </label>
        </p>
        <input type="hidden" id="billing_email_input" name="billing_email" class="main_form_input" value="email@isset.com" required>

      </div>
      </div>


      <div class="orderdetails_table">
      <input type="submit" class="make_order_btn" value="Update Account Details">
      </div>



  </form>

</main>
