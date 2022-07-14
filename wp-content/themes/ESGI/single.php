<?php get_header(); ?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<article class="single-post">
					<header>
						<h1 class="post-title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php 
							$author_id = $post->post_author;
							$author_name = get_the_author_meta('nickname', $author_id);
							?>
							<img src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>"> 
							<?= $author_name ?>
							<time><?= date_i18n('j F Y', get_post_timestamp($post)) ?></time> 
						</div>
					</header>
					<div class="post-image">
					<?= get_the_post_thumbnail($post->ID) ?>
					</div>
					<div class="post-content">
					<?php the_content() ?>
					</div>
					<footer>
						<?php include('template-parts/social-block.php'); ?>
					</footer>
				</article>
			</div>
			<?php
			if(get_theme_mod('has_sidebar', 0)){ ?>
				<div class="col-md-2 offset-md-1">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
		</div>
		

	</div>
</main>

<?php get_footer(); ?>