<?php
/**
 * Custom functions
 */
require_once locate_template('/lib/post-types.php'); 			// Custom Post Types
require_once locate_template('/lib/acf.php');             // Advanced Custom Fields Additions
require_once locate_template('/lib/color.php');           // Color Conversion Function


function count_columns() {
	$rows = get_sub_field('column');
	$row_count = count($rows);

	echo $row_count;
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

/*
function replace_content($content)
{
  //add content that you wish to replace to this array
  $search  = array('-', '—');
  //add content that will replace old content to this array
  $replace = array(' ', ' ');

  $content = str_replace($search, $replace, $content);
  return $content;
}

add_filter('acf/load_value/name=id', 'replace_content');

add_filter('acf/get_sub_field', 'replace_content');
add_filter('get_sub_field', 'replace_content');
*/