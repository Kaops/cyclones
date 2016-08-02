<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cyclones Backend</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.0/Chart.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,700' rel='stylesheet' type='text/css'>
</head>
<body>

  
    <aside class="dashboard_nav">
        <nav>
        <ul class="dashboard_nav_list">
          <li class="dashboard_nav_listitem"><a href="index.php"><img src=" img/home_icon_small.png" alt=""></a></li>
          <li class="dashboard_nav_listitem"><a href="index.php?site=users"><img src="img/users_icon_small.png" alt=""></a></li>
          <li class="dashboard_nav_listitem"><a href="index.php?site=blog"><img src="img/blog_icon_small.png" alt=""></a></li>
          <li class="dashboard_nav_listitem"><a href="index.php?site=music"><img src="img/music_icon_small.png" alt=""></a></li>
          <li class="dashboard_nav_listitem"><a href="index.php?site=shop"><img src="img/shop_icon_small.png" alt=""></a></li>
          <li class="dashboard_nav_listitem"><a href="index.php?site=orders"><img src="img/orders_icon_small.png" alt=""></a></li>
        </ul>
      </nav>
    </aside>
    <header class="dashboard_header">
    <div class="time_info"><div class="clock_wrap"><div id="clock">00:00:00</div></div></div>
      <div class="breadcrumbs">
        <h1><?php echo $site ?></h1>
      </div>
      
      <div class="flash_wrap">
        <?php if(isset($_SESSION["flash"])): ?>
          <h3>Last Action</h3>
          <p><?php echo $_SESSION["flash"]; ?></p>
        <?php endif; ?>
      </div>
    </header>
    <main class="main_content">
    
    <?php if(isset($_SESSION["popup"]) && $_SESSION["popup"] !== ""): ?>
      <div id="popup1" class="popup_wrap">
        <div class="popup">
          <h2>Alert </h2>
          <img class="popup_icon" src="<?php echo $_SESSION['popup_icon']; ?>" alt="">
          <div class="content">
             <p> <?php echo $_SESSION["flash"]; ?></p>
          </div>
        </div>
      </div>
    <?php $_SESSION["popup"] = "" ?>
    <?php endif; ?>
    

