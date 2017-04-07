<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php
do_action('get_header');
get_template_part('templates/header');
?>

<header id="page-top">
    <img src="<?=Extras\ImagePath()?>/sldier.jpg">
</header>
<div class="content-wrapper">

  <?php
  get_template_part('templates/portfolio');
  ?>

<section class="section-kontakt" align="center">
	<div style="text-align: center">
        <div>
            <span class="section-title"> Kontakt </span>
        </div>
        <span class="title-separator"></span>
  
    </div>

  <?php
   echo do_shortcode('[contact-form-7 id="44" title="Contact form 1"]');
  ?>
</section>







<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>
</div>
</body>
</html>
