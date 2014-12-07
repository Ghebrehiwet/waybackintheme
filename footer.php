
<footer>


		 <div><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="logo" style="width: 120px; height: 106px">
		<span>Way Back Inn</span>
	</div>

	<div>
		<ul>
			<li><a href="">About Us</a></li>
			<li><a href="">Get Involved</a></li>
			<li><a href="">Publications</a></li>
			<li><a href="">Resources</a></li>
			<li><a href="">Members</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
	</div>

	<div>
		<ul>
			<li>Program Manager: Tonya Ward</li>
			<li>Services: (206)-682-7382</li>
			<li>Information: (206)217-6623</li>
			<li>149 Park Ave North</li>
			<li>Suite B</li>

		</ul>

</div>

</footer>





			<div id="footer2">
				<p id="copyright">Copyright&copy; All Rights Reserved</p>
				<p id="way-back-inn">Way Back Inn 2014 - <?php echo date('Y'); ?></p>
				<p id="privacy">Privacy Policy</p>


			</div>
	<?php wp_footer(); ?>
		</div><!-- close #main-content -->
	</div><!-- close #wrapper-->
	<script>
	var $ = jQuery;
	$(".mobile-button").click(function() {
		$(this).closest(".menu-container").find(".menu").slideToggle();
	});
	</script>
</body>
</html>
