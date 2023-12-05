<div class='accordion container md:grid md:grid-cols-12'>

	<div class='col-span-5 col-start-2'>
	<h3 class='text-heading-large text-green-100 mb-20'><?= get_field('heading')?></h3>

	<p class='text-copy text-green-100 mb-[3.12rem]'><?= get_field('text')?></p>
	</div>

	<div class='col-span-10 col-start-2'>
		<?php for($x = 0; $x <= 5; $x++): ?>
			<details class="mb-30 group">
				<summary class="flex flex-nowrap justify-between w-full place-items-baseline cursor-pointer border-b border-b-white-300 md:grid md:grid-cols-10">
							<span class='text-copy inline-block mr-30 md:mr-0 md:col-span-1'><?= sprintf('%02d', $x+1); ?></span>
							<h5 class='text-heading-xsmall text-green-100 mb-26 md:col-span-8 md:mb-8'>
								<?= get_field('section_heading')?>
							</h5>
						<div class="relative w-21 h-21 flex items-center mt-8 ml-37 md:mt-0 md:ml-0 md:mr-16 md:col-span-1 md:grid-col-none">
							<span class='absolute right-0 opacity-100 group-open:opacity-0'>
								<?= file_get_contents(get_template_directory(). '/assets/images/plus-icon.svg') ?>
							</span>
							<span class='absolute right-0 opacity-0 group-open:opacity-100 flex items-center'>
								<?= file_get_contents(get_template_directory(). '/assets/images/minus-icon.svg')?>
							</span>
						</div>
				</summary>
				<div class='md:grid md:grid-cols-10'>
					<div class='md:col-span-8 md:col-start-2'>
						<p class='mt-30 text-copy text-green-100'>
							<?= get_field('section_text')?>
						</p>
					</div>
				</div>
			</details>
		<?php endfor; ?>
		<?php $link = get_field('cta_button'); ?>

		<a href='<?= $link['url'] ?>' target='<?= $link['target'] ? $link['target'] : '_self' ?>' class='button-1 mt-10'>
			<?= $link['title'] ?>
		</a>
	</div>
</div>