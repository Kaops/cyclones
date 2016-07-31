<main class="site_main_content">
  <?php //require("./logic/cartfunct.php") ?>
  <?php 	require("./db/dbconnect.php");
      require("./db/item.php");
      require("checkoutsubmit.php");
      $total = 0;
      //print_r($entry);
      $errors = [];
  ?>
  <?php if(isset($_SESSION["logged_in"]) === true){ ?>
  <?php } else { ?>
  <div class="site_main_sliderwrapper full-bg">

    <div class="main_loginwrapper">
      <h2 class="main_headline">Login</h2><a href="#" class="main_registerlink">Register</a>
      <form action="loginform.php" method="post">
        <div class="main_loginform">
          <p>
            <label for="email_input" class="main_form_label">
            Email Address
            <input type="text" id="email_input" name="email" class="main_form_input">
            </label>
          </p>
          <p>
            <label for="pw_input" class="main_form_label">
            Password
            <input type="text" id="pw_input" name="password" class="main_form_input">
            </label>
          </p>
          <p>
            <input type="submit" value="LOGIN" class="main_form_btn">
          </p>
          <p>
            If you continue without logging in an account will be made for you as part of the checkout process
          </p>
          <!-- <a href="#" class="main_login_link main_remember_pos"><div class="main_remember_toggle main_remember_toggle_off"></div>Remember Me</a>
          <a href="#" class="main_login_link">Forgot Your Password ?</a>
          <a href="#" class="main_login_link">Login As Guest</a> -->
        </div>
      </form>

    </div>

  </div>
  <?php }; ?>
