<?php if ($the_query->have_posts()) { ?>
<div class="post-list-wrapper">
	<ul class="post-list">
		<?php while($the_query->have_posts()) { 
			$the_query->the_post();
			$post = get_post();
			?>
			<li>
				<a href="<?= get_permalink($post->ID) ?>" alt="<?= $post->post_title ?>">
					<article>
						<h1><?= $post->post_title ?></h1>
						<time><?= date_i18n('j F Y', get_post_timestamp($post)) ?></time>
					</article>
				</a>
			</li>
		<?php } ?>
	</ul>
	<div class="post-list-pagination">
	
	<?= paginate_links([
		// Note : lors de la réalisation du TP, nous n'avions pas défini une base d'url pour les liens de navigation
		// Or, lors d'un call ajax, l'url utilisée comme base est celle de la page qui reçoit le call, à savoir admin-ajax.php
		// Donc pour que la pagination se réfère toujours à la page blog, on définit le paramètre base comme suit :
		'base' => get_permalink(get_option('page_for_posts')) . '%_%', 
		// La page 'page_for_posts' est définie dans l'admin WP, dans les réglages de lecture
		// '%_%' sera remplacé par le format de pagination (par défaut ?page=%#%)
		// Dans le cas d'un module post-list utilisé dans plusieurs pages, il faudra lui passer un paramètre permettant de construire l'url de base
		'total' => $the_query->max_num_pages,
		'current' => $paged
	]); ?>
	</div>
</div>
<?php } ?>