<footer class="content-info" role="contentinfo">
  <div class="container">
  	<div class="row">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
      <div class="navbar-footer">
    	<p class="navbar-text">&copy; <?php echo date('Y'); ?> <a class="navbar-link" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></p>
        <?php if (has_nav_menu('footer_navigation')) {
          wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav'));
        } ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>