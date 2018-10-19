<?php
/**
 * Template Name: Video Viewer
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nlo
 */

get_header(); ?>

	 <div class="container-fluid pad-fix">
    	<div class="row">
 <?php

if (has_post_thumbnail()) { //if a thumbnail has been set 

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
  <?php
}//end if

?> 

</div>
      <div class="row">
       <div id="primary" class="content-area col-xs-12" style="margin-top:0px !important;">
		<main id="main" class="site-main" role="main">
        
        
			<?php while ( have_posts() ) : the_post(); ?>
                
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
        </div>
        </div>
      </div><!-- #primary -->
	</div>

<?php get_footer(); ?>
<style>
body {background: #000 !important; }
.page #primary {background: #000 !important; }
</style>
