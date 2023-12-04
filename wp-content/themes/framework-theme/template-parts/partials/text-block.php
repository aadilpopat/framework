<div class='text-block container mb-80 md:grid md:grid-cols-12 md:gap-20 md:mb-160'>
	<div class='col-span-6 col-start-3'>
		<p class='text-heading-sub text-green-100 mb-20'>
			<?= get_field('text_block-subheading' ) ?>
		</p>
		<h2 class='text-heading-medium text-green-100 mb-20'>
			<?= get_field( 'text_block-heading' ) ?>
		</h2>

		<p class='text-copy text-green-100 mb-40'>
			<?= get_field('text_block-text') ?>
		</p>

		<?php $link = get_field('text_block-cta_button'); ?>
			<a href='<?= $link['url'] ?>'
			   target='<?= $link['target'] ? $link['target'] : '_self' ?>'
			   class='button-1'>
				<?= $link['title'] ?>
			</a>
	</div>

</div>