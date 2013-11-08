<?php
/*
Template Name: Secondary Layout
*/
get_header(); ?>
<div id="wrapper">
	<div class="row contentContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
			
			<div class="large-4 columns" id="subNav">	
			<?php get_sidebar(); ?>
			</div>
			<div class="large-8 columns rightColumn">
			<!--<?php 
			if(is_page('Tools')){
			
				if(get_field('age_friendly_portland_tools_page_field')):
					while(has_sub_field('age_friendly_portland_tools_page_field')): 
									?>
								   	 	<a href="<?php the_sub_field('age_friendly_portland_tools_link'); ?>" target="_blank" class="tools-links"><?php the_sub_field('age_friendly_portland_tools_title'); ?></a>
										
									<?php
										
							   	 	
							   	 		endwhile;
							   	 		
							   	 	endif; 
				
			} else {
			 the_content(); 
			}
			
			?>-->
			<?php 
			if(is_page('Programs')){
			
				?><h6><?php the_field("age_friendly_portland_programs_header");?></h6>
				<?php
				if(get_field('age_friendly_portland_programs_page_field')):
					while(has_sub_field('age_friendly_portland_programs_page_field')): 
									?>
										
								   	 	<a href="<?php the_sub_field('age_friendly_portland_programs_link'); ?>" target="_blank" class="tools-links"><?php the_sub_field('age_friendly_portland_programs_title'); ?></a>
										
									<?php
										
							   	 	
							   	 		endwhile;
							   	 		
							   	 	endif; 
				
			} else {
			the_content();  
			}
			
			?>
			
			
			
			
			
			
			</div>
		
		<?php endwhile; endif; ?>	
	</div>
</div>
<?php get_footer(); ?>