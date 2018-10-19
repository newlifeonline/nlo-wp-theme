jQuery(document).ready(function(){ 
jQuery('#myAffix').affix({
  offset: {
	 top: jQuery('.post-banner').offset().top,
    bottom: function () {
      return (this.bottom = jQuery('.colophon').outerHeight(true))
    }
  }
})
});