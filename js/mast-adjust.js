jQuery(document).ready(function(){       
            var scroll_pos = 0;
            jQuery(document).scroll(function() { 
                scroll_pos = jQuery(this).scrollTop();
                if(scroll_pos > 100) {
                    jQuery("#navTop").css('background-color', '#2D2D2D');
                } else {
				      jQuery("#navTop").css('background-color', 'inherit');
               }
            });
        });