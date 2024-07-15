<?php
/**
 * Plugin Name: invoice 
 * Description: hello
 * Version: 1.0
 * Author: Rupom
 * Text Domain: EVW 
 * 
 */
if( !defined('ABSPATH') ) exit;
define('EVW_PATH',plugin_dir_path(__FILE__));
define('EVW_DIR',plugin_dir_url(__FILE__));
/** includes */
include EVW_PATH . '/includes/shortcode.php';

add_action('wp_enqueue_scripts','calpb_enqueue');
function calpb_enqueue(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('evw_jspdf_plugin_html_script', EVW_DIR . 'assets/js/jspdf.js', false, time(), true );
    wp_enqueue_script('evw_html2canvas_script', EVW_DIR . 'assets/js/html2canvas.js', false, time(), true );
    wp_enqueue_script('evw_jspdf_script', EVW_DIR . 'assets/js/html.js', false, time(), true );
    wp_enqueue_script('evw_script', EVW_DIR . 'assets/js/script.js', array('jquery'), time(), true );
    // style
    wp_enqueue_style('evw_style', EVW_DIR . 'assets/css/style.css' );
}