<form action="index.php?site=checkout&action=checkout" method="post">
  <?php echo get_error($errors, "auth"); ?>
  <div class="main_billing_wrapper">
    <h2 class="main_headline">Billing Details</h2>
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
              <input type="text" id="title_input" name="title" class="main_form_input_half">
            </label>
          </div>
        </div>
        <p class="main_billingform_row">
          <label for="address_input" class="main_form_label">
          Address *
          <input type="text" id="address_input" name="address" class="main_form_input" required>
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
            <input type="text" id="city_input" name="city" class="main_form_input_half" pattern="\w{3,}" title="Need to be at least 3 characters long" required>
            </label>
          </div>
          <div class="main_form_split">
            <label for="plz_input" class="main_form_label">
            Post Code *
            <input type="text" id="plz_input" name="plz" class="main_form_input_half"  title="Can only contain numbers" required>
            </label>
          </div>
        </div>
        <p class="main_billingform_row">
          <button type="button" id="ship_to_alternate" class="main_form_btn">Ship to different Adress</button>
        </p>
      </div>
      <div class="main_billingform_col">
        <p class="main_billingform_row">
          <label for="name_input" class="main_form_label">
          Name *
          <input type="text" id="name_input" name="name" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required>
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="surname_input" class="main_form_label">
          Surname *
          <input type="text" id="surname_input" name="surname" class="main_form_input" pattern="[a-zA-Z]{1,20}$" title="Needs to be between 2-20 characters long, can only contain Letters" required>
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
    <!-- </form> -->
    <input type="hidden" id="use_alternate" name="use_alternate" value="0">
    <div id="alternate_shipping" class="main_billingform">
      <div class="main_billingform_col">
      <p class="main_billingform_row">
        <label for="alternate_address_input" class="main_form_label">
        Address *
        <input type="text" id="alternate_address_input" name="alternate_address" class="main_form_input">
        </label>
      </p>
      <p class="main_billingform_row">
        <label for="alternate_country_input" class="main_form_label">
        Country *
        <select id="alternate_country_input" name="alternate_country" class="main_form_input">
          <option value="AT">Austria</option>
          <option value="DK">Denmark</option>
          <option value="DE">Germany</option>
        </select>
        </label>
      </p>
      <div class="main_form_splitwrapper main_billingform_row">
        <div class="main_form_split">
          <label for="alternate_city_input" class="main_form_label">
          City *
          <input type="text" id="alternate_city_input" name="alternate_city" class="main_form_input_half">
          </label>
        </div>
        <div class="main_form_split">
          <label for="alternate_plz_input" class="main_form_label">
          Post Code *
          <input type="text" id="alternate_plz_input" name="alternate_plz" class="main_form_input_half">
          </label>
        </div>
      </div>
    </div>
    <div class="main_billingform_col">
      <p class="main_billingform_row">
        <label for="alternate_name_input" class="main_form_label">
        Name *
        <input type="text" id="alternate_name_input" name="alternate_name" class="main_form_input">
        </label>
      </p>
      <p class="main_billingform_row">
        <label for="alternate_surname_input" class="main_form_label">
        Surname *
        <input type="text" id="alternate_surname_input" name="alternate_surname" class="main_form_input">
        </label>
      </p>
    </div>
    </div>
  </div>
  <div class="main_payment_wrapper">
    <div class="main_payment_grid">
      <div class="main_payment_column">
        <div class="main_payment_paypal payment_btn">
          <div class="payment_logo">
            <img src="img/de-pp-logo-200px.png" alt="paypal_logo">
            <small class="payment_readytext">Ready in 24h</small>
          </div>
        </div>
        <div class="main_payment_sofort payment_btn">
          <div class="payment_logo">
            <img src="img/Sofortüberweisung_Logo.png" alt="sofort_logo">
            <small class="payment_readytext">Ready in 24h</small>
          </div>
        </div>
        <div class="main_payment_credit payment_btn">
          <div class="payment_logo payment_creditcard">
            <img src="img/mastercard.png" alt="creditcard_mastercard">
            <img src="img/visa.png" alt="creditcard_visa">
            <img src="img/maestro.png" alt="creditcard_maestro">
            <small class="payment_readytext">Ready in 12h</small>
          </div>
        </div>
      </div>
      <div class="main_payment_column payment_info_text">
        <article class="payment_general_info payment_info_wrapper">
          <h3 class="main_headline payment_info_headline">Choose your Payment method</h3>
          <p class="payment_info_paragraph">Here you can choose your prefered payment method. Click on the different buttons on the left side of this screen to get more information about the benefits. If you would like us to add a specific payment method please contact us at: <a href="mailto:lala">cyclones(at)office.com</a>. Thank you !</p>
        </article>
        <article class="payment_paypal_info payment_info_wrapper">
          <input type="hidden" id="use_paypal" name="use_paypal" value="0">
          <h3 class="main_headline payment_info_headline">Paypal</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non quis alias fugit asperiores, reiciendis iure perferendis eos accusamus voluptatem expedita laborum quibusdam explicabo exercitationem illo, architecto doloribus debitis dolorem!</p>
        </article>
        <article class="payment_sofort_info payment_info_wrapper">
          <input type="hidden" id="use_sofort" name="use_sofort" value="0">
          <h3 class="main_headline payment_info_headline">Sofort Ueberweisung</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sed eos perferendis voluptatum iste quibusdam, facere qui harum illum! Culpa, quisquam nam doloremque molestiae voluptate repellendus nesciunt ipsum et sint.</p>
        </article>
        <article class="payment_credit_info payment_info_wrapper">
          <input type="hidden" id="use_cc" name="use_cc" value="0">
          <h3 class="main_headline payment_info_headline">Credit Cards</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laudantium reiciendis unde ut, accusamus, officiis, dolore exercitationem tempore eum natus fugit, et quia dolorum qui dicta deleniti maxime. Maiores, repellat?</p>
        </article>
      </div>
    </div>
  </div>
  <div class="main_shipping_wrapper">
    <h2 class="main_headline">Shipping</h2>
    <p style="margin:auto; display:inherit; margin-top: 10px; text-align: center;">
      Standard Shipping is free on all orders of 90€ or more!
    </p>
    <select id="shipping_input" class="main_form_input" name="shipping_method" style="width: 692px; margin:auto; display:inherit; margin-top: 10px;" required>
      <option value="" disabled selected>Select your option</option>
      <option value="standard">Standard Shipping 10€</option>
      <option value="express">Express Shipping 20€</option>
    </select>

  </div>
  <div class="main_revieworder_wrapper">
    <h2 class="main_headline">Review your order</h2>
    <!-- <div class="review_table">
      <table>
       <tr>
        <th></th>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
        <tr>
          <td><img src="img/delete_icon.png" alt=""><img src="shopitems/lost.jpg" height="32" width="32" alt=""></td>
          <td>Cyclones - Lost</td>
          <td>19.99€</td>
          <td><button class="review_table_quantity_btn">-</button><input type="text" placeholder="1" class="review_table_quantity_input"><button class="review_table_quantity_btn">+</button></td>
          <td>19.99€</td>
        </tr>
      </table>
      <div class="coupon_wrapper">
        <input type="text" placeholder="Enter your coupon code here" class="review_coupon_input main_form_input"><button>apply coupon</button>
      </div>
    </div> -->
    <div class="review_table">

            <?php if(!empty($_SESSION['cart'])): ?>
              <table>
               <tr>
                <th></th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              <?php foreach ($products_in_cart as $product_in_cart): ?>
                <?php     $entry = get_article($product_in_cart['id']);
                    $max_entries = 0; ?>

                <tr>
                  <td><a data-action='checkout.products.delete' href="index.php?site=checkout&amp;action=delete_product&amp;product_id=<?php echo $entry["id"]; ?>"><img style="vertical-align: middle;" src="img/delete_icon.png" alt=""></a><img style="margin-left: 10px; vertical-align: middle;" src="<?php echo $entry["img"]; ?>" height="128" alt=""></td>
                  <td><?php echo $entry["name"]; ?></td>
                  <td><?php if ($entry["on_sale"] == "1"): ?><?php echo $entry["sale_price"]; ?><?php else: ?><?php echo $entry["price"]; ?><?php endif; ?> €</td>
                  <td><button data-action='checkout.products.down_quantity' class="review_table_quantity_btn">-</button><input type="text" readonly data-product-id="<?php echo $entry["id"]; ?>" data-action='checkout.products.update_quantity' value="<?php echo $product_in_cart['quantity']; ?>" class="review_table_quantity_input"><button data-action='checkout.products.up_quantity' class="review_table_quantity_btn">+</button></td>
                  <td><?php if ($entry["on_sale"] == "1"): ?><?php echo $entry["sale_price"]*$product_in_cart['quantity']; $total += $entry["sale_price"]*$product_in_cart['quantity']; ?><?php else: ?><?php echo $entry["price"]*$product_in_cart['quantity']; $total += $entry["price"]*$product_in_cart['quantity'];?><?php endif; ?> €</td>

                </tr>
              <?php endforeach; ?>

</table>

          <?php else: ?>
            <h3 style="text-align: center;">Nothing in here yet!</h3>
          <?php endif; ?>


    </div>
    <input type="hidden" name="review_total" id="review_total" value="<?php echo $total; ?>">

    <div class="orderdetails_table">
      <h2 class="main_headline">Order Details</h2>
      <table>
       <tr>
          <th>Subtotal</th>
          <th>Shipping</th>
          <!-- <th>Mwst.</th> -->
          <th>Total</th>
        </tr>
        <tr>
          <td><span id="total_before"><?php echo $total ?></span> €</td>
          <td id="total_shipping">Please select above!</td>
          <!-- <td>18.39€</td> -->
          <td><span id="total_after">
            <?php

            echo $total ?>
          </span> €</td>
        </tr>
      </table>
      <input type="hidden" name="total_after_submission" id="total_after_submission" value="<?php echo $total ?>">
      <input type="submit" class="make_order_btn" value="Place Order">
      <!-- <button class="make_order_btn">Place order</button> -->
    </div>
</form>
  </div>
</main>
