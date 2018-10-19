<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nlo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="/wp-content/themes/nlo/bs/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="/wp-content/themes/nlo/images/faviconNLO.png" />
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="/wp-content/themes/nlo/bs/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/hover-to-click.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/parallax-scrollme.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/toggle-menu.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/back-to-top.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/scroll-to.js"></script>
<script type="text/javascript" src="/wp-content/themes/nlo/js/sticky-header.js"></script>
</head>

<body <?php body_class(); ?> ontouchstart="">
<?php include_once("analyticstracking.php") ?>
<div id="page" class="hfeed site">
<?php include_once("were_live.php") ?>
<a href="#" class="back-to-top" style="display: none;"> 
<span class="glyphicon glyphicon-chevron-up"></span>
</a>
<header id="navTop" class="site-header" role="banner">
    <div class="container-fluid">
		<div class="site-branding">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
           <span class="site-logo"><img src="/wp-content/themes/nlo/images/NL-Online-Logo.png" title="New Life" alt="New Life"></span>
			<h1 class="site-title">
           <span class="site-title-bold">New Life</span>
           </h1>
          </a>
		</div>
        <nav id="site-menu-768">
  <li role="presentation">
        <ul role="menu">
     <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </ul>
  </li>
</nav>
  <div id="nav-toggle-btn" >
  <a class="toggle-nav glyphicon glyphicon-align-justify" href="#" role="button"></a>
  </div>
		
        </div> 
	</header><!-- #masthead -->
    <div id="site-wrapper">
     <div id="site-canvas">
     <nav id="site-menu">
  <li role="presentation">
        <ul role="menu">
     <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </ul>
    <ul><a class="toggle-nav glyphicon glyphicon-remove" href="#" role="button"></a></ul>
  </li>
            

</nav><!-- End Navigation --->
	
     
     <div id="content" class="site-content">
