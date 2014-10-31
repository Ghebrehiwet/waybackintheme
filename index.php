<?php get_header(); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php get_search_form();?>
	<?php get_sidebar("right"); ?>
	<article class="halfcol left">	
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_post_thumbnail(); ?>
		<p><?php the_content(); ?></p>
	</article>
	<p><small>Posted
		<time datetime="<?php the_time('Y-m-d'); ?>'>
			<?php the_time('M j'); ?>
		</time>
		by <?php the_author();?>,
		<?php comments_number("0 comments", "1 comment", "% comments"); ?>
	</small></p>
	
	<?php endwhile; else: ?>
		<p>Sorry no posts to display</p>
	<?php endif; ?>
<?php get_footer(); ?>

