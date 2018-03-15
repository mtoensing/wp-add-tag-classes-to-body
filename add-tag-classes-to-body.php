<?php

/*
  Plugin Name: Add tag classes to body
  Plugin URI: http://www.marc.tv/blog/marctv-wordpress-plugins/
  Description: Adds the post tags to the body tag as classes.
  Version: 1.0
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
 */

function add_tags( $classes = '' ) {

	$tags = get_the_tags();
	foreach ( $tags as $tag ) {
		$classes[] = 'ptag-' . $tag->slug;


	}

	return $classes;
}

add_filter( 'body_class', 'add_tags' );

?>
