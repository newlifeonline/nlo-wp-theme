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
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $imgURL ?>">
   <div class="row">	
  	<div class="col-xs-12">
    <div class="jumbo">
          <span class="categoryTop-label labelPos-adjust"><?php the_category(', ') ?></span>
          <div class="row">
        <div class="col-xs-12 col-md-12  zcorrect push">   
     
    <header class="entry-header"> 
    
		<a href="#current-post"><?php the_title( sprintf( '<h1 class="banner-awesome">', esc_url( get_permalink() ) ), '</h1>' ); ?></a>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
        <a class="join-convo-button" role="button" href="#current-post">Read More</a>
        </header>
        </div>
        </div>
	 </div> 
    </div> 
  </div>
</div>
              <div class="row current-convo-section">   
              <div class="row">
              <div class="col-xs-12"> 
              		<a name="current-post" id="current-post"></a> 
              		<h2 id="convo-flag">Current Conversation</h2>
              </div>
              </div>
              <div class="row">

              <div class="col-xs-12">
               <div id="primary" class="content-area">
   				 <main id="main" class="site-main" role="main">        
		<?php if ( have_posts() ) : ?>
        
			<?php /* Start the Loop */ ?>
             <?php query_posts( 'posts_per_page=1' ); ?>
           <?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'featured', get_post_format() );
				?>
           
			<?php endwhile; ?> 
              </main><!-- #main -->
              </div><!-- #primary -->
              </div>
              </div>
              </div>
              <div class="row">
              <div class="col-xs-12 pad-fix">
              <h2 id="recent-flag">Recent</h2>
              </div>
              </div>
              <div class="row">
             	<div class="content col-xs-12">	
			
			<?php query_posts( 'posts_per_page=1&offset=1' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-church', get_post_format() );
				?>
           
			<?php endwhile; ?>
    

               	<?php query_posts( 'posts_per_page=1&offset=2' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-culture', get_post_format() );
				?>
           
			<?php endwhile; ?>
            
            <?php query_posts( 'posts_per_page=1&offset=3' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-creativity', get_post_format() );
				?>
               
           
			<?php endwhile; ?>
            
        <?php endif; ?> 

       
            </div>
            </div>
            <div class="row wht pad-bottom topic-section">
              <div class="row">
              <div class="col-xs-12">
              <h2 id="topic-flag">Topics</h2>
              </div>
              </div>
      <div class="row category-section">
      <div class="container-fluid">
            
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <a href="#"><h2 class="cat-title">Church</h2></a>
        <p>This is some test text. All about church life!</p>
		 <a class="recent-block-engage-btn hover" href="<?php the_permalink(); ?>">Engage</a>
        </div> 
        </div> 
        </div>      
        
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <a href="#"><h2 class="cat-title">Culture</h2></a>
        <p>This is some test text. All about cultural life!</p>
        <a class="recent-block-engage-btn hover" href="<?php the_permalink(); ?>">Engage</a>
        </div>
        </div>
        </div>
        
        <div class="col-xs-12 col-sm-4">
        <div id="box">
        <div class="cat-desc">
        <a href="#"><h2 class="cat-title">Creativity</h2></a>
        <p>This is some test text. All about creative life!</p>
        <a class="recent-block-engage-btn hover" href="<?php the_permalink(); ?>">Engage</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
<?php get_footer(); ?>
      
