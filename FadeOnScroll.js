jQuery(window).scroll(function(i){
    var scrollVar = jQuery(window).scrollTop();
    jQuery('.jumbo').css({'top': 1*scrollVar });
    jQuery('.jumbo').css({'opacity':( 500-scrollVar )/2});
});
