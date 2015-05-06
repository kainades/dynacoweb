<?php

/*********************************
* post page options
**********************************/


/**
 * Adds a meta box to the post editing screen
 */

function simplejspaste_meta_callback( $post ) {
	$simplejspaste_meta = get_post_meta( $post->ID );
	?>
    
    <label for="simplejspaste_footer"><strong>JavaScript Snippet</strong>
<textarea name="simplejspaste_footer" id="simplejspaste_footer" class="widefat" rows="8" placeholder="JavaScript for this <?php

// if(is_post()) { echo "post"; } else { echo "page"; }

 ?>"><?php echo simplejspaste_sanitize($simplejspaste_meta['simplejspaste_footer'][0],1); ?></textarea>
</label> <?php
}



function simplejspaste_custom_meta() {
    add_meta_box( 'simplejspaste_meta', __( 'Simple JS Paste', 'simplejspaste-meta-box' ), 'simplejspaste_meta_callback', 'post' );
}


add_action( 'add_meta_boxes', 'simplejspaste_custom_meta');


/**
 * Saves the custom meta input
 */
function simplejspaste_meta_save($post_id) {
	if(isset($_POST['simplejspaste_footer']) == true) {
			$simplejspaste_footer = $_POST['simplejspaste_footer'];
		} else {
			$simplejspaste_footer = "";
		}
update_post_meta( $post_id, 'simplejspaste_footer', simplejspaste_sanitize( $simplejspaste_footer));
}
add_action( 'save_post', 'simplejspaste_meta_save');

