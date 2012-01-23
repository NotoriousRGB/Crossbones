<?php 
header("Content-type: text/css");

if(file_exists('../../../wp-load.php')) :
	include '../../../wp-load.php';
else:
	include '../../../../wp-load.php';
endif; 

ob_flush(); 

// GET VARIABLES FROM OPTIONS ARRAY
$primary = get_option('xbones_primary_colour');
$secondary = get_option('xbones_secondary_colour');

$background = get_option('xbones_background_colour');
$background_pattern = get_option('xbones_background_pattern');

$heading_font = get_option('xbones_heading_font');
$body_font = get_option('xbones_body_font');

$border_size = get_option('xbones_border_size');
$border_type = get_option('xbones_border_type');
$border_colour_hex = get_option('xbones_border_colour');
$border_colour = hex2RGB("$border_colour_hex", true);
$border_opacity = get_option('xbones_border_opacity');





$striphash = str_replace("#", "", "$primary");
$contrast = getContrast($striphash, .75);
$hover = colourBrightness($primary, $contrast);

$striphash = str_replace("#", "", "$background");
$contrast = getContrast($striphash, .85);
$underline = colourBrightness($background, $contrast);


// OUTPUT THE CUSTOM CSS
?>
body {
	background-color: <?php echo $background; ?>;
		<?php if($background_pattern) { 	
			echo 'background: url(' . $background_pattern  . ') repeat;';
		}
		?>
}

h1, h2, h3, h4, h5, h6 {
	color: <?php echo $primary; ?>;
	<?php get_stylesheet_font($heading_font); ?>
}

p, li {
	color: <?php echo $secondary; ?>;
	<?php get_stylesheet_font($body_font); ?>
}

span.glyphs {
	color: <?php echo $primary; ?>;
}

.bordertop {
	border-top: <?php echo $border_size; ?>px <?php echo $border_type; ?> rgba(<?php echo $border_colour; ?>,<?php echo $border_opacity; ?>);
}

.button, #searchsubmit { 
	background-color: <?php echo $primary; ?>; 
	color: <?php echo $background; ?>;
	margin-bottom: 9px;
	letter-spacing: 1px;
}

.button:hover, .button:focus, #searchsubmit:hover, #searchsubmit:focus { 
	background-color: <?php echo $hover ?>;
}


	form div.form-field input, form input, form textarea { 
		border: <?php echo $border_type; ?> 1px <?php echo $primary; ?>;  
	}



	form div.form-field input, form input.input-text, form textarea { 

		outline: none !important; 
		background: transparent; 
		colour: <?php echo $secondary ?>
	}

.widget-title {
  border-bottom: 1px solid <?php echo $underline ?>;
}










a,
.xbones_tweet_widget ul li span a { color: <?php echo $primary; ?>; }

a:hover,
#commentform small span,
.xbones_blog .entry-title a:hover,
.xbones_tweet_widget ul li span a:hover,
#primary .entry-meta a:hover,
.recent-wrap .entry-title a:hover,
.tab-comments h3 a:hover,
.author-tag { color: <?php echo $hover; ?>; }

::selection { background: <?php echo $hover; ?>; color: #fff; }

::-moz-selection { background: <?php echo $hover; ?>; color: #fff; }

<?php ob_end_flush(); ?>