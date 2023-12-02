<?php get_header(); ?>
		<?php
  if (is_front_page()): ?>
  <div class='container'>
	  <?php get_template_part('template-parts/partials/text-block'); ?>
	  <?php get_template_part('template-parts/partials/image-grid'); ?>
  </div>
  <?php endif;
  get_footer();


?>
