<div class='accordion container grid grid-cols-12'>

	<div class='col-span-5 col-start-2'>
	<h3 class='text-heading-l text-green-100 mb-20'>Heading text here...</h3>

	<p class='text-copy text-green-100 mb-[3.12rem]'>Lorem ipsum dolor sit amet consectetur. Malesuada sit consequat
		tristique consectetur sit tristique amet in. Etiam egestas elit vestibulum commodo.</p>
	</div>




	<div class='col-span-10 col-start-2 '>
		<?php for($x = 0; $x <= 5; $x++): ?>
			<details class="mb-30 group">
				<summary class="grid grid-cols-10 w-full place-items-baseline cursor-pointer border-b border-b-white-300">
							<span class='col-span-1 text-copy inline-block'><?= sprintf('%02d', $x+1); ?></span>
							<h5 class='col-span-8 text-heading-xs text-green-100 mb-8'>
								Lorem ipsum dolor sit amet consectetur adipisicing?
							</h5>
						<div class="col-span-1 relative w-21 h-21 flex items-center mr-16" style='grid-column: none;'>
							<span class='absolute right-0 opacity-100 group-open:opacity-0'>
								<?= file_get_contents(get_template_directory(). '/assets/images/plus-icon.svg') ?>
							</span>
							<span class='absolute right-0 opacity-0 group-open:opacity-100 flex items-center'>
								<?= file_get_contents(get_template_directory(). '/assets/images/minus-icon.svg')?>
							</span>
						</div>
				</summary>
				<div class='grid grid-cols-10'>
					<div class='col-span-8 col-start-2'>
						<p class='mt-30 text-copy text-green-100'>
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
							molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
							voluptate dicta quo officiis explicabo consequuntur distinctio corporis
							earum similique!
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