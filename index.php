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

add_action('wp_enqueue_scripts','evw_invoice_enqueue');
function evw_invoice_enqueue(){
    wp_enqueue_style('evw_style', EVW_DIR . 'assets/css/style.css' );
    // js 
    wp_enqueue_script('jquery');
    wp_enqueue_script('evw_jspdf_plugin_html_script', EVW_DIR . 'assets/js/jspdf.js', false, time(), true );
    wp_enqueue_script('evw_html2canvas_script', EVW_DIR . 'assets/js/html2canvas.js', false, time(), true );
    wp_enqueue_script('evw_jspdf_script', EVW_DIR . 'assets/js/html.js', false, time(), true );
    wp_enqueue_script( 'evw_loading_js', EVW_DIR. 'assets/js/loading.js', array('jquery'), time(), true );
    wp_enqueue_script('evw_script', EVW_DIR . 'assets/js/script.js', array('jquery'), time(), true );
    wp_localize_script( 'evw_script', 'localize_data', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ] );
}

add_action( 'woocommerce_view_order', 'add_download_button_to_order_details' );
function add_download_button_to_order_details( $order_id ) {
  $order = wc_get_order($order_id);
  include EVW_PATH . '/template/invoice.php';
  ?>  
    <div class="evw_download_print_btns">
      <button class="evw_btn evw_download_btn">
          <span>Download Invoice</span>
      </button>
    </div>
  <?php
}