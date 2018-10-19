/*
 * Showup.js jQuery Plugin
 * http://github.com/jonschlinkert/showup
 *
 * Copyright (c) 2013 Jon Schlinkert, contributors
 * Licensed under the MIT License (MIT).
 */

jQuery().showUp('#navTop', {
upClass: 'navTop-show',
downClass: 'navTop-hide'
});

(function( $ ) {
  $.fn.showUp = function(ele, options) {
    options = options || {};

    var target         = $(ele);
    var down           = options.down        || '#navTop-hide';
    var up             = options.up          || '#navTop-show';
    var btnHideShow    = options.btnHideShow || '.btn-hide-show';
    var hideOffset     = options.offset      || 110;
    var previousScroll = 0;

    $(window).scroll(function () {
      // var currentScroll = $(this).scrollTop();
      if ($(this).scrollTop() > hideOffset) {
        if ($(this).scrollTop() > previousScroll) {
          // Action on scroll down
          target.removeClass(up).addClass(down);
        } else {
          // Action on scroll up
          target.removeClass(down).addClass(up);
        }
      }
      previousScroll = $(this).scrollTop();
    });

    // Toggle visibility of target on click
    $(btnHideShow).click(function () {
      if (target.hasClass(down)) {
        target.removeClass(down).addClass(up);
      } else {
        target.removeClass(up).addClass(down);
      }
    });
  };
})( jQuery );



