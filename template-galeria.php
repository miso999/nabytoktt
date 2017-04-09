<?php
/**
 * Template Name: Galéria
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/galeria');  ?>
<?php endwhile; ?>
