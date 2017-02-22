<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
// set up

// includes
include (get_template_directory() . '/include/front/enqueue.php');
// action filter hooks
add_action('wp_enqueue_scripts','nu_enqueue');
// shortcode

register_sidebar(array(
	'name' => __('Right Hand Sidebar'),
	'id' => 'right-sidebar',
	'description' => __('Widgets in this area will be shown on the right-hand side.'),
	'before_title'=> '<h2>',
	'after_title' => '</h2>',
	'before_widget'=> '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div><!-- widget end -->'));
?>