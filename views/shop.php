  <main class="site_main_content">
    <?php 	require("./db/dbconnect.php");
        require("./db/shop.php");
        //require("./logic/cartfunct.php");
        $all_entries = get_entries();
        $max_entries = 0;
    ?>
    <div class="site_main_shopwrapper">
      <div class="shop_nav_wrapper">
        <nav class="shop_nav">
          <ul>
            <li><a href="#" id="albums">ALBUMS</a></li>
            <li><a href="#" id="vinyl">VINYL</a></li>
            <li><a href="#" id="merch">MERCH</a></li>
            <li><a href="#" id="tickets">TICKETS</a></li>
            <li><a href="#" id="sale">SALE</a></li>
          </ul>
        </nav>
      </div>
      <div class="shop_nav_hr"></div>

      <section class="shop_items">

				<h2 class="hidden">Shop Items</h2>

        <!-- <article class="shop_item">
          <div class="shop_item_preview">
            <div class="shop_item_stockdisplay">In Stock - Ready to deliver</div>
            <a href="#" id="shop_item_img"><img  src="shopitems/lost.jpg" alt="" /></a>
            <button class="shop_item_addtocart">Add to Cart</button>
          </div>
          <h3>LOST - ALBUM - VINYL EDITION</h3>
          <small class="shop_item_pricetag">24,99 €</small>
        </article>

        <article class="shop_item">
          <div class="shop_item_preview">
            <div class="shop_item_onsale_wrapper"><div class="shop_item_onsale">Sale!</div></div>
            <img src="shopitems/lost.jpg" alt="" />
            <button class="shop_item_addtocart">Add to Cart</button>
          </div>
          <h3>LOST - ALBUM - VINYL EDITION</h3>
          <small class="shop_item_pricetag_sale">20,99 €</small><small class="shop_item_pricetag_st">24,99 €</small>
        </article> -->

        <?php foreach($all_entries as $entry): ?>
        <article class="shop_item <?php echo $entry["category"]; ?> <?php if ($entry["on_sale"] == "1"): ?>sale<?php endif; ?>">
          <div class="shop_item_preview">

              <?php if ($entry["in_stock"] > "5"): ?><div class="shop_item_stockdisplay">In Stock</div><?php endif; ?>
              <?php if ($entry["in_stock"] <= "5" && $entry["in_stock"] > "0"): ?><div class="shop_item_stockdisplay" style="color: yellow">Few Left</div><?php endif; ?>
              <?php if ($entry["in_stock"] == "0"): ?><div class="shop_item_stockdisplay" style="color: red">Out of Stock</div><?php endif; ?>

            <?php if ($entry["on_sale"] == "1"): ?><div class="shop_item_onsale_wrapper"><div class="shop_item_onsale">Sale!</div></div><?php endif; ?>
            <a href="index.php?site=item&amp;article=<?php echo $entry["id"]; ?>"><img src="<?php echo $entry["img"]; ?>" alt="" /></a>
            <a class="shop_item_addtocart" href="index.php?site=shop&amp;action=add_product&amp;product_id=<?php echo $entry['id']; ?>">Add to Cart</a>
          </div>
          <h3><?php echo $entry["name"]; ?></h3>
          <?php if ($entry["on_sale"] == "1"): ?><small class="shop_item_pricetag_sale"><?php echo $entry["sale_price"]; ?>€</small><?php endif; ?><small class="<?php if ($entry["on_sale"] == "0"): ?>shop_item_pricetag<?php endif; ?><?php if ($entry["on_sale"] == "1"): ?>shop_item_pricetag_st<?php endif; ?>"><?php echo $entry["price"]; ?>€</small>
        </article>
        <?php $max_entries ++; ?>
      <?php endforeach; ?>
      <!-- In case of incomplete last row of items, these divs will fix the layout -->
      <div class="filling-empty-space-childs"></div>
      <div class="filling-empty-space-childs"></div>
      <div class="filling-empty-space-childs"></div>


      </section>



    </div>
  </main>
