<?php foreach($all_items as $item): ?>

  <div class="item_container">
    <a class="item_container_link" href="index.php?site=shop&amp;action=edit&amp;id=<?php echo $item['id']; ?>">
    <span class="item_container_id">ID: <?php echo $item["id"]; ?></span>
    <img class="item_preview" src="<?php echo $item['img'];?>" alt="">
    <span class="item_container_caption">
      <h4><?php echo $item["name"]; ?> </h4>
      <p>Description:<br><span class="light_text"> <?php echo $item["description"]; ?></span> </p>
      <p>Price:<span class="light_text"> <?php echo $item["price"]; ?>€</span> Left in stock: <span class="light_text"><?php echo $item["in_stock"]; ?></span> </p>
    </span>
    </a>
    <div class="item_container_delete">
      <a class="item_container_delete_btn" href="index.php?site=shop&amp;action=delete&amp;id=<?php echo $item['id']; ?>">Delete this item</a>
    </div>
  </div>

<?php endforeach; ?>
<div class="item_container new_item_container">
<a href="index.php?site=shop&amp;action=new" class="new_item"><img src="img/new_item.png" alt=""><br>New item</a>
</div>

