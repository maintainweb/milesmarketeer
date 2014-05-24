<?php 
        if( get_field('use_white_version', 'options') )
        {
          $brandimage = get_field('brand_image_white', 'options');
        }
        else
        {
          $brandimage = get_field('brand_image', 'options');
        }

        $primarycolor = get_field('primary_color', 'options');
        $secondarycolor = get_field('secondary_color', 'options');
        $tertiarycolor = get_field('tertiary_color', 'options');
         
        if( !empty($brandimage) ): 

          // vars
          $url = $brandimage['url'];
          $title = $brandimage['title'];
          $alt = $brandimage['alt'];
          $caption = $brandimage['caption'];
         
          // sizes
          $size = 'medium';
          $med = $brandimage['sizes'][ $size ];
          $medwidth = $brandimage['sizes'][ $size . '-width' ];
          $medheight = $brandimage['sizes'][ $size . '-height' ];

?>

  <style>
    .brand {
      background-image: url(<?php echo $med; ?>);
      background-color: <?php echo $secondarycolor; ?>;
      width: <?php echo $medwidth; ?>;
      height: <?php echo $medheight; ?>;
    }
  </style>

<?php endif; ?>