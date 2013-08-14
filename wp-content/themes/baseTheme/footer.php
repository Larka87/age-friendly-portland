
		<div class="footer">		
			<?php wp_footer(); ?>
			<div class="row">
				<div class="large-4 columns">
					<h2>Latest Article's</h2>
					<?php
					$args = array( 'post_type' => 'article', 'posts_per_page' => 3 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<h5><?php the_title(); ?> </h5>
						</a>
						<?php
						
					endwhile;
					?>
				</div>
				<div class="large-4 columns">
					<h2>Upcoming Events</h2>
				</div>
				<div class="large-4 columns">
					<h2>Social Media</h2>
					<ul class="social">
						<a href="" class="facebook"><li>Facebook</li></a>
						<a href="" class="twitter"><li>Twitter</li></a>
						<a href="" class="linked"><li>LinkedIn</li></a>
					</ul>
				</div>
				<div class="large-12 columns">
					<p class="copywrite">© 2013 Age Friendly Portland - All Rights Reserved</p>
				</div>
			</div>
		</div>
		<script src="<?php bloginfo('template_url'); ?>/library/js/scripts.js"></script>
		

	</body>
	

</html>