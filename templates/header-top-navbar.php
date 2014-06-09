<header class="banner navbar navbar-clear navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php get_template_part('templates/content', 'branding'); ?>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (is_page_template('template-onepagelayout.php')) { ?>
          <ul id="nav-onepagelayout" class="nav navbar-nav navbar-left">
            <?php if( have_rows('sections') ): while ( have_rows('sections') ) : the_row(); ?>
            <?php $section_id = get_sub_field('id'); ?>
            <li class="nav-<?php echo $section_id; ?>"><a href="#<?php echo $section_id; ?>"><?php echo $section_id; ?></a></li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <?php // no sections found ?>
        <?php endif; ?>
        <?php } elseif (has_nav_menu('primary_navigation')) {
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-left'));
        } ?>
      <div class="nav navbar-nav navbar-right">
        <div><a class="btn btn-primary" href="#">Create Account</a></div>
        <div><a class="btn btn-success" href="#">Login</a></div>
      </div>
    </nav>
  </div>
</header>