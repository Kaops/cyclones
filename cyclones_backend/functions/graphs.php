<?php

$graph_link = mysqli_connect('localhost', 'root', '', 'cyclones');

if (!$graph_link) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
  . mysqli_connect_error());
}


function get_order_data(){
	global $graph_link;
	$sql = "SELECT created_at FROM orders";
	$result = mysqli_query($graph_link, $sql);

	if(!$result) {
	echo mysqli_error($graph_link);
	}

	$order_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $order_data;
}
function get_age(){
	global $graph_link;
	$sql = "SELECT birthday FROM users";
	$result = mysqli_query($graph_link, $sql);

	if(!$result) {
	echo mysqli_error($graph_link);
	}

	$age_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $age_data;
}
function get_orderlocations(){
	global $graph_link;
	$sql = 'SELECT city, plz FROM address LEFT JOIN users ON address.id = users.address_id LEFT JOIN orders ON users.id = orders.user_id';
	$result = mysqli_query($graph_link, $sql);

	if(!$result) {
	echo mysqli_error($graph_link);
	}

	$location_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $location_data;
}
function get_payments() {
	global $graph_link;
	$sql = "SELECT pref_payment FROM users";
	$result = mysqli_query($graph_link, $sql);

	if(!$result) {
	echo mysqli_error($graph_link);
	}

	$payment_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $payment_data;
}
function get_orderedproducts(){
	global $graph_link;
	$sql = "SELECT name FROM product LEFT JOIN ordered_products ON ordered_products.product_id = product.id GROUP BY product.name";
	$result = mysqli_query($graph_link, $sql);

	if(!$result) {
	echo mysqli_error($graph_link);
	}

	$age_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $age_data;
}
print_r(get_order_data());
?>
