<section id="hero" class="header header-hero bg-primary pt-[6.25rem] mb-160">
	<div class='container'>
			<h1 class='text-heading-l max-w-[51.25rem] mb-40'><?= get_field(
   	'page_title'
   ) ?></h1>
		</div>
		<div
			class='extend-right'
		>
		<?php $image = get_field('image'); ?>
		<img src='<?= $image['url'] ?>' alt='<?= $image[
	'alt'
] ?>' class='image-full-screen'>
	</div>
</section>
