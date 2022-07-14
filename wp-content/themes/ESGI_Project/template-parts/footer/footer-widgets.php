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
if ( is_active_sidebar( 'first-footer-widget-area' ) ||
	is_active_sidebar( 'second-footer-widget-area' ) ) :
	?>

    <div class="site-info">
        <div class="site-name">
			<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
				<?php if ( is_front_page() && ! is_paged() ) : ?>
                    <img class="footer-logo" src="<?php if (get_theme_mod( 'setting_footer' )) : echo get_theme_mod( 'setting_footer'); else: echo get_theme_file_uri('assets/images/ESGI.png'); endif;?>"/>
				<?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			<?php endif; ?>
        </div>

		<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			}
		?>
        <div class="powered-by">

            <ul>
                <li class="title-footer-side"><span>Manager</span></li>
		        <?php
			        if ( is_active_sidebar( 'first-footer-widget-area' ) ) {
				        ?>
                        <div class="widget-column footer-widget-1">
					        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                        </div>
				        <?php
			        }
		        ?>
            </ul>

            <ul>
                <li class="title-footer-side"><span>CEO</span></li>
	            <?php
		            if ( is_active_sidebar( 'second-footer-widget-area' ) ) {
			            ?>
                        <div class="widget-column footer-widget-2">
				            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                        </div>
			            <?php
		            }
	            ?>
            </ul>
        </div>
    </div>

<?php endif; ?>
