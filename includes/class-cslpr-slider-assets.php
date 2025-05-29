<?php
namespace Cslpr\Includes;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Cslpr_Slider_Assets {

    public function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
    }

    public function register_assets() {
        $version = CSLPR_VERSION;

        // CSS
        wp_register_style(
            'cslpr-slider-style',
            CSLPR_PLUGIN_URL . 'assets/css/slider-style.css',
            [],
            $version,
            'all'
        );

        // JavaScript
        wp_register_script(
            'cslpr-slider-script',
            CSLPR_PLUGIN_URL . 'assets/js/slider-script.js',
            [ 'jquery' ],
            $version,
            true
        );
    }

    /**
     * Enqueue assets for frontend display
     */
    public static function enqueue_frontend_assets() {
        wp_enqueue_style( 'cslpr-slider-style' );
        wp_enqueue_script( 'cslpr-slider-script' );
    }
}
