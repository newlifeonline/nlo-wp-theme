<?php
/**
 * @package nlo
 */
?>
<div class="row wht overflow-fix box-shw">
<div class="col-md-6 col-md-offset-3 col-xs-12 separate">
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

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content (sprintf( 
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nlo' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
        

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'nlo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nlo_entry_footer(); ?>
	</footer>
    </div><!-- .entry-footer -->
</article><!-- #post-## -->
</div>
</div>