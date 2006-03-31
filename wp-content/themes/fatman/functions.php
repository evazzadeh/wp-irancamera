<?php

add_theme_support( 'menus' );


// Add Your Menu Locations
function register_my_menus()
{
	register_nav_menus(
	[

		'menu_footer'  => 'منوی فوتر',
	]
	);
}
add_action( 'init', 'register_my_menus' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function theme_widgets_init() {
	register_sidebar( [
		'name'          => 'widget-about',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-contact',
		'before_widget' => '<div class="widget ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	register_sidebar( [
		'name'          => 'widget-map',
		'before_widget' => '<div class="widget ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

}

add_action( 'widgets_init', 'theme_widgets_init' );

add_theme_support( 'post-thumbnails');

?>