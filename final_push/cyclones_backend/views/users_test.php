
<?php foreach($all_users as $user): ?>

  <div class="user_container <?php if($user['is_admin'] == 1){echo 'is_admin_container'; } ?> ">
    <a class="user_container_link" href="index.php?site=users&amp;action=edit&amp;id=<?php echo $user['id']; ?>">
    <span class="user_container_id"><?php echo $user["id"]; ?></span>
    <span class="user_container_caption">
      <h4><?php echo $user["email"]; ?> </h4>
      <p>Created at:<br><span class="light_text"> <?php echo $user["created_at"]; ?></span> </p>
      <p>Name and Privileges:<br><span class="light_text"> <?php echo $user["name"]; ?> <?php echo $user["surname"]; ?><span class="highlight-text"> <?php if($user['is_admin'] == 1){echo 'is ADMIN'; }else { echo 'is no ADMIN';} ?></span></span></p>
    </span>
    </a>
    <div class="user_container_delete">
      <a class="user_container_delete_btn" href="index.php?site=users&amp;action=delete&amp;id=<?php echo $user['id']; ?>"><img src="img/delete_icon.png" alt=""></a>
    </div>
  </div>

<?php endforeach; ?>

