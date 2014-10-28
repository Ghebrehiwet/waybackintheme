<?php get_header(); ?>

<div class="main_content left">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content();?>
	<?php endwhile; else: ?>
		<p>Sorry, we couldn't find your page!</p>
	<?php endif; ?>
</div>

<?php get_sidebar("right"); ?>
<?php get_footer(); ?>