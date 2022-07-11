<?php
/* 
 * Template Name: About
 */


get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );
	

	show_post('our-team');  
	get_footer();
endwhile; // End of the loop.

function show_post($path) {
	$post = get_page_by_path($path);
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
}