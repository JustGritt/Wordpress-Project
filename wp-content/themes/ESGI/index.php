<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<?php include('template-parts/identity-card.php'); ?>
				<?php 
				if(!is_front_page()){
					echo '<div id="post-list-wrapper">';
					
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					$args = [
						'post_type' => 'post',
						'posts_per_page' => get_option('posts_per_page'),
						'post_status' => 'publish',
						'paged' => $paged,
					];
					$the_query = new WP_Query($args);
					
					include('template-parts/post-list.php');

					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>