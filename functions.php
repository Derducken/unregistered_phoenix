<?php
//Load Shortcodes from separate file...
include('custom-shortcodes.php');

//Custom Menues:
  function wpb_custom_new_menu() {
    register_nav_menu('primary',__( 'Main' ));
    register_nav_menu('hubs',__( 'Hubs' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//Get first paragraph as excerpt
  add_filter( 'wp_trim_excerpt', 'my_custom_excerpt', 10, 2 );

function my_custom_excerpt($text, $raw_excerpt) {
    if( ! $raw_excerpt ) {
        $content = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
        $text = preg_replace("/<img[^>]+\>/i", "", $text);
    }
    return $text;
}

// Add thumbnails-images
if ( function_exists( 'add_theme_support' ) ) {
// Enable thumbnail support
	add_theme_support( 'post-thumbnails' );

  // Add differebt post formats
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'quote', 'video' ) );
}

// "Get first image in post" as the ThumbNail.
add_filter('get_post_metadata', function($value, $object_id, $meta_key, $single) {
	if ($meta_key !== '_thumbnail_id' || $value) {
		return $value;
	}

	preg_match('~<img[^>]+wp-image-(\\d+)~', get_post_field('post_content', $object_id), $matches);
	if ($matches) {
		return $matches[1];
	}
	return $value;
}, 10, 4);
?>
