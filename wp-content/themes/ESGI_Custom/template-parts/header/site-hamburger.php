<?php
/**
 * Displays header site hamburger
 *
 * @package WordPress
 * @subpackage ESGI_Custom
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>


<nav class="hamburger-menu">

	<img width="117" height="36" src="http://localhost:8000/wp-content/uploads/2022/07/cropped-Logo.png" id="menu-logo" class="custom-logo" alt="logo">
	
	<div class="button_container" id="toggle">
		<span class="top"></span>
		<span class="bottom"></span>
	</div>
	
	<div class="overlay" id="overlay">
		<input type="text" name="search" id="search" placeholder="Or try Search">

		<nav class="overlay-menu">
			<ul>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'menu_class'      => 'menu-wrapper',
					'container_class' => 'primary-menu-container',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'fallback_cb'     => false,
				));
			?>
			</ul>
		</nav>
	</div>
</nav>

<script>
	document.getElementById('toggle').addEventListener('click', function() {
		// Toggle class "open" on the navbar
		document.getElementById('toggle').classList.toggle('active');
		document.getElementById('overlay').classList.toggle('open');

		// Change the logo source when the menu is open
		document.getElementById('overlay').classList.contains('open') ? document.getElementById('menu-logo').src = 'http://localhost:8000/wp-content/uploads/2022/07/Logo-light.png' : document.getElementById('menu-logo').src = 'http://localhost:8000/wp-content/uploads/2022/07/cropped-Logo.png';

	});
</script>


