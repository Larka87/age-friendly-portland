<?php
/*
Template Name: Partner Layout
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
				
				<?php the_content(); ?>
				
				<h3 id="advisory-border">Advisory Committee</h3>
				
				<?php if(get_field('advisory_committee')): ?>
		 
					<?php while(has_sub_field('advisory_committee')): ?>
						
					<div class="advisory-grid">
						
			   	 		<h6><?php the_sub_field('adviser_name'); ?></h6>
			   	 		
			   	 		<p><?php the_sub_field('adviser_workplace'); ?></p>
			   	 		
			   	 	</div>
		   	 	
		   	 		<?php endwhile; ?>
		   	 		
		   	 	<?php endif; ?>
	   	 	
			</div>
		
		<?php endwhile; endif; ?>	
		
	</div>
	
</div>

<?php get_footer(); ?>