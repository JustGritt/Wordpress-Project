<?php
/**
 * Show the appropriate content for the Image post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 * @since Twenty Twenty-One 1.0
 */

// If there is no featured-image, print the first image block found.
if (
	! ESGI_Custom_can_show_post_thumbnail() &&
	has_block( 'core/image', get_the_content() )
) {

	ESGI_Custom_print_first_instance_of_block( 'core/image', get_the_content() );
}

the_excerpt();
