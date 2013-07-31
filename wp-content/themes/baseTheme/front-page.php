<?php get_header(); ?>

	<div class="row contentContainer">
		<div class="small-12 columns">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<?php the_content(); ?>
				
				<!-- This is temporary, needs be put in wordpress back-end -->
				<div class="row">
					<div class="large-4 columns">
						<h3 class="homeTop">Around Portland</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et iaculis</p>
						<a href="#">Learn More</a>
					</div>
					
					<div class="large-4 columns">
						<h3 class="homeTop">Around Portland</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et iaculis</p>
						<a href="#">Learn More</a>
					</div>
					
					<div class="large-4 columns">
						<h3 class="homeTop">Around Portland</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et iaculis</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<!----------- Temporary ________________>
	
			<?php endwhile; endif; ?>	
    	</div>
	</div>

<?php get_footer(); ?>