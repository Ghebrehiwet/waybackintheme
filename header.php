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
			<h1><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="logo" style="width: 120px; height: 106px"></a></h1>
			<h1><?php bloginfo('name'); ?></a> </h1>
		</div> 
		
		<nav>
			 
				<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
			 
		</nav>
	 
	<div id="main-content">