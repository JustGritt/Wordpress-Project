<?php
/**
 * Template Name: Services
 * The template for displaying the services page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 * @since Twenty Twenty-One 1.0
 */

get_header();

get_template_part( 'template-parts/content/content-services' );
?>

<section id="services">
	<h2 class="title">Corp. Parties</h2>
	<p class="sub-text">Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. </p>
	
	<picture>
		<img src="wp-content/uploads/2022/07/service.png" alt="">
	</picture>
</section>

<?php
get_footer();

function show_post($path) {
	$post = get_page_by_path($path);
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
}
?>