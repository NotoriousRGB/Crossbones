<?php get_header(); ?>

<div id="" class="sixteen columns bordertop">
</div><!-- / -->




<div id="" class="four columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php echo get_the_title(); ?>

<?php endwhile; ?>

<?php else : ?>
<h2>No Posts Found</h2>
<?php endif; ?>
</div><!-- / -->



<div id="" class="twelve columns">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php echo get_the_content(); ?>

<?php endwhile; ?>

<?php else : ?>
<h2>No Posts Found</h2>
<?php endif; ?>

</div><!-- / -->





<?php get_footer(); ?>