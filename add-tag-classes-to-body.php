<?php

/*
  Plugin Name: Add tag classes to body
  Plugin URI: http://www.marc.tv/blog/marctv-wordpress-plugins/
  Description: Adds the post tags to the body tag as classes.
  Version: 1.2
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
  GitHub Plugin URI: mtoensing/wp-add-tag-classes-to-body
 */

function add_tags( $classes = '' ) {

	if(has_post_thumbnail()){
		$classes[] = 'has-post-thumbnail';
	}

	$tags = get_the_tags();
	if ( $tags ) {
		foreach ( $tags as $tag ) {
			$classes[] = 'ptag-' . $tag->slug;
		}
	}

	return $classes;
}

add_filter( 'body_class', 'add_tags' );

?>
