
<?php foreach($all_albums as $album): ?>

  <div class="album_container">
    <a class="album_edit_link" href="index.php?site=music&amp;action=edit&amp;id=<?php echo $album['id']; ?>"><img src="img/<?php echo $album['id']; ?>.jpg" alt="">
    <span class="album_caption"><?php echo $album["title"]; ?></span>
    </a>
  </div>

<?php endforeach; ?>

