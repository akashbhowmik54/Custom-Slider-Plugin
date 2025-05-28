<?php
namespace Cslpr\Core;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Register individual service classes
require_once CSLPR_PLUGIN_PATH . 'includes/class-cslpr-slider-post-type.php';
require_once CSLPR_PLUGIN_PATH . 'includes/class-cslpr-slider-assets.php';
require_once CSLPR_PLUGIN_PATH . 'includes/class-cslpr-slider-shortcode.php';

use Cslpr\Includes\Cslpr_Slider_Post_Type;
use Cslpr\Includes\Cslpr_Slider_Assets;
use Cslpr\Includes\Cslpr_Slider_Shortcode;

class Cslpr_Slider_Init {

    public static function get_services() {
        return [
            Cslpr_Slider_Post_Type::class,
            Cslpr_Slider_Assets::class,
            Cslpr_Slider_Shortcode::class,
        ];
    }

    public static function register_services() {
        foreach ( self::get_services() as $class ) {
            if ( class_exists( $class ) ) {
                new $class();
            }
        }
    }
}
