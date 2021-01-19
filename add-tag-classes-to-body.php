<?php

/*
  Plugin Name: Add post tag slugs as CSS body classes
  Plugin URI: https://github.com/mtoensing/wp-add-tag-classes-to-body
  Description: Adds the post tags to the body tag as classes.
  Version: 1.3
  Author: Marc Tönsing
  Author URI: https://marc.tv
  License: GPL2
  GitHub Plugin URI: mtoensing/wp-add-tag-classes-to-body
 */

function add_tags( $classes = '' ) {

	if( is_single() ) {

		if(has_post_thumbnail()){
			$classes[] = 'has-post-thumbnail';
		}

		$tags = get_the_tags();

		if ( $tags ) {
			foreach ( $tags as $tag ) {
				$classes[] = 'ptag-' . $tag->slug;
			}
		}
	}

	return $classes;
}

add_filter( 'body_class', 'add_tags' );

?>
