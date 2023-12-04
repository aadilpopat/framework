<div class='footer container mt-60 mb-40 md:mt-160'>
	<div class='border-t border-white-300 pt-40 mb-15 md:pt-60 md:grid md:grid-cols-12 md:mb-120'>
		<div class='col-span-2 mb-50'>
			<a href='/' class='text-site-logo'>Cottage Retreat</a>
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
			'menu_class' => 'flex flex-col gap-15 md:flex-row md:gap-[2.94rem] md:justify-end',
			'add_li_class' => 'footer-link',
		]); ?>
	</div>
	</div>

	<div class='flex flex-col-reverse gap-[91px] md:grid md:grid-cols-12'>
		<div class='col-span-3'>
			<p class='text-green-100 text-copy-s mb-10 md:mb-4'>Company name © 2023. All rights Reserved.</p>

			<div class='flex items-center'>
				<span class='text-green-100 text-copy-s'>Design by &nbsp;</span>
				<img src='<?= get_template_directory_uri(). '/assets/images/framework-logo.svg' ?>'
					 alt=''
					 class='framework-logo'>
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
				'menu_class' => 'flex flex-col gap-15 md:gap-1',
				'add_li_class' => 'footer-link md:text-right',
			]); ?>
		</div>
	</div>
</div>