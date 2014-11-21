<?php get_header(); ?>
<div id="pagecontent"><!--open #content -->
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		 
	<!--<article class="halfcol left">-->	
		
		<div id="post"><!--open #post -->
						 
				<div class="post">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					 
						<time datetime="<?php the_time('Y-m-d'); ?>">
							<?php the_time('M j, Y'); ?>
						</time>
						by <?php the_author();?>,
						<?php comments_number("0 comments", "1 comment", "% comments"); ?>
					 
					<div class="post-list">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</div>
		</div>
	<hr>
	<?php endwhile; else: ?>
		<p>Sorry no posts to display</p>
	<?php endif; ?>

</div><!--close #pagecontent -->
<?php get_sidebar("widget"); ?>
<?php get_footer(); ?>

