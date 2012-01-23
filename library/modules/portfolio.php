<div id="portfolio" class="row">


<div id="" class="sixteen columns bordertop"></div><!-- / -->

<div id="" class="four columns">
	<h3>Work</h3>
	<p>
	A show and tell of what's been
	keeping us busy.</p>
	<span class="glyphs fancylink">$</span><h5 class="calltoaction fancylink">SEE MORE</h5>
</div><!-- / -->

<div class="row offset-by-four">

<?php 
	global $wp_query;
	$wp_query = new WP_Query('post_type=portfolio&order=DESC&posts_per_page=6');
	while ( $wp_query->have_posts()) : $wp_query->the_post();
?>

<div class="four columns">

		<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'xbones-700'); ?>
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $url[0]; ?>" alt="" class="scale-with-grid corners"></a>
</div>

<?php endwhile; ?>
<br class="clear" />
</div>


</div><!-- / -->