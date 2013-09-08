<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="wrapper">
	<div class="row contentContainer" id="category">
		 	
			 <h2>Post for: <?php single_cat_title(); ?></h2>
			 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	
			<h3><?php the_title(); ?> </h3>
			
		</a>

		<?php the_excerpt(); ?>
		
	
	<?php endwhile; endif; ?>
	
	<div class="prev-posts"><?php previous_posts_link('<b class="arrow-left-icon"></b>') ?></div>
	<div class="next-posts"><?php next_posts_link('<b class="arrow-right-icon"></b>') ?></div>
			
	</div>
	</div>


<?php get_footer(); ?>