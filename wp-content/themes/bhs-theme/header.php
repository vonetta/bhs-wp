<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scss/style.scss">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header class="header" role="banner">
      <a href="/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="BHS Logo" class="logo pixelated" width="121" height="121" >
      </a>
      <div class="top-header">
        <?php
          $args = array(
          'menu'    => 'top-menu',
          'menu_class' => 'top-nav',
           'container' => 'false'
           );
           wp_nav_menu( $args );
        ?>
        <!-- END .top-nav -->
        <a href="#" class="facebook-btn"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icon_facebook.png" alt="Facebook Icon"></a>
        <div class="search-container">
          <form method="get" id="searchform" class="form-search" action="#">
            <label for="s" class="assistive-text hidden">
              Search
            </label>
            <div class="input-append">
              <input id="s" class="span2 search-query" type="search" name="s" placeholder="Search...">
              <button class="icon" name="submit" id="searchsubmit" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
        <a href="#" class="donate-btn"><img src="<?php bloginfo('template_directory'); ?>/assets/img/button_donate.png" alt="Donate"></a>
      </div>
      <!-- END .top-header -->
    </header>
    <!-- END header -->
    <nav class="nav" role="navigation">
      <ul>
        <li> <a href="#">Home</a></li>
        <li> <a href="#">About</a></li>
        <li> <a href="#">Service</a></li>
        <li> <a href="#">What is addiction?</a></li>
        <li> <a href="#">Make an appointment</a></li>
        <li> <a href="#">Contact</a></li>
      </ul>
    </nav>
