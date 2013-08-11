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
			<?php the_content(); ?>
			</div>
		
		<?php endwhile; endif; ?>	
	</div>
</div>
<?php get_footer(); ?>