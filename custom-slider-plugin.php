<?php
/**
 * Plugin Name:       Custom Slider Plugin
 * Description:       A custom slider plugin built with OOP, SOLID, DRY, and KISS principles.
 * Version:           1.0.0
 * Author:            Akash Kumar Bhowmik
 * Text Domain:       custom-slider-plugin
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CSLPR_VERSION', '1.0.0' );
define( 'CSLPR_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CSLPR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Autoload classes
require_once CSLPR_PLUGIN_PATH . 'includes/class-cslpr-loader.php';

use Cslpr\Core\Cslpr_Loader;

function cslpr_run_plugin() {
    $plugin = new Cslpr_Loader();
    $plugin->run();
}
add_action( 'plugins_loaded', 'cslpr_run_plugin' );
