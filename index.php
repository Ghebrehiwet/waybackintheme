<?php get_header(); ?>


<div id="pagecontent"> 

	<p id="bread-crumb">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}?>
	</p>

	<?php if(have_posts()): while(have_posts()): the_post(); ?> 
			<div id="post"><!--open #post -->			
				<div class="post">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					 <p><small>
						<time datetime="<?php the_time('Y-m-d'); ?>">
							<?php the_time('M j, Y'); ?>
						</time>
						by <?php the_author();?>,
						<?php comments_number("0 comments", "1 comment", "% comments"); ?>
					 </small></p>
					<div class="post-list">
						<div class="image-left"><?php the_post_thumbnail(); ?></div>
						<div class="text-right"><?php the_content(); ?></div>
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

