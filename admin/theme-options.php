<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

//Testing 
$of_options_select = array("one","two","three","four","five"); 
$of_options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");



//Stylesheets Reader
$alt_stylesheet_path = LAYOUT_PATH;
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//Background Images Reader
$bg_images_path = STYLESHEETPATH. '/images/bg/'; // change this to where you store your bg images
$bg_images_url = get_bloginfo('template_url').'/images/bg/'; // change this to where you store your bg images
$bg_images = array();

if ( is_dir($bg_images_path) ) {
    if ($bg_images_dir = opendir($bg_images_path) ) { 
        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
                $bg_images[] = $bg_images_url . $bg_images_file;
            }
        }    
    }
}

/*-----------------------------------------------------------------------------------*/
/* TO DO: Add options/functions that use these */
/*-----------------------------------------------------------------------------------*/

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Image Alignment radio box
$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 

// Homepage Modules
$of_options_homepage_blocks = array( 
	"disabled" => array (
		"placebo" 		=> "placebo", //REQUIRED!
		"slideshow"		=> "Slideshow",
		"tagline"		=> "Tagline",
		"portfolio"	=> "Portfolio",
		"articles" => "Articles",
		"widgets"	=> "Widgets",
		"blog" => "Blog"
	),
	"enabled" => array (
		"placebo" => "placebo", //REQUIRED!
	),
);
// Custom Arrays
$base_style = array("Theme", "Black", "Grey");
$home_modules = array("none", "slider", "portfolio", "articles", "tagline", "widgets", "content");
$border_types = array("none", "solid", "dotted", "dashed", "double", "groove", "ridge", "inset", "outset");
$fonts = array("Gentium", "Armata", "Open Sans", "Droid Sans", "Droid Serif", "Droid Sans Mono", "Oswald", "PT Sans", "Yanone Kaffeesatz", "Lobster", "Ubuntu", "Arvo", "Lora", "Cabin", "Josefin Sans", "Nobile", "Goudy Bookletter 1911", "Allerta", "Crimson Text", "Molengo", "Lekton", "Corbin", "Raleway", "Vollkorn", "Abril Fatface", "Hammersmith One", "Lato:900", "Playfair Display", "ChunkFive", "Bevan", "Comfortaa", "Concert One", "Quattrocento Sans", "Vast Shadow", "Helvetica*", "Garamond*", "Palatino*", "Baskerville*", "Futura*", "Gill Sans*", "Trebuchet MS*", "Verdana*", "Lucida Grande*", "Arial*");

sort($fonts); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$of_options[] = array( "name" => "Custom Settings",
                    "type" => "heading");

$of_options[] = array( "name" =>  "Primary Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "xbones_primary_colour",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "Secondary Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "xbones_secondary_colour",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "Highlight Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "xbones_highlight_colour",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" =>  "Background Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "xbones_background_colour",
					"std" => "",
					"type" => "color");

$of_options[] = array( "name" => "Background Texture",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "xbones_background_pattern",
					"std" => "",
					"mod" => "min",
					"type" => "media");




$of_options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select your themes alternative color scheme.",
					"id" => "xbones_base_style",
					"std" => "Theme",
					"type" => "select",
					"options" => $base_style); 

$of_options[] = array( "name" => "Heading Font",
					"desc" => "Select your themes alternative color scheme.",
					"id" => "xbones_heading_font",
					"std" => "",
					"type" => "select",
					"options" => $fonts); 

$of_options[] = array( "name" => "Body Font",
					"desc" => "Select your themes alternative color scheme.",
					"id" => "xbones_body_font",
					"std" => "",
					"type" => "select",
					"options" => $fonts); 

$of_options[] = array( "name" => "Homepage Layout Manager",
					"desc" => "Organize how you want the layout to appear on the homepage",
					"id" => "homepage_blocks",
					"std" => $of_options_homepage_blocks,
					"type" => "sorter");

$of_options[] = array( "name" => "Tagline",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => "xbones_tagline",
					"std" => "Hey There!",
					"type" => "textarea");  








