<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

<div id="main-content1">
			<div id="welcome">

					<h3>Welcome to Way Back Inn</h3>
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
					<li id="button-one"><a href="http://ec2-54-69-107-154.us-west-2.compute.amazonaws.com/get-involved/volunteer-application/"><p>VOLUNTEER</p></a></li>
					<li id="button-two"><a href="http://ec2-54-69-107-154.us-west-2.compute.amazonaws.com/about-us/our-history-how-we-help/"><p>OUR MISSION</p></a></li>
					<li id="button-three"><a href="https://www.justgive.org/basket?acton=donate&ein=91-1548418"><p>DONATE</p></a></li>
				</ul>
			</div>

			<div id="button-container2">
				<ul id="button-list2">
					<li id="button-four"><a href="http://ec2-54-69-107-154.us-west-2.compute.amazonaws.com/contact-us/"><p>CONTACT US</p></a></li>
					<li id="button-five"><a href="#"><p>SIGN UP</p></a></li>
					<li id="button-six">
						<div id="social-networking">
							<div id="facebook"><a href="https://www.facebook.com/pages/Way-Back-Inn/50723934261"><img src="<?php bloginfo('template_url'); ?>/images/logo-facebook.jpg" alt="facebook"></a></div>
							<div id="twitter"><a href="https://www.facebook.com/pages/Way-Back-Inn/50723934261"><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo2.jpg" alt="twitter"></a></div>
						</div>
					</li>

				</ul>
			</div>
			<div id="testimonials">
				<span>Testimonials</span>
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail();
					}
				?>

              <img src="<?php bloginfo('template_url'); ?>/images/testimonials.png" alt="testimonials">
                    <?php
						$testimonials = new WP_Query( array( "category_name" => "testimonials" ));
						$testimonials->the_post();
					?>
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>">Read More  &raquo;</a>
					<?php wp_reset_postdata(); ?>
			</div>
			<div id="ads">
					<div id="amazon-smile">
						<a href="https://smile.amazon.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/amazon-smile.jpg" class="ads" alt="amazon-smile"></a>
					</div>

					<div id="volunteer-match">
						<a href="https://www.volunteermatch.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/volunteer-match.jpg" class="ads" alt="volunteer-match"></a>
					</div>

					<div id="shop-with-scrip">
						<a href="https://www.shopwithscrip.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/shop-with-scrip.jpg" class="ads" alt="shop with scrip"></a>
					</div>
			</div>
<?php get_footer(); ?>
