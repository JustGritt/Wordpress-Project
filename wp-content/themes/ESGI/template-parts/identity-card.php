<article class="identity-card">
	<figure><?= get_custom_logo() ?></figure>
	<h1><?= get_bloginfo('name') ?></h1>
	<h2><?= get_bloginfo('description') ?></h2>
	<footer>
		<ul>
			<li><a href="#"><?= getIcon('twitter'); ?></a></li>
			<li><a href="#"><?= getIcon('facebook'); ?></a></li>
			<li><a href="#"><?= getIcon('google'); ?></a></li>
			<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
		</ul>
	</footer>
</article>