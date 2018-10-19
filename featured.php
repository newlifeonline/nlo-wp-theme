<?php
/**
 * @package nlo
 */
?>


<div class="featured-article">
<article id="post-<?php the_ID(); ?>" <?php post_class( '' );?> >
  <div class="col-xs-12 col-sm-6 scrollme">
    <header class="entry-header animateme" data-when="enter" data-from="0.7" data-to="0" data-opacity="0" data-translatex="-50" data-easing="easeinout"> 
    
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
    </div>
    <div class="col-xs-12 col-sm-6">

	<div class="entry-content">
            
    
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf( '<a class="join-convo-button" role="button" href="%s" rel="bookmark">Engage', esc_url( get_permalink() ), '</a>' ));
		?>    

	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
</div>
