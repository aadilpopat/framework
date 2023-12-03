<div class='footer container mt-160 '>
	<div class='grid grid-cols-12 mb-120 border-t border-white-300 pt-60'>
		<div class='col-span-2'>
			<p class='text-logo'>Cottage Retreat</p>
		</div>
		<div class='col-span-4 col-start-9'>
		<?php wp_nav_menu([
			'theme_location' => 'footer-menu-top',
			'menu' => 'Footer Menu - Top',
			'depth' => 0,
			'container' => 'div',
			'container_class' => '',
			'container_id' => '',
			'fallback_cb' => false,
			'menu_class' => 'flex gap-[2.94rem] justify-end',
			'add_li_class' => 'button-2',
		]); ?>
	</div>
	</div>

	<div class='grid grid-cols-12'>
		<div class='col-span-3'>
			<p class='text-green-100 text-copy-s mb-4'>Company name © 2023. All rights Reserved.</p>

			<div class='flex items-center'>
				<span class='text-green-100 text-copy-s'>Design by &nbsp;</span>
				<?= file_get_contents(get_template_directory(). '/assets/images/framework-logo.svg') ?>
			</div>
		</div>
		<div class='col-span-2 col-start-11'>
			<?php wp_nav_menu([
				'theme_location' => 'footer-menu-bottom',
				'menu' => 'Footer Menu - Bottom',
				'depth' => 0,
				'container' => 'div',
				'container_class' => '',
				'container_id' => '',
				'fallback_cb' => false,
				'menu_class' => 'flex flex-col gap-1',
				'add_li_class' => 'button-2 text-right',
			]); ?>
		</div>
	</div>
</div>