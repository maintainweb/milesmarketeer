<?php
global $r;
$section_id = get_sub_field('id');
get_template_part('templates/content', 'section-background'); ?>
	<section id="<?php echo $section_id; ?>" class="single-page-section single-page-section-columns single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
    <div class="container">
      <div class="row">
        <?php get_template_part('templates/content', 'columns'); ?>
      </div>
    </div>
	</section>