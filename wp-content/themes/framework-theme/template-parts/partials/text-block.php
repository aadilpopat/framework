<div class='text-block grid grid-cols-12 gap-0.625 mb-10'>
	<div class='col-span-6 col-start-2 pr-0.375'>
		<p class='text-heading-sub text-green-100 mb-1.25'><?= get_field(
  	'subheading'
  ) ?></p>
		<h2 class='text-heading-m text-green-100 mb-1.25'><?= get_field(
  	'heading'
  ) ?></h2>

		<p class='text-copy text-green-100 mb-2.5'><?= get_field('text') ?></p>

		<?php $link = get_field('cta_button'); ?>
		
		<a href='<?= $link['url'] ?>' target='<?= $link['target']
	? $link['target']
	: '_self' ?>' class='button-1'><?= $link['title'] ?></a>
	</div>

</div>