<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_title(); ?>
<hr>
<?php endwhile; ?>
<?php else : ?>
<h2>No Posts Found</h2>
<?php endif; ?>




		

<?php get_footer(); ?>