/*

$of_options[] = array( "name" => "Home Settings",
					"type" => "heading");
					
$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "introduction",
					"std" => "<h3 style=\"margin: 0 0 10px;\">Welcome to the Options Framework demo.</h3>
					This is a slightly modified version of the original options framework by Devin Price with a couple of aesthetical improvements on the interface and some cool additional features. If you want to learn how to setup these options or just need general help on using it feel free to visit my blog at <a href=\"http://aquagraphite.com/2011/09/29/slightly-modded-options-framework/\">AquaGraphite.com</a>",
					"icon" => true,
					"type" => "info");
					
$of_options[] = array( "name" => "Media Uploader",
					"desc" => "Upload images using the native media uploader, or define the URL directly",
					"id" => "media_upload",
					"std" => "",
					"type" => "media");
					
$of_options[] = array( "name" => "Media Uploader Min",
					"desc" => "Upload images using native media uploader. This is a min version, meaning it has no url to copy paste. Perfect for logo.",
					"id" => "media_upload_2",
					"std" => "",
					"mod" => "min",
					"type" => "media");
					
$of_options[] = array( "name" => "Homepage Layout Manager",
					"desc" => "Organize how you want the layout to appear on the homepage",
					"id" => "homepage_blocks",
					"std" => $of_options_homepage_blocks,
					"type" => "sorter");
					
$of_options[] = array( "name" => "Slider Options",
					"desc" => "Unlimited slider with drag and drop sortings.",
					"id" => "pingu_slider",
					"std" => "",
					"type" => "slider");
					
$of_options[] = array( "name" => "Background Images",
					"desc" => "Select a background pattern.",
					"id" => "custom_bg",
					"std" => $bg_images_url."bg0.png",
					"type" => "tiles",
					"options" => $bg_images,
					);
					
$of_options[] = array( "name" => "Typography",
					"desc" => "Typography option with each property can be called individually.",
					"id" => "custom_type",
					"std" => array('size' => '12px','style' => 'bold italic'),
					"type" => "typography");

$of_options[] = array( "name" => "General Settings",
                    "type" => "heading");
					
$url =  ADMIN_DIR . 'images/';
$of_options[] = array( "name" => "Main Layout",
					"desc" => "Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.",
					"id" => "layout",
					"std" => "2c-l-fixed.css",
					"type" => "images",
					"options" => array(
						'1col-fixed.css' => $url . '1col.png',
						'2c-r-fixed.css' => $url . '2cr.png',
						'2c-l-fixed.css' => $url . '2cl.png',
						'3c-fixed.css' => $url . '3cm.png',
						'3c-r-fixed.css' => $url . '3cr.png')
					);
$of_options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => "custom_favicon",
					"std" => "",
					"type" => "upload"); 
                                               
$of_options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => "google_analytics",
					"std" => "",
					"type" => "textarea");        


$of_options[] = array( "name" => "Footer Text",
                    "desc" => "You can use the following shortcodes in your footer text: [wp-link] [theme-link] [loginout-link] [blog-title] [blog-link] [the-year]",
                    "id" => "footer_text",
                    "std" => "Powered by [wp-link]. Built on the [theme-link].",
                    "type" => "textarea");                                                          
    
$of_options[] = array( "name" => "Styling Options",
					"type" => "heading");
					
$of_options[] = array( "name" => "Theme Stylesheet",
					"desc" => "Select your themes alternative color scheme.",
					"id" => "alt_stylesheet",
					"std" => "default.css",
					"type" => "select",
					"options" => $alt_stylesheets); 
					
$of_options[] = array( "name" =>  "Body Background Color",
					"desc" => "Pick a background color for the theme (default: #fff).",
					"id" => "body_background",
					"std" => "",
					"type" => "color");
					
$of_options[] = array( "name" =>  "Header Background Color",
					"desc" => "Pick a background color for the header (default: #fff).",
					"id" => "header_background",
					"std" => "",
					"type" => "color");   

$of_options[] = array( "name" =>  "Footer Background Color",
					"desc" => "Pick a background color for the footer (default: #fff).",
					"id" => "footer_background",
					"std" => "",
					"type" => "color");
					
$of_options[] = array( "name" => "Body Font",
					"desc" => "Specify the body font properties",
					"id" => "body_font",
					"std" => array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "Custom CSS",
                    "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                    "id" => "custom_css",
                    "std" => "",
                    "type" => "textarea");

$of_options[] = array( "name" => "Example Options",
					"type" => "heading"); 	   

$of_options[] = array( "name" => "Typography",
					"desc" => "This is a typographic specific option.",
					"id" => "typography",
					"std" => array('size' => '12px','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
					"type" => "typography");  
					
$of_options[] = array( "name" => "Border",
					"desc" => "This is a border specific option.",
					"id" => "border",
					"std" => array('width' => '2','style' => 'dotted','color' => '#444444'),
					"type" => "border");      
					
$of_options[] = array( "name" => "Colorpicker",
					"desc" => "No color selected.",
					"id" => "example_colorpicker",
					"std" => "",
					"type" => "color"); 
					
$of_options[] = array( "name" => "Colorpicker (default #2098a8)",
					"desc" => "Color selected.",
					"id" => "example_colorpicker_2",
					"std" => "#2098a8",
					"type" => "color");          
                  
$of_options[] = array( "name" => "Upload",
					"desc" => "An image uploader without text input.",
					"id" => "uploader",
					"std" => "",
					"type" => "upload");  
					
$of_options[] = array( "name" => "Upload Min",
					"desc" => "An image uploader with text input.",
					"id" => "uploader2",
					"std" => "",
					"mod" => "min",
					"type" => "upload");     
                                
$of_options[] = array( "name" => "Input Text",
					"desc" => "A text input field.",
					"id" => "test_text",
					"std" => "Default Value",
					"type" => "text"); 
                                  
$of_options[] = array( "name" => "Input Checkbox (false)",
					"desc" => "Example checkbox with false selected.",
					"id" => "example_checkbox_false",
					"std" => false,
					"type" => "checkbox");    
                                        
$of_options[] = array( "name" => "Input Checkbox (true)",
					"desc" => "Example checkbox with true selected.",
					"id" => "example_checkbox_true",
					"std" => true,
					"type" => "checkbox"); 
                                                                           
$of_options[] = array( "name" => "Normal Select",
					"desc" => "Normal Select Box.",
					"id" => "example_select",
					"std" => "three",
					"type" => "select",
					"options" => $of_options_select);                                                          

$of_options[] = array( "name" => "Mini Select",
					"desc" => "A mini select box.",
					"id" => "example_select_2",
					"std" => "two",
					"type" => "select2",
					"class" => "mini", //mini, tiny, small
					"options" => $of_options_radio);    

$of_options[] = array( "name" => "Input Radio (one)",
					"desc" => "Radio select with default of 'one'.",
					"id" => "example_radio",
					"std" => "one",
					"type" => "radio",
					"options" => $of_options_radio);
					
$url =  ADMIN_DIR . 'images/';
$of_options[] = array( "name" => "Image Select",
					"desc" => "Use radio buttons as images.",
					"id" => "images",
					"std" => "warning.css",
					"type" => "images",
					"options" => array(
						'warning.css' => $url . 'warning.png',
						'accept.css' => $url . 'accept.png',
						'wrench.css' => $url . 'wrench.png'));
                                        
$of_options[] = array( "name" => "Textarea",
					"desc" => "Textarea description.",
					"id" => "example_textarea",
					"std" => "Default Text",
					"type" => "textarea"); 
                                      
$of_options[] = array( "name" => "Multicheck",
					"desc" => "Multicheck description.",
					"id" => "example_multicheck",
					"std" => array("three","two"),
				  	"type" => "multicheck",
					"options" => $of_options_radio);
                                      
$of_options[] = array( "name" => "Select a Category",
					"desc" => "A list of all the categories being used on the site.",
					"id" => "example_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $of_categories);
	*/				
	}
}
?>
