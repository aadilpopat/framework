<nav class='navigation relative md:mt-15'>
	<div class='container flex justify-between items-center py-32 md:py-16'>
		<a href='/' class='text-site-logo text-green-100 relative z-20'>Cottage Retreat</a>

		<button class='mobile-menu-button'>
			<img src='<?= get_template_directory_uri(). '/assets/images/hamburger-menu-icon.svg' ?>'
				 alt=''
				 class='relative z-20 md:hidden'>
		</button>

		<div class='mobile-menu container hidden flex-col justify-between h-screen w-screen absolute inset-0 z-10 pt-[8.188rem] bg-green-100 md:mx-0 md:px-0 md:block md:relative md:bg-transparent md:flex-row md:h-auto md:w-auto md:pt-0'>
			<?php
				wp_nav_menu([
					'theme_location' => 'main-menu',
					'menu' => 'Main Menu',
					'depth' => 0,
					'container' => 'div',
					'container_class' => '',
					'container_id' => '',
					'fallback_cb' => false,
					'menu_class' => 'flex flex-col gap-30 md:justify-around md:gap-50 md:flex-row',
					'add_li_class' => 'button-2 text-white-100 md:text-green-100',
				]);
			?>

			<?php wp_nav_menu([
				'theme_location' => 'footer-menu-bottom',
				'menu' => 'Footer Menu - Bottom',
				'depth' => 0,
				'container' => 'div',
				'container_class' => 'mb-40 md:hidden',
				'container_id' => '',
				'fallback_cb' => false,
				'menu_class' => 'flex flex-col gap-10',
				'add_li_class' => 'text-copy text-white-100',
			]); ?>
		</div>
	</div>
</nav>