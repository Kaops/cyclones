<?php 
function get_orders() {
  
  global $link;

  $sql = "SELECT product.name, product.description, orders.created_at, orders.user_id, users.email, COUNT(*) AS ordered_amount FROM ordered_products LEFT JOIN product ON product.id = ordered_products.product_id LEFT JOIN orders ON ordered_products.order_id = orders.id LEFT JOIN users ON orders.user_id = users.id GROUP BY product.name";
  $result = mysqli_query($link, $sql);

  if(!$result) {
    echo mysqli_error($link);
  }

  $all_orders = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $all_orders;
}
$all_orders = get_orders();
?>


<div class="backend-table">
	<table>
	 <tr>
	    <th>Product Name</th>
	    <th>Description</th> 
	    <th>Date</th>
	    <th>Amount</th>
	    <th>Order by</th>
	  </tr>
<?php foreach($all_orders as $order): ?>
	  <tr> 
	  	<td><?php echo $order["name"] ?></td>
	    <td><?php echo $order["description"] ?></td>
	    <td><?php echo $order["created_at"] ?></td> 
	    <td><?php echo $order["ordered_amount"] ?></td>
	    <td><a href="index.php?site=users&amp;action=edit&amp;id=<?php echo $order['user_id']; ?>; ?>"> <?php echo $order["email"] ?></a></td>
	  </tr>
<?php endforeach; ?>
	</table>
</div>
