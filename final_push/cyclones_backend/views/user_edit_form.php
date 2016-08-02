<h4>Edit User with ID: <?php echo $id ?></h4>
<form method="post" action="<?php echo $form_action; ?>" class="user_edit_form" novalidate>
  	<input type="hidden" name="id" value="<?php echo $user["id"]; ?>">

  	<p>
      <label for="email" >E-Mail</label>

      <input type="text" name="email" id="email" placeholder="E-Mail Address" class="main_input" value="<?php echo $user["email"]; ?>"> 
    </p>

  	<p>
      <label for="name">Name</label>

      <input type="text" name="name" id="name" placeholder="Name" class="main_input" value="<?php echo $user["name"]; ?>"> 
    </p>

  	<p>
      <label for="surname">Surname</label>

      <input type="text" name="surname" id="surname" placeholder="Surname" class="main_input" value="<?php echo $user["surname"]; ?>"> 
    </p>

  	<p>
      <label for="pref_payment">Preferred Payment</label>

      <input type="text" name="pref_payment" id="pref_payment" placeholder="Preferred Payment" class="main_input" value="<?php echo $user["pref_payment"]; ?>"> 
    </p>
	
  	<p>
      <label for="title">Title</label>

      <input type="text" name="title" id="title" placeholder="Title" class="main_input" value="<?php echo $user["title"]; ?>"> 
    </p>

  	<p>
      <label for="company">Company</label>

      <input type="text" name="company" id="company" placeholder="Company" class="main_input" value="<?php echo $user["company"]; ?>"> 
    </p>

  	<p>
     <label>
          <input type="hidden" name="is_admin" value="0">
          <input type="checkbox" name="is_admin" <?php echo is_checked($user["is_admin"]) ?>> Admin?
      </label> 
    </p>

  	<p>
     <button type="submit" class="main_btn" >Update</button> 
    </p>
</form>
<h4>All orders by this user:</h4>
<div class="backend-table">
  <table>
   <tr>
      <th>Product Name</th>
      <th>Description</th> 
      <th>Ordered at</th>
      <th>Amount</th>
    </tr>
<?php foreach($orders as $order): ?>
    <tr> 
      <td><?php echo $order["name"] ?></td>
      <td><?php echo $order["description"] ?></td>
      <td><?php echo $order["created_at"] ?></td> 
      <td><?php echo $order["ordered_amount"] ?></td>
    </tr>
<?php endforeach; ?>
  </table>
</div>