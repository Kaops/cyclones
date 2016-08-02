<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cyclones Official</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<?php 	require("db/dbconnect.php"); 
			require("db/functions.php");
	?>
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
	<main class="site_main_content">
		<section class="album_details">
			<div class="album_details_cover">
			<?php 

			$album_id = isset($_GET['album']) ? $_GET["album"] : 1;
			$album = get_album($album_id);
			$tracklist = get_tracks($album_id);

			?>
				<img src="<?php echo $album['cover'] ?>" alt="">
			</div>
			<div class="album_tracklist">
				<h2 class="main_headline">Tracklist: <?php echo $album["title"]?></h2>
				<ul class="tracklist">
					<?php foreach($tracklist as $track): ?>
					<li><a href="music.php?album=<?php echo $album_id ?>&amp;track=<?php echo $track['track_nr'] ?>"><?php echo $track['track_nr'] . ". " .$track['track']; ?></a></li>
					<?php endforeach; ?>
				</ul>
				<h2 class="main_headline">Buy: <?php echo $album["title"]?></h2>
				<ul class="buylist">
					<li><a href="https://itunes.apple.com/us/album/difference-between-hell-home/id663087613">Buy <?php echo $album["title"]?> on iTunes</a></li>
					<li><a href="shop.php">Buy <?php echo $album["title"]?> in our shop</a></li>
				</ul>
			</div>
			<aside class="music_sidebar_wrapper">
				<?php 

				$track_id = isset($_GET['track']) ? $_GET["track"] : 1;
				$current_track = $tracklist[$track_id - 1]; 

				?>
				<h2 class="main_headline">Infos</h2>
				<p>
					<?php echo $album["album_info"]; ?>
				</p>
				<h2 class="main_headline">Listen to <?php echo $current_track["track"]; ?></h2>
				<p>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/145351562&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</p>
				<h2 class="main_headline">Lyrics</h2>
				<p>
					<?php echo $current_track["lyrics"]; ?>
				</p>
			</aside>
		</section>
		<section class="album_previews">
		<h2 class="main_headline">More Albums</h2>
		<?php $albums = get_all_albums(); ?>
			<ul class="albumlist">
			<?php foreach($albums as $album): ?>
				<li>
	            	<img src="<?php echo $album['cover']; ?>" alt="album_cover">
	            	<div class="albumlist_caption">
	            		<div class="albumlist_text">
		            		<a href="music.php?album=<?php echo $album["id"] ?>">
			            		<h3><?php echo $album["title"]; ?></h3>
			            		<span><?php echo $album["album_info"]; ?></span>
		            		</a>
	            		</div>
	            	</div>
            	</li>
            <?php endforeach; ?>
			</ul>
		</section>
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
	<script type="text/javascript" src="js/main_jquery.js"></script>
	<script type="text/javascript" src="js/home_jquery.js"></script>
</body>
</html>
