<?php

// Shortcode: POSTINTRO
function postintro_bb_shortcode( $atts ) {
  // remove equals sign from first unnamed param
  if ( isset( $atts[0] ) && strpos( $atts[0], '=' ) !== false ) {
    $atts[0] = substr( $atts[0], 1 );
  }
  // Param array to string
  $intro = is_array( $atts ) ? implode( ' ', $atts ) : '';
  return '<p class="postintro">' . esc_html( $intro ) . '</p>';
}
add_shortcode( 'postintro', 'postintro_bb_shortcode' );






// Shortcode: YOUTUBE
function youtube_shortcode( $atts ) {
  // remove equals sign from first unnamed param
  if ( isset( $atts[0] ) && strpos( $atts[0], '=' ) !== false ) {
    $atts[0] = substr( $atts[0], 1 );
  }
  // Param array to string
  $youtube = is_array( $atts ) ? implode( ' ', $atts ) : '';
  return '<div class="youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/' . esc_html( $youtube ) . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
add_shortcode( 'youtube', 'youtube_shortcode' );







// Shortcode: NOTES
function postnote_function( $atts, $content = null ) {
    return '<div class="note corebox"><h3>Note</h3><p>' . $content . '</p></div>';
}
add_shortcode('note', 'postnote_function');

// Shortcode: INFO
function postinfo_function( $atts, $content = null ) {
    return '<div class="info corebox"><h3>Info</h3><p>' . $content . '</p></div>';
}
add_shortcode('info', 'postinfo_function');

// Shortcode: ALERT
function postalert_function( $atts, $content = null ) {
    return '<div class="alert corebox"><h3>Alert</h3><p>' . $content . '</p></div>';
}
add_shortcode('alert', 'postalert_function');

// Shortcode: QUOTE
function postalert_function( $atts, $content = null ) {
    return '<div class="quote corebox"><h3>Quote</h3><p>' . $content . '</p></div>';
}
add_shortcode('quote', 'postalert_function');


?>
