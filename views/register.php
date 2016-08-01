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
    if($error == 1) {
      echo get_error($errors, "auth");
      //print_r($birthdate);
    } else {
      if (isset($_POST["billing_email"])) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        global $link;

        $sql = "INSERT INTO
        users (email, pw_hash, title, name, surname, birthday)
        VALUES
        ('$email', '$password_hash', '$title', '$name', '$surname', '$birthdate')";
        $result = mysqli_query($link, $sql);
        // print_r($result);

        $address_user_id = mysqli_insert_id($link);
        // print_r($address_user_id);

        $sql = "INSERT INTO
        address (user_id, country, city, plz, street)
        VALUES
        ('$address_user_id', '$country', '$city', '$plz', '$address')";
        // print_r($sql);
        $result = mysqli_query($link, $sql);
        // print_r($result);
        redirect_to("index.php?site=registersuccess", "Logged in as " . $user['email'] . " on " . date('l jS \of F Y h:i:s A'), "success");
      }
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

  <form action="index.php?site=register" method="post">

    <h2 class="main_headline">register</h2>
    <p style="text-align:center">
      Input fields marked with a * are required!
    </p>
    <!-- <form action="billingform.php" method="post"> -->
      <div class="main_billingform">
        <div class="main_billingform_col">
        <div class="main_form_splitwrapper main_billingform_row">
          <div class="main_form_split">
            <div class="main_form_gender">
              <p class="main_form_label" id="gender_label">Gender</p>
              <input type="radio" name="gender" value="male"  id="male_radio" class="main_form_gender_btn" value="male">
              <label for="male_radio" class="main_form_label male_label">Male</label>

              <input type="radio" name="gender" value="female" id="female_radio" class="main_form_gender_btn" value="female">
              <label for="female_radio" class="main_form_label female_label">Female</label>

            </div>
          </div>
          <div class="main_form_split">
            <label for="title_input" class="main_form_label">
              Title
              <input type="text" id="title_input" name="title" class="main_form_input_half" value="<?php if(isset($_SESSION['logged_in']) === true){ echo $pre_user['title']; } ?>">
            </label>
          </div>
        </div>
        <p class="main_billingform_row">
          <label for="address_input" class="main_form_label">
          Address *
          <input type="text" id="address_input" name="address" class="main_form_input" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['street']; } ?>">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="country_input" class="main_form_label">
          Country *
          <select id="country_input" name="country" class="main_form_input" required>
            <option value="AT">Austria</option>
            <option value="DK">Denmark</option>
            <option value="DE">Germany</option>
          </select>
          </label>
        </p>
        <div class="main_form_splitwrapper main_billingform_row">

          <div class="main_form_split">
            <label for="city_input" class="main_form_label">
            City *
            <input type="text" id="city_input" name="city" class="main_form_input_half" pattern="\w{3,}" title="Need to be at least 3 characters long" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['city']; } ?>">
            </label>
          </div>
          <div class="main_form_split">
            <label for="plz_input" class="main_form_label">
            Post Code *
            <input type="text" id="plz_input" name="plz" class="main_form_input_half"  title="Can only contain numbers" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_address['plz']; } ?>">
            </label>
          </div>
        </div>

      </div>
      <div class="main_billingform_col">
        <p class="main_billingform_row">
          <label for="name_input" class="main_form_label">
          Name *
          <input type="text" id="name_input" name="name" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_user['name']; } ?>">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="surname_input" class="main_form_label">
          Surname *
          <input type="text" id="surname_input" name="surname" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required value="<?php if(isset($_SESSION["logged_in"]) === true){ echo $pre_user['surname']; } ?>">
          </label>
        </p>
        <?php if(isset($_SESSION["logged_in"]) === true){ ?>
        <?php } else { ?>
          <p class="main_billingform_row">
            <label for="billing_email_input" class="main_form_label">
            Birth Date *
            <input type="date" id="billing_date_input" name="billing_date" class="main_form_input" required>
            </label>
          </p>
        <p class="main_billingform_row">
          <label for="billing_email_input" class="main_form_label">
          Email *
          <input type="email" id="billing_email_input" name="billing_email" class="main_form_input" required>
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="billing_password_input" class="main_form_label">
          Password *
          <input type="password" id="billing_password_input" name="billing_password" class="main_form_input" pattern="\w{6,}" title="Need to be at least 6 characters long" required>
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="billing_repassword_input" class="main_form_label">
          Repeat Password *
          <input type="password" id="billing_repassword_input" name="billing_password_re" class="main_form_input" pattern="\w{6,}" title="Need to be at least 6 characters long" required>
          </label>
        </p>
      <?php }; ?>
      </div>
      </div>


      <div class="orderdetails_table">
      <input type="submit" class="make_order_btn" value="Register">
      </div>



  </form>

</main>
