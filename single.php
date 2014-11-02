<?php get_header(); ?>

<div class="main_content left">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_search_form("right");?>
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<p>Listed in: <?php the_category(", "); ?></p>
		<?php if(get_the_tags()): ?>
			<p><?php the_tags(); ?></p>
		<?php endif; ?>
	<p><small>Posted
		<time datetime="<?php the_time('Y-m-d'); ?>'>
			<?php the_time('M j'); ?>
		</time>
		by <?php the_author();?>,
		<?php comments_number("0 comments", "1 comment", "% comments"); ?>
	</small></p>
	<?php the_author_posts_link(); ?>
	<?php comments_template(); ?>
	<ul class="post_nav">
		<?php previous_post_link("<li>%link</li>", "&lt; Previous"); ?>
		<?php next_post_link("<li>%link</li>", "Next &gt;"); ?>
	</ul>
	
	<div class="clear"></div>
	<?php endwhile; else: ?>
		<p>Sorry we couldn't find your post</p>
	<?php endif; ?>
</div>

<?php get_sidebar("right"); ?>
<?php get_footer(); ?>