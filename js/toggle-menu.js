jQuery(function() {
  jQuery('.toggle-nav').click(function() {
    toggleNav();
  });
});

function toggleNav() {
if (jQuery('#site-wrapper').hasClass('show-nav')) {

  jQuery('#site-wrapper').removeClass('show-nav');
} else {

  jQuery('#site-wrapper').addClass('show-nav');
}

//$('#site-wrapper').toggleClass('show-nav');
}
