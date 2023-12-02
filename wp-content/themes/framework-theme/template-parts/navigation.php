<nav class='container flex justify-between items-baseline'>

	<p class='text-logo py-1.5'>Cottage Retreat</p>

	<?php wp_nav_menu([
 	'theme_location' => 'main-menu',
 	'menu' => 'Main Menu',
 	'depth' => 0,
 	'container' => 'div',
 	'container_class' => '',
 	'container_id' => '',
 	'fallback_cb' => false,
 	'menu_class' => 'flex gap-[2.94rem]',
 	'add_li_class' => 'button-2',
 ]); ?>
</nav>