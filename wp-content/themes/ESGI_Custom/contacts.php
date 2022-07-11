<?php
/* 
 * Template Name: Contacts
 */


get_header();

?>

<section id="contact">
	<div class="title-container">
		<h2 class="title">Contacts.</h2>
		<p class="sub-text">A desire for a big big party or a very select congress? Contact us.</p>
	</div>

	<div class="list-items">
		<ul>
			<li><strong>Location</strong></li>
			<li><p>242 Rue du Faubourg Saint-Antoine</p></li>
			<li><p>75020 Paris FRANCE</p></li>
		</ul>
		<ul>
			<li><strong>Manager</strong></li>
			<li><a href="tel:+33 1 53 31 25 23">+33 1 53 31 25 23</a></li>
			<li><a href="mailto:info@company.com">info@company.com</a></li>
		</ul>
		<ul>
			<li><strong>Location</strong></li>
			<li><a href="tel:+33 1 53 31 25 25">+33 1 53 31 25 25</a></li>
			<li><a href="mailto:ceo@company.com">ceo@company.com</a></li>
		</ul>
	</div>

	<picture>
		<img src="" alt="">
	</picture>

	<div class="formulaire">
		<h2>Write us here</h2>
		<p>Go! Don't be shy.</p>

		<form>
			<div class="form-group">
				<label for="name">Subject</label>
				<input type="text" class="form-control" id="name" placeholder="Subject">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Email">

				<label for="number">Number</label>
				<input type="tel" class="form-control" id="number" placeholder="Phone no.">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</section>

<?php
get_footer();

function show_post($path) {
	$post = get_page_by_path($path);
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
}