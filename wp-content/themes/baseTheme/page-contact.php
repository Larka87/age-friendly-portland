<?php get_header(); ?>

<div id="wrapper">
	
	<div class="row contentContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
			
			<div class="large-6 columns">	
				
				<h3 class="headContact"><?php the_field('contact_page_additional_information_header'); ?></h3>
				
				<p><?php the_field('contact_page_additional_information_body'); ?></p>
				
			
			</div>
			
			<div class="large-6 columns rightColumn">
				
				<p><?php the_field('contact_page_form'); ?></p>
			
			<?php the_content(''); ?>
			
			</div>
		
		<?php endwhile; endif; ?>
			
	</div>
	
</div>

<?php get_footer(); ?>