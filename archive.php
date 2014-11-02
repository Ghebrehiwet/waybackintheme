<?php
$title = "";

if(is_day():
	$title = "You are viewing the " . get_the_date() . " daily archives";
elseif(is_month()):
	$title = "You are viewing the " . get_the_date("F Y") . " monthly archives";
elseif(is_year()):
	$title = "You are viewing the " . get_the_date("Y") . " yearly archives";
elseif(is_author()):
	$title = "You are viewing the author archives";
else:
	$title = "You are viewing the " . single_cat_title("", false) . " Archives";
endif;
?>
<?php get_header();?>
<h1><?php echo $title; ?></h1>