<?php 

register_nav_menus();

register_nav_menu("main_menu", "Main Menu");

//wp_nav_menu($mainMenu);

add_theme_support("post-thumbnails");

set_post_thumbnail_size(200,200, true);

add_post_type_support("page", "excerpt");

//menu
$mainMenu = array(
	"theme_location" => "main_menu",
	"container" => "p",
	"container_class" => "top-level-nav",
	"container_id" => "main_menu",
	"depth" => 1
);

 


function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'right',
			'name' => __( 'Right Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the secondary sidebar.*/
	register_sidebar(
		array(
			'id' => 'widget',
			'name' => __( 'Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	); 
	
	/* Register the footer widget area. */
	register_sidebar(
		array(
			'id' => 'footer',
			'name' => __( 'Footer Widget Area' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	
	/* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'my_register_sidebars' );


