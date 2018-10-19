<?php

if (has_post_thumbnail()) { //if a thumbnail has been set 

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
      <?php
}//end if
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nlo
 */

get_header(); ?>
 <div class="container-fluid pad-fix">
   <div class="row scrollme">	
  	<div class="col-xs-12">
    <div class="jumbo animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-easing="easeinout">
     <div class="banner">
     <video autoplay muted loop poster="/wp-content/themes/nlo/video/NL-Web-Int.gif">
    	 <source src="/wp-content/themes/nlo/video/NL-Web-Int.webm" type="video/webm">
	   	 <source src="/wp-content/themes/nlo/video/NL-Web-Int.mp4" type="video/mp4">

</video>
          <div class="row">
        <div class="col-xs-12 col-md-12  zcorrect top-offset-front ">   
     
    <header class="entry-header animateme" data-when="exit" data-from="0" data-to="1" data-translatey="-200" data-easing="easeinout"> 
    
        <a href="#current-post"><?php the_title( sprintf( '<h1 class="banner-awesome">', esc_url( get_permalink($post = 77) ) ), '</h1>' ); ?></a>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
        <a class="join-convo-button" role="button" href="/find-a-service">Find A Service</a>
        </header>
        </div>
        </div>
        </div>
	 </div> 
    </div> 
  </div>
</div>
<div class="container-fluid">
		<main>
			<div class="row mission-statement-section scrollme" id="our-mission">
              <div class="col-xs-12 animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatey="50" data-easing="easeinout">
              <h2 class="missionTitle">You Belong With Us</h2>
              <p>At New life we're just ordinary people serving an extraordinary God with a clear mission to share, grow, and live, the new life of Jesus Christ with the world - one person at a time. God wants you to be part of his family and so do we. You belong with us! </p>
              <a class="join-convo-button" role="button" href="/discover">Learn Why</a>
              </div>
              </div>
            <div class="row scrollme">
              <div class="col-xs-12 col-md-6 pad-fix animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatex="-75" data-easing="easeinout">
              <a href="/new" id="informationLoad">
              <div class="menuBlock-a">
              <h6>Our Services</h6>
              <h7>INFORMATION</h7>
              </div>
              </a>
              </div>
              <div class="col-xs-12 col-md-6 pad-fix animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatex="75" data-easing="easeinout">
              <a href="/watch" id="messageLoad">
              <div class="menuBlock-b">
              <h6>Watch A Message</h6>
              <h7>ENGAGE THE BIBLE</h7>
              </div>
              </a>
              </div>
              </div>
              <div class="row scrollme"> 
              <div class="col-xs-12 col-md-6 pad-fix animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatex="-75" data-easing="easeinout">
              <a href="/one-to-one" id="informationLoad">
              <div class="menuBlock-b">
              <h6>One-To-One</h6>
              <h7>TIME TO GROW</h7>
              </div>
              </a>
              </div>
              <div class="col-xs-12 col-md-6 pad-fix animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatex="75" data-easing="easeinout">
              <a href="https://newlifexn.infellowship.com/groupsearch/index" id="messageLoad">
              <div class="menuBlock-a">
              <h6>Next Step</h6>
              <h7>FIND A GROUP</h7>
              </div>
              </a>
              </div>
              </div>
             </main>
    <div class="container-fluid wht">      
		<div class="row wht pad-fix category-section">
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <span class="icon"><img src="/wp-content/themes/nlo/images/AP-Icon.png" title="Invite Someone" alt="Invite Someone"></span>
        <h2 class="cat-title"><a href="mailto:">Invite Someone</a></h2>
        <p>Send someone you know a personal message and invite them to church.</p>
		 <a class="recent-block-engage-btn hover" href="mailto:">Share</a>
        </div> 
        </div> 
        </div>      
        
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <span class="icon"><img src="/wp-content/themes/nlo/images/Grow-Icon.png" title="Grow" alt="Grow"></span>
        <h2 class="cat-title"><a href="/nlu">New Life University</a></h2>
        <p>An intentional track for transformation.</p>
        <a class="recent-block-engage-btn hover" href="/nlu">Grow</a>
        
        </div>
        </div>
        </div>
        
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <span class="icon"><img src="/wp-content/themes/nlo/images/Live-Icon.png" title="Live" alt="Live"></span>
        <h2 class="cat-title"><a href="https://newlifexn.infellowship.com/groupsearch/index">Small Groups</a></h2>
        <p>Join a community that changes lives!</p>
        <a class="recent-block-engage-btn hover" href="https://newlifexn.infellowship.com/groupsearch/index">Live</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  <div class="container-fluid pad-fix">
 <div class="row">
 <div class="col-xs-12">
<?php get_footer(); ?>

      