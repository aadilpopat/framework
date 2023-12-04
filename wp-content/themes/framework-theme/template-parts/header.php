<section class="header my-80 md:mt-100 md:mb-160">
	<div class='container md:grid md:grid-cols-12 md:gap-20'>
		<h1 class='text-heading-large mb-30 md:col-span-8 md:mb-40'>
			<?= get_field( 'page_title') ?>
		</h1>
	</div>
	<div class='extend-right pl-20'>
		<?php $image = get_field('image'); ?>
		<img src='<?= $image['url'] ?>'
			 alt='<?= $image['alt'] ?>'
			 class='object-cover object-left w-full h-[314px] md:h-[600px]'>
	</div>
</section>
