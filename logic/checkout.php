<main class="site_main_content">
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
          <a href="#" class="main_login_link main_remember_pos"><div class="main_remember_toggle main_remember_toggle_off"></div>Remember Me</a>
          <a href="#" class="main_login_link">Forgot Your Password ?</a>
          <a href="#" class="main_login_link">Login As Guest</a>
        </div>
      </form>

    </div>
  </div>
  <div class="main_billing_wrapper">
    <h2 class="main_headline">Billing Details</h2>
    <form action="billingform.php" method="post">
      <div class="main_billingform">
        <div class="main_billingform_col">
        <div class="main_form_splitwrapper main_billingform_row">
          <div class="main_form_split">
            <div class="main_form_gender">
              <p class="main_form_label" id="gender_label">Gender</p>
              <input type="radio" name="gender" value="male"  id="male_radio" class="main_form_gender_btn">
              <label for="male_radio" class="main_form_label male_label">Male</label>

              <input type="radio" name="gender" value="female" id="female_radio" class="main_form_gender_btn">
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
          <label for="company_input" class="main_form_label">
          Company
          <input type="text" id="company_input" name="company" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="address_input" class="main_form_label">
          Address
          <input type="text" id="address_input" name="address" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="country_input" class="main_form_label">
          Country
          <select id="country_input" class="main_form_input">
            <option value="AT">Austria</option>
            <option value="DK">Denmark</option>
            <option value="DE">Germany</option>
            <option value="NL">Netherlands</option>
            <option value="GB">United Kingdom</option>
          </select>
          </label>
        </p>
        <div class="main_form_splitwrapper main_billingform_row">
          <div class="main_form_split">
            <label for="city_input" class="main_form_label">
            City
            <input type="text" id="city_input" name="city" class="main_form_input_half">
            </label>
          </div>
          <div class="main_form_split">
            <label for="plz_input" class="main_form_label">
            Plz
            <input type="text" id="plz_input" name="plz" class="main_form_input_half">
            </label>
          </div>
        </div>
        <p class="main_billingform_row">
          <button type="button" class="main_form_btn">Add a new Address</button>
        </p>
      </div>
      <div class="main_billingform_col">
        <p class="main_billingform_row">
          <label for="name_input" class="main_form_label">
          Name
          <input type="text" id="name_input" name="name=" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="surname_input" class="main_form_label">
          Surname
          <input type="text" id="surname_input" name="surname=" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="billing_email_input" class="main_form_label">
          Email
          <input type="text" id="billing_email_input" name="billing_email" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="billing_password_input" class="main_form_label">
          Password
          <input type="text" id="billing_password_input" name="billing_password" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <label for="billing_repassword_input" class="main_form_label">
          Repeat Password
          <input type="text" id="billing_repassword_input" name="surname=" class="main_form_input">
          </label>
        </p>
        <p class="main_billingform_row">
          <input type="submit" name="continue" value="Continue" class="main_form_btn">
        </p>
      </div>
      </div>
    </form>
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
          <h3 class="main_headline payment_info_headline">Paypal</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas non quis alias fugit asperiores, reiciendis iure perferendis eos accusamus voluptatem expedita laborum quibusdam explicabo exercitationem illo, architecto doloribus debitis dolorem!</p>
        </article>
        <article class="payment_sofort_info payment_info_wrapper">
          <h3 class="main_headline payment_info_headline">Sofort Ueberweisung</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde sed eos perferendis voluptatum iste quibusdam, facere qui harum illum! Culpa, quisquam nam doloremque molestiae voluptate repellendus nesciunt ipsum et sint.</p>
        </article>
        <article class="payment_credit_info payment_info_wrapper">
          <h3 class="main_headline payment_info_headline">Credit Cards</h3>
          <p class="payment_info_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laudantium reiciendis unde ut, accusamus, officiis, dolore exercitationem tempore eum natus fugit, et quia dolorum qui dicta deleniti maxime. Maiores, repellat?</p>
        </article>
      </div>
    </div>
  </div>
  <div class="main_revieworder_wrapper">
    <h2 class="main_headline">Review your order</h2>
    <div class="review_table">
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
    </div>

    <div class="orderdetails_table">
      <h2 class="main_headline">Order Details</h2>
      <table>
       <tr>
          <th>Subtotal</th>
          <th>Shipping</th>
          <th>Mwst.</th>
          <th>Total</th>
        </tr>
        <tr>
          <td>91.95€</td>
          <td>Express: 20€</td>
          <td>18.39€</td>
          <td>130.34€</td>
        </tr>
      </table>
      <button class="make_order_btn">Make order</button>
    </div>

  </div>
</main>
