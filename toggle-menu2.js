(function() {
  $('.glyphicon-align-justify').click(function() {
    toggleNav();
  });
});

function toggleNav() {
if ($('#site-wrapper').hasClass('show-nav')) {

  $('#site-wrapper').removeClass('show-nav');
} else {

  $('#site-wrapper').addClass('show-nav');
}

//$('#site-wrapper').toggleClass('show-nav');
}
