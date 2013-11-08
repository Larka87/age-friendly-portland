
		<div class="footer">		
			<?php wp_footer(); ?>
			<div class="row">
				<div class="large-8 columns articleFoot">
					<h2>Latest Articles</h2>
					<?php
					$args = array( 'post_type' => 'article', 'posts_per_page' => 2 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a href="<?php the_permalink() ?>" class= "articles-a" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_title(); ?>
						</a>
						<?php the_excerpt(); ?>
						<?php
						
					endwhile;
					?>
				</div>
		
				<!--div class="large-4 columns">
					<h2>Social Media</h2>
					<ul class="social">
						<a href=""><li><b class="facebook-icon"></b>Facebook</li></a>
						<a href="<?php  acf_set_options_page_menu('facebook_link'); ?>" target="_blank"><li><b class="facebook-icon"></b></li>Facebook</a>
						<a href=""><li><b class="twitter-icon"></b>Twitter</li></a>
						<a href=""><li><b class="linkedin-icon"></b>LinkedIn</li></a>
					</ul>
				</div-->
				
					<div class="large-4 columns" id="locate">
					<h2>Contact Us</h2>
					<!--<div class="small-6 columns">
						<a class="map" target="_blank" href="http://tinyurl.com/mobkca5"><img src="<?php echo get_stylesheet_directory_uri();?>/imgs/map.png"  /></a>
					</div>-->
					
					<div class="small-6 columns locate-us">
						<p class="email">info@eldersinaction.org </p>
						<p class="phone">503-235-5474</p>
						<!--<p><a href="http://tinyurl.com/mobkca5">Get Directions</a></p>-->
						<a class="btn" href="http://afp.cellar-door-designs.com/contact">Contact US</a>
					</div>
					
				</div>
				
				<div class="large-12 columns">
					<p class="copywrite">&copy; <?php echo date('Y');?> Age Friendly Portland - All Rights Reserved</p>
				</div>
			</div>
		</div>
		<script src="<?php bloginfo('template_url'); ?>/library/js/scripts.js"></script>
		

	</body>