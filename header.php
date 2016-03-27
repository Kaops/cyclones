<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cyclones Official</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
</head>
<body>
	<header class="site_header">
		<h1 class="logo"><a href="index.php">Cyclones</a></h1>
		<nav class="header_nav">
			<ul>
				<li <?php if ($site === "bio"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=bio" >Bio</a></li>
				<li <?php if ($site === "music"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=music">Music</a></li>
				<li <?php if ($site === "news"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=news">News</a></li>
				<li <?php if ($site === "shop"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=shop">Shop</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>
