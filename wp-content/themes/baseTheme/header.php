<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
	
	
		<meta charset="utf-8">
		
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		
		<!--<meta name="viewport" content="width=device-width">-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/master.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/css/foundation.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
		<!-- LOAD SCRIPTS -->
		<script src="<?php bloginfo('template_url');?>/library/js/libs/jquery.js"></script>
		<script src="<?php bloginfo('template_url');?>/library/js/foundation.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/library/js/foundation/foundation.topbar.js"></script>
		<?php wp_head(); ?>
		<script type= text/javascript>
			$(function(){
				$(".dropdown-toggle").click(function() {
				  $(".collapse").slideToggle(350);
				  return false;
				});
			});
		</script>
		
	</head>
	

	<body <?php body_class(); ?>>
		<div class="topBar">
			<div class="row"> 
				<p>text Size buttons go here</p>
			</div>
		</div>
		<nav class="nav">
			<div class="row">
				<div class="large-12 columns container">
					<div class="site-logo">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					</div>
					
					<div id="MainNavigation">
						<a href="#" class="dropdown-toggle btn">Menu</a>
							<div class="collapse">
		 						<?php wp_nav_menu(foundation_navigation); ?>
		 					</div>
	 				</div>
	 			</div>
 			</div>		
 		</nav>
		
	