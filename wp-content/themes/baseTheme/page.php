<?php get_header(); ?>
<div class="row contentContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

		<?php the_content(); ?>
		
	
	<?php endwhile; endif; ?>		

</div>
<?php get_footer(); ?>