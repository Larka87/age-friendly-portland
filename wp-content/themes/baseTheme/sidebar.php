<div id="sidebar-1" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	

		<?php //dynamic_sidebar( 'sidebar1' ); ?>
		<?php
			  if($post->post_parent)
			  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
			  else
			  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
			  if ($children) { ?>
			  <ul>
			  <?php echo $children; ?>
			  </ul>
  		<?php } ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>