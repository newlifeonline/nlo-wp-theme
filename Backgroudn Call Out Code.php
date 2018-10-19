<?php

if (has_post_thumbnail()) { //if a thumbnail has been set 

	$imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
	$featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
	$imgURL = $featuredImage[0]; //get the url of the image out of the array

	?>
	<style type="text/css">
	@media only screen 
	and (min-device-width: 320px) 
   and (max-device-width: 768px) {
		.featured {
        background:url('<?php echo $imgURL ?>') center center;
		 background-repeat: no-repeat;
		 background-size: cover; 
		}
	}
	@media only screen 
	and (min-device-width: 768px) 
   {
    .featured {
        background:url('<?php echo $imgURL ?>') center center fixed;
		 background-repeat: no-repeat;
		 background-size: cover; 
		}


  </style>

  <?php
}//end if

?> 