<?php get_header(); ?>

<h1 class="rad">Hello World Leaders</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php else : ?>
  <h2>No Posts Found</h2>
<?php endif; ?>


<?php  
	$layout = get_option('xbones_respond_description');
	echo $layout;
?>

<?php get_footer(); ?>