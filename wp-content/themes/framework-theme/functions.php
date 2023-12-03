<?php
//Remove Gutenberg Block Library CSS from loading on the frontend
add_action(
	'wp_enqueue_scripts',
	function () {
		if (!is_admin()) {
			wp_dequeue_style('wp-block-library');
			wp_dequeue_style('wp-block-library-theme');
			wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
		}
	},
	100
);

// Disable the emoji's
add_action('init', function () {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	// Filter function used to remove the tinymce emoji plugin.
	add_filter('tiny_mce_plugins', function (array $plugins) {
		return array_diff($plugins, ['wpemoji']);
	});
	// Remove emoji CDN hostname from DNS prefetching hints.
	add_filter(
		'wp_resource_hints',
		function ($urls, $relation_type) {
			if ('dns-prefetch' == $relation_type) {
				/** This filter is documented in wp-includes/formatting.php */
				$emoji_svg_url = apply_filters(
					'emoji_svg_url',
					'https://s.w.org/images/core/emoji/2/svg/'
				);

				$urls = array_diff($urls, [$emoji_svg_url]);
			}

			return $urls;
		},
		10,
		2
	);
});

// Disable Comments
add_action('admin_init', function () {
	// Redirect any user trying to access comments page
	global $pagenow;

	if ($pagenow === 'edit-comments.php') {
		wp_safe_redirect(admin_url());
		exit();
	}

	// Remove comments metabox from dashboard
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

	// Disable support for comments and trackbacks in post types
	foreach (get_post_types() as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments links from admin bar
add_action('wp_before_admin_bar_render', function () {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
});

// Register Menus
add_action('init', function () {
	register_nav_menus([
		// Using array to specify more menus if needed
		'main-menu' => __('Main Menu'), // Main Navigation
		'footer-menu-top' => __('Footer Menu - Top'), // Main Footer Navigation
		'footer-menu-bottom' => __('Footer Menu - Bottom') // Main Footer Navigation
	]);
});

//Add Additional Class Names on li
function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
