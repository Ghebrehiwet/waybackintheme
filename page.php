<?php get_header(); ?>
<div id="main-content">
	
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		
		<div id="pagecontent">
		
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<img src="" alt="">
			<p><?php the_content();?><p>
		<?php endwhile; else: ?>
			<p>Sorry, we couldn't find your page!</p>
		<?php endif; ?>
	</div>
</div>

<?php get_sidebar("right"); ?>
<?php get_footer(); ?>