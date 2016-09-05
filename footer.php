			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<section class="top">
					<div class="item"><br></div>
					<div class="item">
						<h3>connect with us</h3>
						<p>Physical Address: <br>
								268, Kent Avenue, Randburg, Johannesburg<br>
								Postal Address:<br>
								Private Bag x10088, Randburg 2125<br>
								Phone: +27-11-285-1700<br>
								Toll Free: 086 110 1888<br>
								Web: www.worldvision.co.za<br>
								Email: info@worldvision.co.za</p>
					</div>
					<div class="item">
						<h3>latest news</h3>
						<?php 
					    $args = array( 'category_name' => 'latest-news', 'posts_per_page' => 2 );
					    $loop = new WP_Query( $args );
					    while ( $loop->have_posts() ) : $loop->the_post(); 
					  ?>
						<a class="inv" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><br>
						<?php endwhile; ?>
					</div>
					<div class="item">
						<h3>site map</h3>
						<a class="inv" href="<?php echo get_home_url(); ?>/faqs">FAQ’s</a>
						<a class="inv" href="<?php echo get_home_url(); ?>/press-pack">Press Pack</a>
						<a class="inv" href="<?php echo get_home_url(); ?>/publications">Publications</a>
						<a class="inv" href="<?php echo get_home_url(); ?>/legalities">Legalities</a>
					</div>
					<div class="item">
						<h3>newsletter</h3>
						<p>Subscribe to our Newsletter</p>
							<?php echo do_shortcode('[caldera_form id="CF57aaf1b2c08e3"]'); ?>
					</div>
					<div class="item"><br></div>
				</section>

				<section class="bottom">
					<div class="container">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
							<a class="inv" href="http://www.esoft.co.za/" title="eSoft">Powered by eSoft Development & Technologies</a> 
						</p>
						<div class="item">
							<a target="_blank" href="https://www.facebook.com/WorldVisionSA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a target="_blank" href="https://twitter.com/WorldVisionSA"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a target="_blank" href="https://www.youtube.com/user/WorldVisionSA"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</div>
					</div>
				</section>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<!-- <script src="<?php //echo get_template_directory_uri(); ?>/js/jquery-2.2.0.min.js"></script> -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slimmenu.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDICEtu1Udejl8uFqVKfY5OK6wB_7rKoME&callback=initMap"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/custom-map.js"></script>

	</body>
</html>
