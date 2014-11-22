<?php get_header(); ?>

<div id="pagecontent"><!--open #content -->
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div id="post"><!--open #post --> 
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
				<p>Listed in: <?php the_category(", "); ?></p>
				<?php if(get_the_tags()): ?>
					<p><?php the_tags(); ?></p>
				<?php endif; ?>
			<small>Posted by <?php the_author();?>
				<time datetime="<?php the_time('Y-m-d'); ?>'><?php the_time('M j'); ?></time>
				 
				 <h3>Comments</h3>
				<?php comments_number("0 comments", "1 comment", "% comments"); ?>
			</small>
			<?php the_author_posts_link(); ?>
			<?php comments_template(); ?>
			<ul class="post_nav">
				<?php previous_post_link("<li>%link</li>", "&lt; Previous"); ?>
				<?php next_post_link("<li>%link</li>", "Next &gt;"); ?>
			</ul>
		</div>
			
			<?php endwhile; else: ?>
				<p>Sorry we couldn't find your post</p>
			<?php endif; ?>
</div><!--close #pagecontent -->
<?php get_sidebar("widget"); ?>
<?php get_footer(); ?>