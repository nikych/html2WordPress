<!DOCTYPE html>
<html>
  <head>
	<meta charset = "utf-8"/>
	<title><?php bloginfo('name'); ?> <?php wp_title("",true); ?></title>
	<meta name="description" content="Project 7 in Telerik Academy - Free Course" />
	<meta name="keywords" content="project, telerik, academy, html, css, wordpress, javascript" />
	<meta name = "author" content = "Nikolay Chochev"/>
	<meta name="robots" content="noindex, nofollow" />
	<!-- disable iPhone inital scale -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
	<!-- LESS CSS  -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main_styling.less">
	
	<!-- media queries css -->
	<link href="<?php bloginfo('template_directory'); ?>/css/media-queries.less" rel="stylesheet/less" type="text/css">
	<script src="<?php bloginfo('template_directory'); ?>/js/less.js" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/telerik_ico.ico" />

	<!-- END CSS -->
	
	<!-- JS -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/jquery.dotdotdot-1.5.1.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".dot").dotdotdot({

			});
		});
	</script>
	
	<!--[if IE]> 
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- END JS -->

  </head>
	<body>
		<header>
		
			<!-- Navigation -->
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'top-menu',
					'container' => 'nav',
				));
			?>
			<!-- END Navigation -->
		</header>
		
		<!-- Wrapper -->
		<div id="wrapper">
		
			<!-- Logo -->
			<div id="logo">
				<?php $options = get_option('plugin_options'); ?>
				<img src="<?php 
				if ( $options['logo'] != "" ) {
					echo $options['logo'];
				} else {
					echo get_template_directory_uri() ?>/images/logo.png
				<?php 
				}
				?>" alt="logo" />
				<h1><a href="<?php bloginfo('url'); ?>"><?php 
				if ( $options['banner_heading1'] != "" ) {
					echo $options['banner_heading1'];
				} else {
					echo "Telerik";
				}
				?><span class="second"><?php 
				if ( $options['banner_heading2'] != "" ) {
					echo $options['banner_heading2'];
				} else {
					echo "Academy";
				} 
				?>
				</span></a></h1>
			</div>
			<!-- END Logo -->