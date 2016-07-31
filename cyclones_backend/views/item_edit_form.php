<?php if($_GET['action'] == "edit"): ?>
<h4>Edit Item with ID: <?php echo $id ?></h4>
<form method="post" action="<?php echo $form_action; ?>" class="user_edit_form" novalidate>
  	<input type="hidden" name="id" value="<?php echo $item["id"]; ?>">

  	<p>
      <label for="name" >Name</label>

      <input type="text" name="name" id="name" placeholder="Name" class="main_input" value="<?php echo $item["name"]; ?>">
    </p>

  	<p>
      <label for="description">Description</label>

      <input type="text" name="description" id="description" placeholder="Description" class="main_input" value="<?php echo $item["description"]; ?>">
    </p>

  	<p>
      <label for="price">Price</label>

      <input type="text" name="price" id="price" placeholder="Price" class="main_input" value="<?php echo $item["price"]; ?>">
    </p>

  	<p>
      <label for="in_stock">Left in stock</label>

      <input type="text" name="in_stock" id="in_stock" placeholder="In stock" class="main_input" value="<?php echo $item["in_stock"]; ?>">
    </p>

  	<p>
      <label for="img">Image</label>

      <input type="text" name="img" id="img" placeholder="Image Path" class="main_input" value="<?php echo $item["img"]; ?>">
    </p>

    <p>
      <label for="sale">Sale?</label>

      <input type="hidden" name="sale" id="sale" class="main_input" value="0">
      <input type="checkbox" name="sale" id="sale" class="main_input" value="1" <?php if ($item["on_sale"] == 1): ?>checked <?php endif; ?>>
    </p>

    <p>
      <label for="sale_price">Sale Price (Only relevant if item is put on sale above!)</label>

      <input type="text" name="sale_price" id="sale_price" class="main_input" value="<?php echo $item["sale_price"]; ?>" >
    </p>

  	<p>
     <button type="submit" class="main_btn" >Update</button>
    </p>
</form>
<?php endif; ?>
<?php if($_GET['action'] == "new"): ?>
<h4>New item</h4>
<form method="post" action="<?php echo $form_action; ?>" class="user_edit_form" novalidate>
    <p>
      <label for="name" >Name</label>

      <input type="text" name="name" id="name" class="main_input" >
    </p>

    <p>
      <label for="description">Description</label>

      <input type="text" name="description" id="description" class="main_input" >
    </p>

    <p>
      <label for="price">Price</label>

      <input type="text" name="price" id="price" class="main_input">
    </p>

    <p>
      <label for="in_stock">Left in stock</label>

      <input type="text" name="in_stock" id="in_stock" class="main_input">
    </p>

    <p>
      <label for="img">Image</label>

      <input type="text" name="img" id="img" class="main_input">
    </p>

    <p>
     <button type="submit" class="main_btn" >Update</button>
    </p>
</form>
<?php endif; ?>
