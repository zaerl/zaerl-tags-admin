<?php
/*
Plugin Name: zaerl Tags Administration
Plugin URI: http://www.zaerl.com
Description: Allows new tags
Author: zaerl
Author URI: http://www.zaerl.com/
Version: 0.1
*/

// Add "img" to the allowed tags list. By default, only allow attributes 'src', 'title', 'alt' in 'img' tags. 
function za_allow_tags($tags)
{
	$tags['img'] = array('src' => array(), 'title' => array(), 'alt' => array());
	$tags['del'] = array();
	$tags['ins'] = array();
	$tags['sub'] = array();
	$tags['sup'] = array();

	return $tags;
}
add_filter('bb_allowed_tags', 'za_allow_tags');

?>
