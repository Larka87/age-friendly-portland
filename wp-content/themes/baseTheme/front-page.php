<?php get_header(); ?>
	<div id="wrapper">
		<div class="row contentContainer">
			
			<div class="small-12 columns">
				
	    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
					<?php the_content(); ?>
					
					
					<div class="row">
						
						<div id="slideshow">
							
							<div class="cycle-slideshow" 
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=7000
							    data-cycle-caption="#adv-custom-caption"
							    data-cycle-caption-template="{{cycleTitle}}"
							    data-cycle-prev="#prev"
	       				 		data-cycle-next="#next"
	       					 >
							    
							   		<a href="" id="prev" class="arrow-left-icon">&nbsp;</a>
	    							<a href="" id="next" class="arrow-right-icon">&nbsp;</a>
							    	<?php if(get_field('age_friendly_portland_home_page_slider_field')): ?>
		 
										<?php while(has_sub_field('age_friendly_portland_home_page_slider_field')): ?>
											
								   	 	<img src="<?php the_sub_field('home_page_slider_image'); ?>" data-cycle-title="<span class='slider-header'><?php the_sub_field('home_page_slider_header'); ?></span><p><?php the_sub_field('home_page_slider_text'); ?><a href='<?php the_sub_field('home_page_slider_link');?>'>Read More</a></p>" />
							   	 	
							   	 		<?php endwhile; ?>
							   	 		
							   	 	<?php endif; ?>
							   	
							   	 	<div id="adv-custom-caption" class="center"></div>	
							</div>
						
						</div>
						
						
						<h1 class="homeHeader">Building an Age Friendly Community</h1>
						
						<div class="large-4 columns">
							<?php $about_image = get_field('around_portland_image'); ?>
							
							<p class="homePageImages"><img src="<?php echo $about_image['sizes']['homepage-thumb']; ?>" alt="<?php echo $about_image['alt']; ?>" /></p>
							
							<h3 class="homeTop"><?php the_field('around_portland_header'); ?></h3>
							
							<p><?php the_field('around_portland_body'); ?></p>
							
							<a href="http://afp.cellar-door-designs.com/get-involved/events/">Learn More</a>
						</div>
						
						<div class="large-4 columns">
								
							<?php $beyond_image = get_field('beyond_portland_image'); ?>
							
							<p class="homePageImages"><img src="<?php echo $beyond_image['sizes']['homepage-thumb']; ?>" alt="<?php echo $beyond_image['alt']; ?>" /></p>
							
							<h3 class="homeTop"><?php the_field('beyond_portland_header'); ?></h3>
							
							<p><?php the_field('beyond_portland_body'); ?></p>
							
							<a href="http://afp.cellar-door-designs.com/get-involved/events/">Learn More</a>
						</div>
						
						<div class="large-4 columns">
							<?php $connected_image = get_field('get_connected_image'); ?>
							
							<p class="homePageImages"><img src="<?php echo $connected_image['sizes']['homepage-thumb']; ?>" alt="<?php echo $connected_image['alt']; ?>" /></p>
							
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