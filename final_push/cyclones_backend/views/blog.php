
<table cellspacing="0" class="blog_table">
  <thead>
    <tr>
      	<th>ID</th>
      	<th>User ID</th>
      	<th>Headline</th>
      	<th>Content</th>
      	<th>Date</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach($all_entries as $entry): ?>
      
      <tr data-id="<?php echo $entry["id"]; ?>" >  
        <td><?php echo $entry["id"]; ?></td>
        <td><a class="" href="index.php?site=blog&amp;action=edit&amp;id=<?php echo $entry['id']; ?>"><?php echo $entry["user_id"]; ?></a></td>
        <td><?php echo $entry["headline"]; ?></td>
        <td><?php echo $entry["content"]; ?></td>
        <td><?php echo $entry["created_at"]; ?></td>
        <td>
        <a class="delete_entry_btn" href="index.php?site=blog&amp;action=delete&amp;id=<?php echo $entry['id']; ?>"><img src="img/delete_icon.png" alt=""></a>
        </td>
      </tr>
       
      
    <?php endforeach; ?>

  </tbody>
</table>

