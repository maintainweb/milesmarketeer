<?php
global $r;
get_template_part('templates/content', 'section-background'); ?>
	<section class="single-page-section single-page-section-columns single-page-section-<?php echo $r; ?>">
    <?php get_template_part('templates/content', 'post-object'); ?>
    <?php count_columns(); ?>
	</section>