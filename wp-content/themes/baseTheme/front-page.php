<?php get_header(); ?>
	<div id="wrapper">
		<div class="row contentContainer">
			<div class="small-12 columns">
	    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php the_content(); ?>
					
					
					<div class="row">
							
						<div class="cycle-slideshow" 
						    data-cycle-fx=scrollHorz
						    data-cycle-timeout=7000
						    data-cycle-caption="#adv-custom-caption"
						    data-cycle-caption-template="{{cycleTitle}}"
						    >
						    	<?php if(get_field('age_friendly_portland_home_page_slider_field')): ?>
	 
									<?php while(has_sub_field('age_friendly_portland_home_page_slider_field')): ?>
										
							   	 	<img src="<?php the_sub_field('home_page_slider_image'); ?>" data-cycle-title="<?php the_sub_field('home_page_slider_header'); ?><br /><?php the_sub_field('home_page_slider_text'); ?>"/>
						   	 	
						   	 		<?php endwhile; ?>
						   	 	<?php endif; ?>
						   	 	
						   	 	<div id="adv-custom-caption" class="center"></div>	
						</div>
					
						
						
						<h1>Building an Age Friendly Community</h1>
						<div class="large-4 columns">
							<p class="circle"><img src="<?php the_field('around_portland_image'); ?>" alt="" /></p>
							<h3 class="homeTop"><?php the_field('around_portland_header'); ?></h3>
							<p><?php the_field('around_portland_body'); ?></p>
							<a href="http://afp.cellar-door-designs.com/get-involved/events/">Learn More</a>
						</div>
						
						<div class="large-4 columns">
							<p class="circle"><img src="<?php the_field('beyond_portland_image'); ?>" alt="" /></p>
							<h3 class="homeTop"><?php the_field('beyond_portland_header'); ?></h3>
							<p><?php the_field('beyond_portland_body'); ?></p>
							<a href="#">Learn More</a>
						</div>
						
						<div class="large-4 columns">
							<p class="circle"><img src="<?php the_field('get_connected_image'); ?>" alt="" /></p>
							<h3 class="homeTop"><?php the_field('get_connected'); ?></h3>
							<p><?php the_field('get_connected_body'); ?></p>
							<a href="#">Learn More</a>
						</div>
					</div>
		
				<?php endwhile; endif; ?>	
	    	</div>
		</div>
	</div>

<?php get_footer(); ?>