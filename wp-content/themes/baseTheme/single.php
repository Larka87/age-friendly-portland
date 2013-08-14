<?php get_header(); ?>
<div id="wrapper">
<div class="row contentContainer">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	
    	<div class="post">
    
    		<?php get_template_part('entry'); ?>
    	
    	</div>
    	
    	
    	<?php comments_template(); ?>
    	
		
	<?php endwhile; ?>			
		
<?php else : ?>

    	<h2>Not Found</h2>
    	
    	<p>Sorry, but the requested resource was not found on this site.</p>
	
<?php endif; ?>
	

<?php get_sidebar();  ?>

</div>
</div>
<?php get_footer(); ?>