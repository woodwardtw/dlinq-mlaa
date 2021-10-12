<?php 
/*
Plugin Name: DLINQ MLAA Tweaker
Plugin URI:  https://github.com/
Description: For stuff that's magical
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('wp_enqueue_scripts', 'prefix_load_scripts');

function prefix_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.0'; 
    $in_footer = true;    
    wp_enqueue_script('mlaa-mod-main-js', plugin_dir_url( __FILE__) . 'js/mlaa-mod-main.js', $deps, $version, $in_footer); 
    wp_enqueue_style( 'prefix-main-css', plugin_dir_url( __FILE__) . 'css/prefix-main.css');
}


// function tag_cat_both_portfolio( $output, $tag, $attr, $m ) {
//   //var_dump($attr);
//   if ( isset( $attr['super_power']) && $attr['super_power'] === 'fish' ) {
//     var_dump($output);
//   }
//   return $output;
// }
// add_filter( 'do_shortcode_tag', 'tag_cat_both_portfolio', 10, 4 );


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
