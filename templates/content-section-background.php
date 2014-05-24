<?php
global $r;
$background = get_sub_field('section_background_image');
         
  if( !empty($background) ): 

    // vars
    $url = $background['url'];
    $title = $background['title'];
    $alt = $background['alt'];
    $caption = $background['caption'];
         
    // sizes
    $size = 'medium';
    $med = $background['sizes'][ $size ];
    $medwidth = $background['sizes'][ $size . '-width' ];
    $medheight = $background['sizes'][ $size . '-height' ];

?>

  <style>
    .single-page-section-<?php echo $r; ?> {
      background-image: url(<?php echo $med; ?>);
    }
  </style>

<?php endif; ?>