<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 * @since Twenty Twenty-One 1.0
 */

get_header();


if(is_page(27)) { # Partners page
	get_template_part( 'template-parts/content/content-partners' );
} 
else if(is_page(8)) { # Blog page
	show_post('our-partners');  
}

else if(is_page(7)) { # Contacts page
	print("zefhyzeiuh");
	die();
}

else {
	get_template_part( 'template-parts/content/content-hero' );
	get_template_part( 'template-parts/content/content-services' );
	show_post('our-partners');  
}


get_footer();

function show_post($path) {
	$post = get_page_by_path($path);
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
}