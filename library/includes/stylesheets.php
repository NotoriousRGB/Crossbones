		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
			
		<?php  
			$base_style = get_option('xbones_base_style');
			switch ($base_style)
			{
				case 'White' :
					echo "white";
					break;
				case 'Black' :
					echo "black";
					break;
				case 'Grey' :
					echo '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/custom.css"';
					break;
				default :
					echo "white";
					break;
			}
		?>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/custom.css">	
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom-style.php" type="text/css" media="screen" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->


		
	