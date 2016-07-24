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
				<li><a href="#" >Bio</a></li>
				<li><a href="music.html">Music</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="shop.html">Shop</a></li>
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
					require("db/blog.php");
					$all_entries = get_entries();
					$max_entries = 0;
			?>
			<?php foreach($all_entries as $entry): ?>
				<article class="blog_entry">
					<figure class="blog_entry_img"><a href="#"></a></figure>
					<div class="blog_entry_textwrapper">
						<h2 class="blog_headline"><a href="#"><?php echo $entry["headline"]; ?></a></h2>
						<a class="blog_entry_date" href="#"><?php echo $entry["created_at"]; ?></a>
						<p>
							<?php echo $entry["content"]; ?>
						</p>
						<div class="blog_socialmedia_share">
							<a href="#" class="share-btn share-1">Share</a>
							<a href="#"><img src="img/google.png" alt="" class="blog_socialmedia_img"></a>
							<a href="#"><img src="img/fb.png" alt="" class="blog_socialmedia_img"></a>
							<a href="#"><img src="img/twitter.png" alt="" class="blog_socialmedia_img"></a>
						</div>
						<a href="#" class="readmore-btn">Read More</a>
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
				  <tr>
				    <td>Feb 22</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Mar 02</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Mar 21</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Apr 01</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Apr 23</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>May 02</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>May 23</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>May 28</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Jun 04</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Jun 10</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Jul 11</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				  <tr>
				    <td>Jul 14</td>
				    <td>Arena Wien</td> 
				    <td><a href="#">Oeticket</a></td>
				  </tr>
				</table>
				<a href="#" class="blog_loadbtn btn">Load more Tourdates</a><br>
				<img src="img/blog_img.jpg"  alt="">
				</section>
			</aside>

		</div>
		<div class="blog_entry_bar">
			<a href="#" class="blog_entry_loadbtn btn">Load more blog Entries</a>	
			<input type="text" name="blog_search_input" placeholder="Search entries" class="blog_search_input" data-entries="<?php echo $max_entries; ?>">

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