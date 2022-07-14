<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	is_active_sidebar( 'sidebar-3' ) ) :
	?>
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>

				<?php dynamic_sidebar( 'sidebar-2' ); ?>

			<?php
		}
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>

				<?php dynamic_sidebar( 'sidebar-3' ); ?>

		<?php } ?>


<?php endif; ?>
