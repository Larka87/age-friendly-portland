<?php
get_header(); ?>

<div id="wrapper">
	
	<div class="row contentContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
			
		<div class="large-4 columns" id="subNav">
				
			<?php get_sidebar(); ?>
			
		</div>
		
		<div id="article" class="large-8 columns rightColumn">
			
			<?php
			
			
			$args = array( 'post_type' => 'article', 'posts_per_page' => 5, 'paged' => get_query_var('paged') );
			
			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	
					<h3><?php the_title(); ?> </h3>
					
				</a>
				<!--<div class="cat"><?php the_category(); ?></div>-->
				
				<div class="cat">
					<?php the_taxonomies(); ?>
				</div>
				<?php
				
				echo '<div class="entry-content">';
				
				the_excerpt();
			
				echo '</div>';
				
			endwhile;
			?>
			
			<div class="prev-posts"><?php previous_posts_link('<b class="arrow-left-icon"></b>', $loop->max_num_pages) ?></div>
			<div class="next-posts"><?php next_posts_link('<b class="arrow-right-icon"></b>', $loop->max_num_pages) ?></div>
			
			<?php
			?>
				
		</div>

		<?php endwhile; endif; ?>
			
	</div>
	
</div>

<?php get_footer(); ?>