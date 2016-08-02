<h4>Ordered Products</h4>

<div class="backend-table orders-table">
	<table>
	 <tr>
	    <th>Product Name</th>
	    <th>Description</th> 
	    <th>Date</th>
	    <th>Amount</th>
	    <th>Order by</th>
	    
	  </tr>
<?php foreach($all_products as $product): ?>
	  <tr> 
	  	<td><?php echo $product["name"] ?></td>
	    <td><?php echo $product["description"] ?></td>
	    <td><?php echo $product["created_at"] ?></td> 
	    <td><?php echo $product["ordered_amount"] ?></td>
	    <td><a href="index.php?site=users&amp;action=edit&amp;id=<?php echo $product['user_id']; ?>"> <?php echo $product["email"] ?></a></td>
	  </tr>
<?php endforeach; ?>
	</table>
</div>


<h4>All Orders</h4>

<div class="backend-table orders-table">
	<table>
	 <tr>
	    <th>Order ID</th>
	    <th>Product Name</th> 
	    <th>Amount</th>
	    <th>Sum</th>
	    <th>Ordered At</th>
	    <th>Ordered By</th>
	    <th>Cancel</th>
	  </tr>
<?php foreach($all_orders as $order): ?>
	  <tr> 
	  	<td><?php echo $order["order_id"] ?></td>
	    <td><?php echo $order["name"] ?></td>
	    <td><?php echo $order["amount"] ?></td> 
	    <td><?php echo $order["sum"] ?></td>
	    <td><?php echo $order["created_at"] ?></td>
	    <td><a href="index.php?site=users&amp;action=edit&amp;id=<?php echo $order['user_id']; ?>"> <?php echo $order["email"] ?></a></td>
	    <td><a href="index.php?site=orders&amp;action=cancel&amp;id=<?php echo $order['order_id']; ?>" class="delete_order">Cancel order</a></td>
	  </tr>
<?php endforeach; ?>
	</table>
</div>