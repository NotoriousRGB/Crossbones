<div id="" class="sixteen columns bordertop">
</div><!-- / -->
	




		<div class="four columns">
					<form class="">

					<label>Standard Input</label>
					<input type="text" class="input-text" />
					<input type="submit" name="submit" value="submit" class="button radius small">
					
		</div>

		<div id="" class="twelve columns">
			<?php 
				global $wp_query;
				$wp_query = new WP_Query('post_type=post&order=DESC');
				while ( $wp_query->have_posts()) : $wp_query->the_post();
			?>

			<?php the_title(); ?>



			<?php endwhile; ?>
		</div><!-- / -->



