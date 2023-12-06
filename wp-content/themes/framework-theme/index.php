<!doctype html>
<html lang="en-GB">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<title>
			<?php wp_title('');
			if (wp_title('', false)) {
				echo ' :';
			} bloginfo('name');
			?>
		</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet"
		      media="print" onload="this.media='all'">

		<noscript>
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
		</noscript>

		<?php
		wp_enqueue_style('app-css', get_template_directory_uri() . '/style.css');
        wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', '', '', true );

		wp_head();
		?>
	</head>
	<body class='bg-white-100'>
		<?php get_header();
		  if (is_front_page()):
			  get_template_part('template-parts/partials/text-block');
			  get_template_part('template-parts/partials/image-grid');
			  get_template_part('template-parts/partials/accordion');
		  endif;
		  get_footer(); ?>
	</body>
</html>
