<?php //require("./logic/cartfunct.php") ?>
<?php 	require("./db/dbconnect.php");
    require("./db/item.php");
    $total = 0;
    //print_r($entry);
?>
<main class="site_main_content">
  <div class="main_cart_wrapper">
    <h2 class="main_headline">Your Cart</h2>
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
                  <td><a data-action='cart.products.delete' href="index.php?site=cart&amp;action=delete_product&amp;product_id=<?php echo $entry["id"]; ?>"><img style="vertical-align: middle;" src="img/delete_icon.png" alt=""></a><img style="margin-left: 10px; vertical-align: middle;" src="<?php echo $entry["img"]; ?>" height="128" alt=""></td>
                  <td><?php echo $entry["name"]; ?></td>
                  <td><?php if ($entry["on_sale"] == "1"): ?><?php echo $entry["sale_price"]; ?><?php else: ?><?php echo $entry["price"]; ?><?php endif; ?> €</td>
                  <td><button data-action='cart.products.down_quantity' class="review_table_quantity_btn">-</button><input type="text" readonly data-product-id="<?php echo $entry["id"]; ?>" data-action='cart.products.update_quantity' value="<?php echo $product_in_cart['quantity']; ?>" class="review_table_quantity_input"><button data-action='cart.products.up_quantity' class="review_table_quantity_btn">+</button></td>
                  <td><?php if ($entry["on_sale"] == "1"): ?><?php echo $entry["sale_price"]*$product_in_cart['quantity']; $total += $entry["sale_price"]*$product_in_cart['quantity']; ?><?php else: ?><?php echo $entry["price"]*$product_in_cart['quantity']; $total += $entry["price"]*$product_in_cart['quantity'];?><?php endif; ?> €</td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Final Total:</td>
                <td><?php echo $total ?> €</td>
              </tr>
</table>
<div class="coupon_wrapper">
  <a href="index.php?site=cart&amp;action=delete_cart" class="btn" data-action='cart.empty' style="color: red;">Empty Cart</a>
  <a href="index.php?site=checkout" class="btn" style="color: #383838;">To Checkout</a>
</div>
          <?php else: ?>
            <h3 style="text-align: center;">Nothing in here yet!</h3>
          <?php endif; ?>


    </div>


    <section class="shop_singelpage_popular">
      <h2 class="shop_singlepage_main_article_hl">Other Items</h2>
      <div class="shop_nav_hr"></div>
      <?php 	require("./db/dbconnect.php");
           require("./db/shop.php");
          $all_entries = get_entries();
          $max_entries = 0;
      ?>
      <div class="shop_singlepage_popular_articlewrapper">
        <?php foreach($all_entries as $entry): ?>
        <?php  if($max_entries==4) break; ?>
        <article class="shop_item <?php echo $entry["category"]; ?> <?php if ($entry["on_sale"] == "1"): ?>sale<?php endif; ?>">
          <div class="shop_item_preview">

              <?php if ($entry["in_stock"] > "5"): ?><div class="shop_item_stockdisplay">In Stock</div><?php endif; ?>
              <?php if ($entry["in_stock"] <= "5" && $entry["in_stock"] > "0"): ?><div class="shop_item_stockdisplay" style="color: yellow">Few Left</div><?php endif; ?>
              <?php if ($entry["in_stock"] == "0"): ?><div class="shop_item_stockdisplay" style="color: red">Out of Stock</div><?php endif; ?>

            <?php if ($entry["on_sale"] == "1"): ?><div class="shop_item_onsale_wrapper"><div class="shop_item_onsale">Sale!</div></div><?php endif; ?>
            <a href="index.php?site=item&article=<?php echo $entry["id"]; ?>"><img src="<?php echo $entry["img"]; ?>" alt="" /></a>
            <a class="shop_item_addtocart" data-action='cart.products.add' href="index.php?site=shop&amp;action=add_product&amp;product_id=<?php echo $entry['id']; ?>">Add to Cart</a>
          </div>
          <h3><?php echo $entry["name"]; ?></h3>
          <?php if ($entry["on_sale"] == "1"): ?><small class="shop_item_pricetag_sale"><?php echo $entry["sale_price"]; ?>€</small><?php endif; ?><small class="<?php if ($entry["on_sale"] == "0"): ?>shop_item_pricetag<?php endif; ?><?php if ($entry["on_sale"] == "1"): ?>shop_item_pricetag_st<?php endif; ?>"><?php echo $entry["price"]; ?>€</small>
        </article>
        <?php $max_entries ++; ?>
      <?php endforeach; ?>

    </div>
</main>
