<?php
function simplejspaste_footer() {
	$displayJS['footer'] = '';
	$displayJS['sitewide'] = get_option('simplejspaste_sitewide');
	
	if($displayJS['sitewide'] != '') {
		echo simplejspaste_sanitize($displayJS['sitewide'],1);
	}
	
	if(is_home() && get_option('simplejspaste_home')) {
			echo simplejspaste_sanitize(get_option('simplejspaste_home'),1);
	}
	else if(is_singular()) {
		$snippet = get_post_meta( get_the_ID(), 'simplejspaste_footer', true);
		if($snippet != '') { echo simplejspaste_sanitize($snippet,1); }	
	}
}



add_action('wp_footer', 'simplejspaste_footer');

