
<table cellspacing="0" class="user_table">
  <thead>
    <tr>
      	<th>ID</th>
      	<th>E-Mail</th>
      	<th>Password Hash</th>
      	<th>Created At</th>
      	<th>Last Order</th>
      	<th>Address ID</th>
      	<th>Preferred Payment</th>
      	<th>Title</th>
      	<th>Company</th>
      	<th>Name</th>
      	<th>Surname</th>
        <th>Admin</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach($all_users as $user): ?>
      
      <tr>

        <td><?php echo $user["id"]; ?></td>
        <td><a class="" href="index.php?site=users&amp;action=edit&amp;id=<?php echo $user['id']; ?>"><?php echo $user["email"]; ?></a></td>
        <td><?php echo $user["pw_hash"]; ?></td>
        <td><?php echo $user["created_at"]; ?></td>
        <td><?php echo $user["last_order"]; ?></td>
        <td><?php echo $user["address_id"]; ?></td>
        <td><?php echo $user["pref_payment"]; ?></td>
        <td><?php echo $user["title"]; ?></td>
        <td><?php echo $user["company"]; ?></td>
        <td><?php echo $user["name"]; ?></td>
        <td><?php echo $user["surname"]; ?></td>
        <td><?php echo $user["deleted"]; ?></td>
        <td><?php echo $user["is_admin"]; ?></td>
        <td>

        <a class="" href="index.php?site=users&amp;action=delete&amp;id=<?php echo $user['id']; ?>"><img src="img/delete_icon.png" alt=""></a>
        </td>
      </tr>
       
      
    <?php endforeach; ?>

  </tbody>
</table>

