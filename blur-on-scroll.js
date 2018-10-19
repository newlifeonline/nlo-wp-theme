var pxlCount = 0
jQuery(window).on('scroll', function () {
    pxlCount = jQuery(document).scrollTop()/70;
  	jQuery('p.pxlCount > span').text(pxlCount);
    jQuery(".pb-profile-img").css({"-webkit-filter": "blur("+pxlCount+"px)","-moz-filter": "blur("+pxlCount+"px)","filter": "blur("+pxlCount+"px)" })     
});