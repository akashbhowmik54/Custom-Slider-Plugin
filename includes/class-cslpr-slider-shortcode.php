<?php
namespace Cslpr\Includes;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Cslpr_Slider_Shortcode {

    public function __construct() {
        add_shortcode( 'cslpr_slider', [ $this, 'render_slider_shortcode' ] );
    }

    public function render_slider_shortcode( $atts ) {

        Cslpr_Slider_Assets::enqueue_frontend_assets();

        ob_start();

        $query = new \WP_Query([
            'post_type'      => 'cslpr_slider',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ]);

        if ( $query->have_posts() ) {
            include CSLPR_PLUGIN_PATH . 'templates/slider-template.php';
        }

        wp_reset_postdata();
        return ob_get_clean();
    }
}
