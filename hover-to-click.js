jQuery(document).ready(
function() { jQuery('.hover').bind('touchstart touchend', function(e) { e.preventDefault(); jQuery(this).toggleClass('hover_effect'); });});