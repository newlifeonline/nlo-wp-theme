	jQuery(document).ready(function() {
        var jQueryheader = jQuery(".site-header"),
            jQueryclone = jQueryheader.before(jQueryheader.clone().addClass("clone"));
        
        jQuery(window).on("scroll", function() {
            var fromTop = jQuery(window).scrollTop();
            jQuery("body").toggleClass("down", (fromTop > 400));
        });
    });