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
            <?php $section_id_mod = str_replace("-", " ", $section_id); ?>
            <li class="nav-<?php echo $section_id; ?>"><a href="#<?php echo $section_id; ?>"><?php echo $section_id_mod; ?></a></li>
            <?php endwhile; ?>
            <li class="visible-xs hidden-sm hidden-md hidden-lg"><a class="" href="/create-account/">Create Account</a></li>
            <li class="visible-xs hidden-sm hidden-md hidden-lg"><a class="" href="/login/">Login</a></li>
          </ul>
        <?php else : ?>
          <?php // no sections found ?>
        <?php endif; ?>
        <?php } elseif (has_nav_menu('primary_navigation')) {
          wp_nav_menu(array(
                      'theme_location' => 'primary_navigation',
                      'menu_class' => 'nav navbar-nav navbar-left',
                      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<li class="visible-xs hidden-sm hidden-md hidden-lg"><a class="" href="/create-account/">Create Account</a></li>
            <li class="visible-xs hidden-sm hidden-md hidden-lg"><a class="" href="/login/">Login</a></li></ul>',
                      ));
        } ?>
      <div class="hidden-xs nav navbar-nav navbar-right">
        <div><a class="btn btn-primary" href="/create-account/">Create Account</a></div>
        <div><a class="btn btn-success" href="/login/">Login</a></div>
      </div>
    </nav>
  </div>
</header>