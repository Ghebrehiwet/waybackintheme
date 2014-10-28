<?php register_nav_menus(); ?>

<?php register_nav_menu("main_menu", "Main Menu"); ?>

<?php wp_nav_menu($mainMenu); ?>

<?php add_theme_support("post-thumbnails"); ?>

<?php set_post_thumbnail_size(200,200, true); ?>

<?php add_post_type_support("page", "excerpt"); ?>

<?php the_post_thumbnail(); ?>




<?php
	//menu
	$mainMenu = array(
		"theme_location" => "main_menu",
		"container" => "nav",
		"container_class" => "",
		"container_id" => "main_menu",
		"depth" => 1
	);
?>

<?php
	//sidebars
	register_sidebar(array(
		"name" => "Right Side Bar",
		"id" => "right_aside",
		"description" => "Right Side Bar",
		"before_widget" => "<div class='widget'>",
		"after_widget" => "</div><!-- end widget -->",
		"before_title" => "<h3 class='widget_title'>",
		"after_title" => "</h3>"
	));
?>