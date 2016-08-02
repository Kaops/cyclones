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
						<li class="<?php if ($site === "cart"): ?>header_nav_active<?php endif; ?> header_nav_borderleft"><a href="index.php?site=cart">Cart</a></li>

							<?php if(isset($_SESSION["logged_in"]) === true){ ?>
								<li class="header_account" ><a class="header_account" href="index.php?site=account">Account</a></li>
								<li class="header_logout" ><a class="header_logout" href="index.php?site=logout">Logout</a></li>
							<?php } else { ?>
								<li class="header_login" ><a class="header_login" href="#">Login</a></li>
								<div id="signin-dropdown">

					        <form method="post" class="signin" action="logic/login.php?site=<?php echo $site ?>">
					        <fieldset class="textbox">
					        <label for="username" class="username">
					        <p>Email</p>
					        <input class="main_form_input_half" id="username" name="login_username" value="" type="text" required>
					        </label>

					        <label for="password" class="password">
					        <p>Password</p>
					        <input class="main_form_input_half" id="password" name="login_password" value="" type="password" required>
					        </label>
					        </fieldset>

					        <fieldset class="remb">
									<br>
					        <button class="main_form_btn" type="submit" >Sign in</button>
					        </fieldset>
					        <p>
					        Don't have an account?
					        </p>
									<a href="index.php?site=register" class="main_form_btn" type="button">Register</a>
					        </form>
					    	</div>

							<?php }; ?>

					</ul>
				</nav>
			</header>
