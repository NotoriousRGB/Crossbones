			<footer role="contentinfo" class="row ">
			<div class="sixteen columns bordertop">
			</div><!-- / -->
			
			<div id="" class="four columns">
					<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer One' ) ) ?><br>	
			</div><!-- / -->
			<div id="" class="four columns">
					<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Two' ) ) ?><br>		
			</div><!-- / -->
			<div id="" class="four columns">
					<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Three' ) ) ?><br>			
			</div><!-- / -->
			<div id="" class="four columns">
					<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer Four' ) ) ?><br>		
			</div><!-- / -->
			


	
				
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<?php include(XBONES_FILEPATH . '/library/js/app.php') ?> <!-- dynamic javascript -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.js"></script>		
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/tabs.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.mobilemenuxx.js"></script>


		
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>