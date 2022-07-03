<?php
/**
 * Show the appropriate content for the Video post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 * @since Twenty Twenty-One 1.0
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	ESGI_Custom_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	ESGI_Custom_print_first_instance_of_block( 'core/embed', $content );
} else {
	ESGI_Custom_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
