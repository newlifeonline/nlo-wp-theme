jQuery(function() {
  jQuery('.clear-menu').click(function() {
    toggleNav();
  });
});

function toggleNav() {
if (jQuery('#site-wrapper').hasClass('show-nav')) {

  jQuery('#site-wrapper').removeClass('show-nav');
} 

//$('#site-wrapper').toggleClass('show-nav');
}
