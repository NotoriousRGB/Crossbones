<div id="" class="row">


<div id="slider" class="sixteen columns bordertop">
			
<div class="flexslider">
<ul class="slides">
			    
<?php 
	global $wp_query;
	$wp_query = new WP_Query('post_type=slides&order=DESC');
	while ( $wp_query->have_posts()) : $wp_query->the_post();
?>

<li>
<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
	<img src="<?php echo $url[0]; ?>" alt="">
	<div class="captions hide-on-phones">
	
		<h3><?php the_title(); ?></h3>
		<p><?php the_content(); ?></p>

	</div>
</li>

<?php endwhile; ?>
</ul>
</div><!-- /end flexslider -->
</div><!-- /end slider -->

<div id="" class="flex-container sixteen columns hide-on-phones">
</div><!-- /end slider controls -->	

</div>