<div class='text-block grid grid-cols-12 gap-10 mb-10'>
	<div class='col-span-6 col-start-2 pr-0.375'>
		<p class='text-heading-sub text-green-100 mb-20'><?= get_field(
  	'subheading'
  ) ?></p>
		<h2 class='text-heading-m text-green-100 mb-20'><?= get_field(
  	'heading'
  ) ?></h2>

		<p class='text-copy text-green-100 mb-40'><?= get_field('text') ?></p>

		<?php $link = get_field('cta_button'); ?>
		
		<a href='<?= $link['url'] ?>' target='<?= $link['target']
	? $link['target']
	: '_self' ?>' class='button-1'><?= $link['title'] ?></a>
	</div>

</div>