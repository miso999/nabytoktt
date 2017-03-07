<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
  <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php
do_action('get_header');
get_template_part('templates/header');
?>

<header id="page-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="intro-text">
          <span class="name">Nábytok na mieru</span>
          <hr class="star-light">
          <p class="skills">Landing Page Layout</p>
          <p class="skills">Scroll to see the effect</p>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="content-wrapper">
  <?php
  get_template_part('templates/portfolio');
  ?>







<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</div>
</body>
</html>
