<!DOCTYPE html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		
		wp_title( '-', true, 'right' );
		
		// Add the blog name.
		bloginfo( 'name' );
		
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " - $site_description";
		
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		
		?></title>
		
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<!-- IE6 toolbar removal -->
		<meta http-equiv="imagetoolbar" content="false" />
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<!-- pingbacks -->
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- icons & favicons -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">	
				
		<!-- google webfonts -->
		<?php get_google_fonts(); ?>	

		<!-- modernizr -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
						
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/crossbones.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/flexslider.css">
		
		<!-- fetch base theme // core.php -->
		<?php get_base_theme(); ?>


		<!-- wordpress head functions -->		
		<?php wp_head(); ?>		
		<!-- end of wordpress head -->
		
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		


	</head>
	
	<body <?php body_class(); ?>>
	
<div class="container">
		
<?php require_once ( XBONES_FILEPATH . '/library/modules/navigation.php'); ?>

