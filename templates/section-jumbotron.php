<?php
global $r;
$heading = get_sub_field('heading');
$lead = get_sub_field('lead');
$media = get_sub_field('media');
$image = get_sub_field('image');
$video = get_sub_field('video');
$link = get_sub_field('link');
$section_id = get_sub_field('id');

get_template_part('templates/content', 'section-background'); ?>
<style>
  .sky-animation {
    background-size: 75%!important;

  }
</style>
<section id="<?php echo $section_id; ?>" class="sky-animation single-page-section single-page-section-jumbotron single-page-section-<?php echo $r; ?>" <?php get_template_part('templates/data', 'stellar'); ?>>
    <div class="container">
      <div class="jumbotron">
      <a href="/book-flight-plan-vacation/"><div class="paper-airplane-animation"></div></a>
      <a href="/book-flight-plan-vacation/"><div class="airplane-animation"></div></a>
        <h1><?php echo $heading; ?></h1>
        <p class="lead"><?php echo $lead; ?></p>
          <?php if( $link ):
            $post = $link;
            setup_postdata( $post );
          ?>
            <a class="main-image" href="<?php the_permalink(); ?>">
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        <?php get_template_part('templates/content', 'img-responsive'); ?>
          <?php if( $link ): ?>
            </a>
          <?php endif; ?>
        </div>
    </div>
</section>