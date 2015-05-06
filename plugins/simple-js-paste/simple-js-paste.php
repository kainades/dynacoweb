<?php
/*
Plugin Name: Simple JS Paste
Plugin URI: http://www.videomaster.co/simple-js-paste
Version: 1
Description: Add JavaScript To Your Site Hastle Free.
Author: Matthew McDonald (support@videomaster.co)
Author URI: http://www.videomaster.co
*/

//$simplejspate_settings = get_option('simplejspate_settings');

include_once('includes/admin-post-page.php');
include_once('includes/admin-settings.php');
include_once('includes/footer.php');
include_once('update-checker.php');
function simplejspaste_sanitize($snippet, $decode=NULL) {
//	echo htmlspecialchars($snippet);
	
		if(function_exists('htmlspecialchars_decode') &&
		function_exists('htmlspecialchars')) {
			if($decode) {
			$snippet = htmlspecialchars_decode($snippet);
			} else {
				$snippet = htmlspecialchars($snippet);
			}
		}
	
	return $snippet;
}
