<?php
/**
 * The template for displaying all single posts.
 *
 * @package nlo
 */

get_header(); ?>

	<div class="container-fluid">
    <div class="content-area">
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

<div class="post-banner" style="background-image: url('<?php echo $imgURL ?>');">
<div class="col-xs-12 col-md-8 col-md-offset-1">
<div class="categoryTop-label labelPos-adjust .hover">
<?php the_category(', ') ?>
</div>
</div>
</div>
</div>

        <div class="row">
        <main id="main" class="site-main" role="main">
        <div id="primary" class="col-xs-12 col-md-8 col-md-offset-1 ">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php nlo_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
           </div><!-- #primary -->
		</main><!-- #main -->

<div class="col-md-3 col-xs-12">
<?php get_sidebar(); ?>
   </div>
 </div>
 </div>
 </div>
 <div class="container-fluid pad-fix">
 <div class="row">
 <div class="col-xs-12">
<?php get_footer(); ?>
</div>	
</div>
</div>
