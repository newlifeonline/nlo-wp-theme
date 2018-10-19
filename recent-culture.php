<?php
/**
 * @package nlo
 */
?>
<div class="col-xs-12 col-sm-4">
<div class="recent-culture">
<span class="categoryTop-label-recent" style="color: #333;">Culture</span>
</div>
<div class="recent-article-block">
	<div id="recent-block-text">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'recent-article' ); ?>>
    <header class="entry-header"> 
         
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-meta">
			<?php nlo_posted_on(); ?>
		</div>
        <!-- .entry-meta -->
	<?php the_excerpt(); ?>
    
	<footer class="entry-footer">
    	<div class="author">
		<div class="avatar-holder"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></div>
		<?php the_author_posts_link(); ?> 
        </div>
<a class="recent-block-engage-btn hover" href="<?php the_permalink(); ?>">Engage</a>
	</footer>
    </article><!-- #post-## -->
</div>
</div>
</div>