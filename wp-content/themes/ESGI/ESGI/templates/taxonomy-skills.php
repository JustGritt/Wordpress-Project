<?php get_header(); ?>

<?php 
$term = get_queried_object();
// Sélectionner tous les projects ayant ce terme

$args = [
	'post_type' => 'project',
  'numberposts' => -1,
  'tax_query' => [
    [
      'taxonomy' => 'skills',
      'field' => 'id',
      'terms' => $term->term_id
    ]
  ]
];
$projects = get_posts($args);

?>

<main id="site-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<article class="single-post">
					<header>
						<h1 class="post-title"><?= $term->name ?></h1>
						<div class="term-description">
							<?= $term->description ?>
						</div>
					</header>
					<?php if(!empty($projects)){ ?>
						<ul>
							<?php foreach ($projects as $project) { ?>
								<li><a href="<?= get_permalink($project) ?>"><?= $project->post_title ?></a></li>
							<?php } ?>
						</ul>
					<?php } ?>
					
					
					<footer>
						<?php //include('template-parts/social-block.php'); ?>
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