<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>


<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( '404 Error.', 'twentytwenty-custom' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'The page you were looking for couldn\'t be found. Maybe try a search?', 'twentytwenty-custom' ); ?></p>
		
		<form role="search" method="get" class="search-form" action="http://localhost:8000/">
			<input type="search" id="search-form-1" class="search-field" value="" name="s" placeholder="Type something to search…">
		</form>

	</div><!-- .page-content -->
</section>
<style>
	.hamburger-menu {
		background: transparent !important;
	}

	.button_container span {
		background: #fff !important;
	}
</style>
<script>
	document.getElementById('menu-logo').src = 'http://localhost:8000/wp-content/uploads/2022/07/Logo-light.png';

</script>
<?php
get_footer();
