<?php get_header(); ?>


<div id="pagecontent">  
	

	<?php if (have_posts()) : ?>
			<div id="post"><!--open #post -->			
				<div class="post">
				<p id="bread-crumb">
								<?php if(function_exists('bcn_display'))
								{
									bcn_display();
								}?>
							</p>
					<?php while (have_posts()) : the_post(); ?>
						 
						
							
							
							<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
								 	
								
								 
									 <p>Posted on <small>
									<time datetime="<?php the_time('Y-m-d'); ?>">
										<?php the_time('M j, Y'); ?>
									</time> in	<p class="cat"><?php the_category(', ') ?></p>
									by <?php the_author();?> with
									<?php comments_number("0 comments", "1 comment", "% comments"); ?>
								 </small></p>
									<?php the_post_thumbnail(); ?>
									<?php the_content(); ?>
								 
									<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
								 
							
						 
					</hr>
				
				</div>
				 
	
			<?php endwhile; ?> 
				 <nav class="post-nav">
						<p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
						<p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
				 </nav>
					<?php comments_template(); ?>				
	 
				
		<?php endif; ?>
	
	</div><!--close #pagecontent -->
<?php get_sidebar("widget"); ?>

<?php get_footer(); ?>

