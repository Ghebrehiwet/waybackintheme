	<footer>
		<div>
                <a href="">
                  <span><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="logo" style="width: 120px; height: 106px"></span>
                  <span><?php bloginfo('name'); ?></span></a>
                </div>
                <div>
                  <?php get_sidebar("footer"); ?> 
                </div>
                <div>
                	<?php get_sidebar("managerinfo"); ?> 
                </div>
		
			</footer>
			<div id="footer2">
				<p id="copyright">Copyright&copy; All Rights Reserved</p>
				<p id="way-back-inn">Way Back Inn 2014 - <?php echo date('Y'); ?></p>
				<p id="privacy">Privacy Policy</p>
				<p id="login"><a href="<?php echo wp_login_url(); ?>" title="Login">Login</a></p>

			</div>
	<?php wp_footer(); ?>
		</div><!-- close #main-content -->
	</div><!-- close #wrapper-->
</body>
</html>