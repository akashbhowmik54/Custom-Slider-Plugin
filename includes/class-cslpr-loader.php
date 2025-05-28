<?php
namespace Cslpr\Core;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once CSLPR_PLUGIN_PATH . 'includes/class-cslpr-slider-init.php';

class Cslpr_Loader {

    public function run() {
        Cslpr_Slider_Init::register_services();
    }
}
