<?php

/************* REGISTER JQUERY *************/

  if(!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/
  jquery/1.7.1/jquery.min.js"), false, '1.7.1');
      wp_enqueue_script('jquery');
  }

/************* ADD SUPPORT FOR POST THUMBNAILS *************/
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

/************* THUMBNAIL SIZE OPTIONS *************/


// Thumbnail sizes
add_image_size( 'xbones-700', 700, 9999, true );

/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/


/************* ADD WORDPRESS MENU SUPPORT *************/

add_theme_support('nav-menus');

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  // - Header Navigation
		  'header-menu'     => __('Header Navigation')
		)
	);
}


/************* THUMBNAIL SIZE OPTIONS *************/

function get_base_theme() {
		global $data; //fetch options stored in $data
		$base_style = strtolower($data['xbones_base_style']);			
		echo "<link rel='stylesheet' href='" . get_template_directory_uri() . "/library/css/" . $base_style . ".css'>";
}


/************* REGISTER CUSTOM STYLESHEET *************/

function xbones_enqueue_css() {
		wp_register_style('options', get_template_directory_uri() . '/library/css/options.css', 'style');
		wp_enqueue_style( 'options');
}
add_action('wp_enqueue_scripts', 'xbones_enqueue_css');

/************* GOOGLE FONT FORMATTER *************/

function get_google_fonts() {
	global $data; //fetch options stored in $data
	$formatted_font1 = strtr($data['xbones_heading_font'], " ", "+");
	$formatted_font2 = strtr($data['xbones_body_font'], " ", "+");

	$google1 = (strstr($formatted_font1, "*")) ? false : true;
	$google2 = (strstr($formatted_font2, "*")) ? false : true;

	if ($google1 && $google2) {
		if ($formatted_font1 == $formatted_font2) {
			echo "<link href='http://fonts.googleapis.com/css?family=" . $formatted_font1 . "' rel='stylesheet' type='text/css'>";
		} else {
			echo "<link href='http://fonts.googleapis.com/css?family=" . $formatted_font1 . "|" .$formatted_font2 ."' rel='stylesheet' type='text/css'>";
		}
	} else if ($google1) {
		echo "<link href='http://fonts.googleapis.com/css?family=" . $formatted_font1 . "' rel='stylesheet' type='text/css'>";
	} else if ($google2) {
		echo "<link href='http://fonts.googleapis.com/css?family=" . $formatted_font2 . "' rel='stylesheet' type='text/css'>";
	} 
}

/************* SYSTEM FONT FORMATTER *************/

function get_custom_font($font) {
	
		$system_font = (strstr($font, "*")) ? true : false;
		
		if ($system_font) {
			switch ($font) {
				case 'Garamond*':
					echo "font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif;";
				break;
				case 'Palatino*':
					echo "font-family: Palatino, 'Palatino Linotype', 'Palatino LT STD', 'Book Antiqua', Georgia, serif;";
				break;
				case 'Baskerville*':
					echo "font-family: Baskerville, 'Baskerville old face', 'Hoefler Text', Garamond, 'Times New Roman', serif;";
				break;
				case 'Futura*':
					echo "font-family: Futura, 'Trebuchet MS', Arial, sans-serif;";
				break;
				case 'Gill Sans*':
					echo "font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;";
				break;
				case 'Trebuchet MS*':
					echo "font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;";
				break;
				case 'Verdana*':
					echo "font-family: Verdana, Geneva, sans-serif;";
				break;
				case 'Lucida Grande*':
					echo "font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Geneva, Verdana, sans-serif;";
				break;
				case 'Arial*':
					echo "font-family: Arial, helvetica, clean, sans-serif;";
				break;
				case 'Helvetica*':
					echo "font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;";
				break;
			}
		} else {
			echo "font-family: " . $font;
		}
}









