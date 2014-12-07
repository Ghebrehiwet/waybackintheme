<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>

	<meta charset="<?php bloginfo('charset'); ?>">


	<title><?php bloginfo("name") . wp_title('|'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<meta name="robots" content="noindex, nofollow" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/media-queries.css" type=text/css" />


	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
	<div id="wrapper">
		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="logo" style="width: 120px; height: 106px"><?php bloginfo('name'); ?></a></h1>

		</div>

			<div class="menu-container">
				<a class="mobile-button">Menu</a>

				<?php wp_nav_menu(array('menu' => 'Main Menu')); ?>
			</div>


	<div id="main-content">
