<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo("name") . wp_title('|'); ?></title>	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
	<div id="wrapper">
		<div id="header">
			<h1><?php echo get_option('home'); ?><span><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.png" alt="logo"></span> </h1>
			<h1><?php bloginfo('name'); ?></a> </h1>
		</div> 
		<nav>
			<?php wp_nav_menu(array('menu' => 'Primary Menu')); ?>
		</nav>
	 
	<div id="main-content">