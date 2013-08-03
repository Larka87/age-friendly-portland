<?php get_header(); ?>

	<div class="row contentContainer">
		<div class="small-12 columns">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<?php the_content(); ?>
				
				<!-- This is temporary, needs be put in wordpress back-end -->
				<div class="row">
					<div class="large-4 columns">
						<p class="circle"><img src="<?php the_field('around_portland_image'); ?>" alt="" /></p>
						<h3 class="homeTop"><?php the_field('around_portland_header'); ?></h3>
						<p><?php the_field('around_portland_body'); ?></p>
						<a href="#">Learn More</a>
					</div>
					
					<div class="large-4 columns">
						<p class="circle"><img src="<?php the_field('around_portland_image'); ?>" alt="" /></p>
						<h3 class="homeTop"><?php the_field('beyond_portland_header'); ?></h3>
						<p><?php the_field('beyond_portland_body'); ?></p>
						<a href="#">Learn More</a>
					</div>
					
					<div class="large-4 columns">
						<p class="circle"><img src="<?php the_field('around_portland_image'); ?>" alt="" /></p>
						<h3 class="homeTop"><?php the_field('get_connected'); ?></h3>
						<p><?php the_field('get_connected_body'); ?></p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<!----------- Temporary------------------>
	
			<?php endwhile; endif; ?>	
    	</div>
	</div>

<?php get_footer(); ?>