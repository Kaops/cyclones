		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Cyclones Official</title>
			<link rel="stylesheet" href="css/style.css">
			<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
			<script type="text/javascript" src="js/jquery.js"></script>
		</head>
		<body>
			<header class="site_header">
				<div class="header_logo_wrapper">
					<h1 class="logo"><a href="index.php?site=home">Cyclones</a></h1>
				</div>
				<nav class="header_nav">
					<ul>
						<li <?php if ($site === "bio"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=bio" >Bio</a></li>
						<li <?php if ($site === "music"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=music">Music</a></li>
						<li <?php if ($site === "news"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=news">News</a></li>
						<li <?php if ($site === "shop"): ?>class="header_nav_active"<?php endif; ?>><a href="index.php?site=shop">Shop</a></li>
							<?php if(isset($_SESSION["logged_in"]) === true){ ?>

							<?php } else { ?>
								<li class="header_login header_nav_borderleft" ><a class="header_login" href="#">Login</a></li>
								<div id="signin-dropdown">

					        <form method="post" class="signin" action="#">
					        <fieldset class="textbox">
					        <label for="username" class="username">
					        <p>Email</p>
					        <input class="main_form_input_half" id="username" name="username" value="" type="text">
					        </label>

					        <label for="password" class="password">
					        <p>Password</p>
					        <input class="main_form_input_half" id="password" name="password" value="" type="password">
					        </label>
					        </fieldset>

					        <fieldset class="remb">
					        <label class="remember">
					        <input type="checkbox" value="1" name="remember_me" />
					        <span>Remember me</span>
					        </label>
									<br>
					        <button class="main_form_btn" type="submit">Sign in</button>
					        </fieldset>
					        <p>
					        Don't have an account?
					        </p>
									<button class="main_form_btn" type="button">Register</button>
					        </form>
					    	</div>

							<?php }; ?>
					</ul>
				</nav>
			</header>
