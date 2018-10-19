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

	<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
      <div class="jumbo">
       <div class="container-fluid">
        <div class="row">
         <div class="col-md-12 col-xs-12 pad-fix">
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
              </div>
            </div>
         </div>
      </div>
</div>
 <div class="container-fluid">
 <div class="row pb-profile-img"> 
        <div class="col-md-12 col-xs-12">
    
			<?php get_template_part( 'content-secondary-grid', 'none' ); ?>
                       
	    <?php else : ?>

			<?php get_template_part( 'recent-content', 'none' ); ?>

		<?php endif; ?> 
         
        </div> 
        </div>
    <div class="row pad-top-bottom">
           <div style="text-align:center;"><h2>Current Conversations</h2></div>
             	<div class="content col-xs-12"> 

           	<?php query_posts( 'posts_per_page=1&offset=1' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-content', get_post_format() );
				?>
           
			<?php endwhile; ?>
    

               	<?php query_posts( 'posts_per_page=1&offset=2' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-content', get_post_format() );
				?>
           
			<?php endwhile; ?>
            
            <?php query_posts( 'posts_per_page=1&offset=3' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
           

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'recent-content', get_post_format() );
				?>
           
			<?php endwhile; ?>
       
            </div>
            </div>           
        </div>  
        </main><!-- #main -->
        </div><!-- #primary -->
<?php get_footer(); ?>
      
