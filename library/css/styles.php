<?php 
global $data; //fetch options stored in $data
// GET VARIABLES FROM OPTIONS ARRAY
$primary = $data['xbones_primary_colour'];
$secondary = $data['xbones_secondary_colour'];
$highlight = $data['xbones_highlight_colour'];

$background = $data['xbones_background_colour'];
$background_pattern = $data['xbones_background_pattern'];

$heading_font = $data['xbones_heading_font'];
$body_font = $data['xbones_body_font'];





$striphash = str_replace("#", "", "$primary");
$contrast = getContrast($striphash, .75);
$hover = colourBrightness($primary, $contrast);

$striphash = str_replace("#", "", "$background");
$contrast = getContrast($striphash, .85);
$underline = colourBrightness($background, $contrast);




?>
body {
	background-color: <?php echo $background; ?>;
	<?php if($background_pattern) { 	
	echo 'background: url(' . $background_pattern  . ') repeat fixed;';
	} ?>
}

h1, h2, h3, h4, h5, h6, a {
	color: <?php echo $data['xbones_primary_colour']; ?>;
	<?php get_custom_font($heading_font); ?>
}

p, li {
	color: <?php echo $secondary; ?>;
	<?php get_custom_font($body_font); ?>
}

.bordertop {
	border-top: 4px solid <?php echo $primary; ?>;
}

.button, #searchsubmit { 
	background-color: <?php echo $primary; ?>; 
	color: <?php echo $background; ?>;
}

.button:hover, .button:focus, #searchsubmit:hover, #searchsubmit:focus { 
	background-color: <?php echo $hover ?>;
}

form div.form-field input, form input, form textarea { 
	border:  1px solid <?php echo $primary; ?>;  
}

form div.form-field input, form input.input-text, form textarea { 
	outline: none !important; 
	background: transparent; 
	colour: <?php echo $secondary ?>
}

.widget-title {
  border-bottom: 1px solid <?php echo $underline ?>;
}

.flex-control-nav li a { border: 4px solid <?php echo $highlight; ?>; }
.flex-control-nav li a:hover { border: 7px solid <?php echo $highlight; ?>; }
.flex-control-nav li a.active { background-color: <?php echo $highlight; ?>; }

.captions h3 {
	background: <?php echo $highlight; ?>;
	color: <?php echo $background; ?>;
}

.fancylink {
	color: <?php echo $highlight; ?>;
}

nav select {
  background: <?php echo $background; ?>;
  color: <?php echo $primary; ?>;
  border: 1px solid <?php echo $primary; ?>;
}

#centeredmenu ul li a {
   color:<?php echo $primary; ?>;
}

#centeredmenu ul li.active a {
   color:<?php echo $background; ?>;
   background:<?php echo $primary; ?>;
}

#centeredmenu ul li a:hover {
   background:<?php echo $primary; ?>/* Top menu items background colour */
   color:<?php echo $background; ?>;
}
#centeredmenu ul li:hover a,
#centeredmenu ul li.hover a { /* This line is required for IE 6 and below */
   background:<?php echo $primary; ?>; /* Top menu items background colour */
   color:<?php echo $background; ?>;
}

/* Submenu items */
#centeredmenu ul ul {
   border: 1px solid <?php echo $primary; ?>;
}
#centeredmenu ul ul li {
   border-bottom:1px solid <?php echo $primary; ?>; /* sub menu item horizontal lines */
}

#centeredmenu ul ul li a,
#centeredmenu ul li.active li a,
#centeredmenu ul li:hover ul li a,
#centeredmenu ul li.hover ul li a { /* This line is required for IE 6 and below */
   background: <?php echo $background; ?>;
   color:<?php echo $primary; ?>;
}

#centeredmenu ul ul li a:hover,
#centeredmenu ul li.active ul li a:hover,
#centeredmenu ul li:hover ul li a:hover,
#centeredmenu ul li.hover ul li a:hover { /* This line is required for IE 6 and below */
   background:<?php echo $primary; ?>; /* Sub menu items background colour */
   color:<?php echo $background; ?>;
}

::-webkit-scrollbar-track-piece{ 
	background-color:<?php echo $background; ?>;
	background-attachment:fixed;
	<?php if($background_pattern) { 	
	echo 'background: url(' . $background_pattern  . ') repeat;';
	} ?>
}
::-webkit-scrollbar-thumb{ background-color:<?php echo $primary; ?>; }
::-webkit-scrollbar-thumb:hover{ background-color:<?php echo $hover; ?>; }
::selection { background: <?php echo $primary; ?>; color: <?php echo $background; ?>; }
::-moz-selection { background: <?php echo $primary; ?>; color: <?php echo $background; ?>; }


