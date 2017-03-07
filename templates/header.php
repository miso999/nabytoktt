<nav class="navbar navbar-toggleable-md fixed-top navbar-light bg-header">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?=get_home_url();?>"><img height="50" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"> </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
    endif;
    ?>
  </div>
</nav>




<header id="page-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <img class="img-responsive" src="http://ironsummitmedia.github.io/startbootstrap-freelancer/img/profile.png" alt="">
        <div class="intro-text">
          <span class="name">Inspired by PureCSS.io</span>
          <hr class="star-light">
          <p class="skills">Landing Page Layout</p>
          <p class="skills">Scroll to see the effect</p>
        </div>
      </div>
    </div>
  </div>
</header>

