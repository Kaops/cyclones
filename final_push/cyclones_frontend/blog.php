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
		<div class="header_logo_wrapper">
			<h1 class="logo"><a href="index.html">Cyclones</a></h1>
		</div>
		<nav class="header_nav">
			<ul>
				<li><a href="bio.php" >Bio</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="blog.php">News</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li class="header_nav_borderleft"><a href="#" >Login</a></li>
			</ul>
		</nav>
	</header>
	<main class="site_main_content blog_main_content">
		<section class="blog_headimg_wrapper">
			<div class="blog_headimg blog_headimg-1"></div>
			<div class="blog_headimg blog_headimg-2"></div>
			<div class="blog_headimg blog_headimg-3"></div>
			<div class="blog_headimg blog_headimg-4"></div>
		</section>
		<div class="blog_maincontent_wrapper">
			<section class="blog_entries_wrapper">
			<?php 	require("db/dbconnect.php"); 
					require("db/functions.php");
					$all_entries = get_entries();
					$max_entries = 0;
					$tourdates = get_tourdates();
			?>
			<?php foreach($all_entries as $entry): ?>
				<article class="blog_entry" id="<?php echo $entry['id']; ?>">
					<figure class="blog_entry_img"></figure>
					<div class="blog_entry_textwrapper">
						<h2 class="blog_headline" ><a href="#"><?php echo $entry["headline"]; ?></a></h2>
						<a class="blog_entry_date" href="#"><?php echo $entry["created_at"]; ?></a>
						<p>
							<?php echo $entry["content"]; ?>
						</p>
						<div class="blog_socialmedia_share">
							<a href="#" class="share-btn share-1">Share</a>
							<a href="https://plus.google.com/share?url=blog.php%23<?php echo $entry['id']; ?>"><img src="img/google.png" alt="" class="blog_socialmedia_img"></a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=blog.php%23<?php echo $entry['id']; ?>"><img src="img/fb.png" alt="" class="blog_socialmedia_img"></a>
							<a href="https://twitter.com/home?status=blog.php%23<?php echo $entry['id']; ?>"><img src="img/twitter.png" alt="" class="blog_socialmedia_img"></a>
						</div>
					</div>
				</article>
				<?php $max_entries ++; ?>
			<?php endforeach; ?>
			
			</section>
			<aside class="blog_sidebar_wrapper">
				<section class="blog_tourdates">
				<h2 class="blog_headline">Tourdates</h2>
				<table>
				 <tr>
				    <th>Date</th>
				    <th>Where</th> 
				    <th>Tickets</th>
				  </tr>
				  <?php foreach($tourdates as $date): ?>
				  <tr>
				    <td><?php echo $date["date"]; ?></td>
				    <td><?php echo $date["location"]; ?></td> 
				    <td><a href="<?php echo $date["tickets"]; ?>">Get Tix</a></td>
				  </tr>
					<?php endforeach; ?>
				</table>
				<!-- <a href="#" class="blog_loadbtn btn">Load more Tourdates</a><br> -->
				<a class="twitter-timeline" id="tw_plugin" height="550" href="https://twitter.com/counterparts905">Tweets by Cyclones</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</section>
			</aside>

		</div>
		<div class="blog_entry_bar">
			<a href="#" class="blog_entry_loadbtn btn">Load more blog Entries</a>	
		</div>
	</main>

	<footer class="site_footer">
		<section class="footer_sitemap">
			<div class="footer_wrapper">
				<h3 class="footer_headline">Sitemap</h3>
				<ul class="footer_sitemap_list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Music</a></li>
					<li><a href="#">Bio</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</div>
		</section>
		<section class="footer_socialmedia">
			<div class="footer_wrapper">
				<h3 class="footer_headline">Social Media</h3>

				<div class="footer_socialmedia_row">
					<a href="#"><img src="img/google.png" alt="" class="footer_socialmedia_rowimg"></a>
					<a href="#"><img src="img/ig.png" alt="" class="footer_socialmedia_rowimg"></a>
					<a href="#"><img src="img/soundcloud.png" alt="" class="footer_socialmedia_rowimg"></a>
				</div>

				<div class="footer_socialmedia_row">
					<a href="#"><img src="img/fb.png" alt="" class="footer_socialmedia_rowimg"></a>
					<a href="#"><img src="img/twitter.png" alt="" class="footer_socialmedia_rowimg"></a>
					<a href="#"><img src="img/yp.png" alt="" class="footer_socialmedia_rowimg"></a>
				</div>

				<small class="footer_socialmedia_copyright">Copyright - Cyclones 2016 <br> <a href="#">Imprint</a></small>
			</div>
		</section>
		<section class="footer_contact">
			<div class="footer_wrapper">
				<h3 class="footer_headline">Contact</h3>
			<p>Need help shopping ?</p>
			<p>Shoot us a message !</p>
			<ul class="footer_contact_list">
				<li><img src="img/tel.png" alt=""> 0699123123123</li>
				<li><img src="img/email.png" alt=""><a href="mailto:">shop@cyclones.com</a></li>
				<li><img src="img/email.png" alt=""><a href="#">Contact Form</a></li>
			</ul>
			</div>
		</section>
	</footer>
	<script type="text/javascript" src="js/blog_jquery.js"></script>
</body>
</html>