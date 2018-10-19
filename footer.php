<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nlo
 */
?>

	<footer id="colophon" class="row site-footer pad-top" role="contentinfo">
         <div class="col-xs-12"><span class="site-logo-footer"><img src="/wp-content/themes/nlo/images/Footer-Logo.png" title="New Life Logo" alt="New Life Logo"></span></div>
         <div class="col-xs-12"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("FP Twitter") ) : ?>	<?php endif;?></div>
        <div class="col-xs-12">
        <div class="site-info">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?><?php endif;?></h4></p>
         <h4 class="copyright">All content Copyright New Life Christian Ministries Inc. <?php echo date('Y'); ?>
        </div>
		</div>
	</footer><!-- #colophon -->
    </div>
   </div>
  </div>
 </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
