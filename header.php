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
	<header id="main_header">
			<h1><a href="index.php"> <!--<span><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/fakelogo.jpg" id="logo"  
			alt="My Logo"> <!-- for screen readers --></a><?php bloginfo('name'); ?></a></span> <!-- for SEO -->
			</h1>		
		<nav>
			<?php wp_nav_menu(array('menu' => 'Primary Menu')); ?>
		</nav>
	</header>
	<div id="content">