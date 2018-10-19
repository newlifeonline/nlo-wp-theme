<?php
/**
 * @package nlo
 */
?>
<div class="col-md-4 col-xs-12">
<div class="blk-bg overflow-fix box-shw2">
<div class="post-image "> <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></div>
<div class="pos-fix">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'recent-article' ); ?>>
    <div class="post-pad">
    <header class="entry-header"> 
         
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php nlo_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<footer class="entry-footer">
		<?php nlo_entry_footer(); ?>
	</footer>
    </div><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
</div>
</div>