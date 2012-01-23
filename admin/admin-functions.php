<?php
/*-----------------------------------------------------------------------------------*/
/* Head Hook
/*-----------------------------------------------------------------------------------*/

function of_head() { do_action( 'of_head' ); }

/*-----------------------------------------------------------------------------------*/
/* Add default options after activation */
/*-----------------------------------------------------------------------------------*/
if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	//Call action that sets
	add_action('admin_head','of_option_setup');
}

/* set options=defaults if DB entry does not exist, else update defaults only */
function of_option_setup()	{
	global $of_options, $options_machine;
	$options_machine = new Options_Machine($of_options);
		
	if (!get_option(OPTIONS)){
		update_option(OPTIONS,$options_machine->Defaults);
	}
}

/*-----------------------------------------------------------------------------------*/
/* Admin Backend */
/*-----------------------------------------------------------------------------------*/
function optionsframework_admin_message() { 
	
	//Tweaked the message on theme activate
	?>
    <script type="text/javascript">
    jQuery(function(){
    	
        var message = '<p>This theme comes with an <a href="<?php echo admin_url('admin.php?page=optionsframework'); ?>">options panel</a> to configure settings. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';
    	jQuery('.themes-php #message2').html(message);
    
    });
    </script>
    <?php
	
}

add_action('admin_head', 'optionsframework_admin_message'); 


/*-----------------------------------------------------------------------------------*/
/* Small function to get all header classes */
/*-----------------------------------------------------------------------------------*/

	function of_get_header_classes_array() {
		global $of_options;
		
		foreach ($of_options as $value) {
			
			if ($value['type'] == 'heading') {
				$hooks[] = ereg_replace("[^A-Za-z0-9]", "", strtolower($value['name']) );
			}
			
		}
		
		return $hooks;
		
	}


	function generate_options_css($newdata) {

		$data = $newdata;
		$css_dir = get_stylesheet_directory() . '/library/css/'; // Shorten code, save 1 call
		ob_start(); // Capture all output (output buffering)

		require($css_dir . 'styles.php'); // Generate CSS

		$css = ob_get_clean(); // Get generated CSS (output buffering)
		file_put_contents($css_dir . 'options.css', $css, LOCK_EX); // Save it
	}


/* For use in themes */
$data = get_option(OPTIONS);
?>
