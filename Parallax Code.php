<?php

if (has_post_thumbnail()) { //if a thumbnail has been set 

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
<div class="parallax-window org" data-parallax="scroll" data-image-src="<?php echo $imgURL ?>">
  <?php
}//end if

?> 