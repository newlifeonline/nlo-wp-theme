jQuery(function() {
  jQuery('.toggle-nav').click(function() {
    toggleNav();
  });
});

function toggleNav() {
if (jQuery('.glphyicon-align-justify').hasClass('show-nav')) {

  jQuery('.glphyicon-align-justify').removeClass('show-nav');
} else {

  jQuery('.glphyicon-align-justify').addClass('show-nav');
}

//$('#site-wrapper').toggleClass('show-nav');
}
