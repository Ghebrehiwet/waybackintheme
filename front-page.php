<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

<div id="main-content">
			<div id="welcome">


					<p>Welcome to Way Back Inn Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500.
					</p>

			</div>
			<div id="flexslider">
				<?php 
					echo do_shortcode("[metaslider id=113]"); 
				?>
			</div>
			<div id="button-container1">
				<ul id="button-list1">
					<li id="button-one"><a href="#"><p>VOLUNTEER</p></a></li>
					<li id="button-two"><a href="#"><p>OUR MISSION</p></a></li>
					<li id="button-three"><a href="#"><p>DONATE</p></a></li>
				</ul>
			</div>

			<div id="button-container2">
				<ul id="button-list2">
					<li id="button-four"><a href="#"><p>NEED HELP?</p></a></li>
					<li id="button-five"><a href="#"><p>SIGN UP</p></a></li>
					<li id="button-six">
						<div id="social-networking">
							<div id="find-us"><p><strong>Find Us:</strong></p></div>
							<div id="facebook"><img src="<?php bloginfo('template_url'); ?>/images/logo-facebook.jpg" alt="facebook"></a></div>
							<div id="twitter"><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo2.jpg" alt="twitter"></a></div>
						</div>
					</li>

				</ul>
			</div>
			<div id="testimonials">
				<span>Testimonials</span>
              <img src="<?php bloginfo('template_url'); ?>/images/testimonials.png" alt="testimonials">
                    <p> 
					
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
		 
	 
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
					
					
					
					</p>
                    <a href="">Read More  >></a> 
			</div>
			<div id="ads">
				Ads
			</div> 
<?php get_footer(); ?>

