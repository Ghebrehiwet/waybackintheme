<?php get_header(); ?>
<div id="pagecontent"><!--open #content -->
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<h2><?php the_title(); ?></h2>
	<!-- <?php get_search_form();?> -->
	<!--<?php get_sidebar("right"); ?> -->
	<!--<article class="halfcol left">-->	
		
		<div id="post"><!--open #post -->
						 
				<div class="post">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<!--</article>-->
					<!--<p><small>Posted -->
						<time datetime="<?php the_time('Y-m-d'); ?>'>
							<?php the_time('M j'); ?>
						</time>
						by <?php the_author();?>,
						<?php comments_number("0 comments", "1 comment", "% comments"); ?>
					<!--</small></p>-->
					<div class="post-list">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
				</div>
		</div>
	
	<?php endwhile; else: ?>
		<p>Sorry no posts to display</p>
	<?php endif; ?>
<?php get_sidebar("widget"); ?>
</div><!--close #pagecontent -->
<hr>
<?php get_footer(); ?>

