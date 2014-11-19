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
	"container" => "ul",
	"container_class" => "",
	"container_id" => "main_menu",
	"depth" => 1
);

//sidebars
register_sidebar(array(
	"name" => "Right Side Bar",
	"id" => "right_aside",
	"description" => "Right Side Bar",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div><!-- end widget -->",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
	
	/*register_sidebar(array(
	"name" => "Footer Side Bar",
	"id" => "right_aside",
	"description" => "Footer Side Bar",
	"before_widget" => "<div class='widget'>",
	"after_widget" => "</div><!-- end widget -->",
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"*/
));
