<main class="site_main_content">
  <?php 	require("./db/dbconnect.php");
      require("./db/item.php");
      $entry = get_article($_GET["article"]);
      $max_entries = 0;
      //print_r($entry);
  ?>
  <!-- <script type="text/javascript">

  function olswapperoni () {
    document.getElementById("abc").href = "index.php?site=cart&amp;action=update_quantity&amp;product_id=<?php echo $entry["id"]; ?>&amp;new_quantity=" + this.value;
  }
  </script> -->
  <div class="site_main_shopwrapper">
    <article class="shop_singlepage_main_article">
      <img class="shop_singlepage_main_article_img" src="<?php echo $entry["img"]; ?>" alt="Lost Vinyl Edition">

      <div class="shop_singlepage_main_article_wrapper">
        <h2 class="shop_singlepage_main_article_hl"><?php echo $entry["name"]; ?></h2>
        <div class="shop_nav_hr shop_singlepage_hr"></div>
        <?php if ($entry["on_sale"] == "1"): ?><span class="shop_singlepage_main_article_pricetag"><?php echo $entry["sale_price"]; ?>€    </span><?php endif; ?><span class="<?php if ($entry["on_sale"] == "0"): ?>shop_singlepage_main_article_pricetag<?php endif; ?><?php if ($entry["on_sale"] == "1"): ?>shop_singlepage_main_article_pricetag_st<?php endif; ?>"><?php echo $entry["price"]; ?>€</span>

        <?php if ($entry["in_stock"] > "5"): ?><span class="shop_singlepage_main_article_availability">In Stock</span><?php endif; ?>
        <?php if ($entry["in_stock"] <= "5" && $entry["in_stock"] > "0"): ?><span class="shop_singlepage_main_article_availability" style="color: yellow">Few Left</span><?php endif; ?>
        <?php if ($entry["in_stock"] == "0"): ?><span class="shop_singlepage_main_article_availability" style="color: red">Out of Stock</span><?php endif; ?>

        <p class="shop_singlepage_main_article_taxes">incl. Taxes | Shipping costs may apply</p>
        <form class="shop_singlepage_main_article_addtocart" action="#">
          <!-- <input id="quant" type="number" name="quantity" value="1" onchange="olswapperoni()"> -->
          <!-- <input type="submit" name="action" value="Add to Cart" action="cart.php"> -->
          <a id="abc" href="index.php?site=cart&amp;action=add_product&amp;product_id=<?php echo $entry["id"]; ?>" class="btn" style="color: #383838;">Add to Cart</a>
        </form>
        <div class="shop_singlepage_main_article_freeshipping_wrapper">
          <span class="shop_singlepage_main_article_freeshipping">&#10003 Free Shipping on any order worth 90€ or more</span>
        </div>
        <p class="shop_singlepage_main_article_description">
          <?php echo $entry["description"]; ?>
        </p>
      </div>

    </article>

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
            <button class="shop_item_addtocart">Add to Cart</button>
          </div>
          <h3><?php echo $entry["name"]; ?></h3>
          <?php if ($entry["on_sale"] == "1"): ?><small class="shop_item_pricetag_sale"><?php echo $entry["sale_price"]; ?>€</small><?php endif; ?><small class="<?php if ($entry["on_sale"] == "0"): ?>shop_item_pricetag<?php endif; ?><?php if ($entry["on_sale"] == "1"): ?>shop_item_pricetag_st<?php endif; ?>"><?php echo $entry["price"]; ?>€</small>
        </article>
        <?php $max_entries ++; ?>
      <?php endforeach; ?>

    </div>

      <!-- <div class="shop_singlepage_popular_articlewrapper">
        <article class="shop_item">
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
        </article>

        <article class="shop_item">
          <div class="shop_item_preview">
            <img src="shopitems/lost.jpg" alt="" />
            <button class="shop_item_addtocart">Add to Cart</button>
          </div>
          <h3>LOST - ALBUM - VINYL EDITION</h3>
          <small class="shop_item_pricetag">24,99 €</small>
        </article>

        <article class="shop_item">
          <div class="shop_item_preview">
            <img src="shopitems/lost.jpg" alt="" />
            <button class="shop_item_addtocart">Add to Cart</button>
          </div>
          <h3>LOST - ALBUM - VINYL EDITION</h3>
          <small class="shop_item_pricetag">24,99 €</small>
        </article>
      </div> -->

    </section>

  </div>
</main>
