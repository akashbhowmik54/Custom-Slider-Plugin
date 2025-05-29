<?php
namespace Cslpr\Includes;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Cslpr_Slider_Post_Type {

    public function __construct() {
        add_action( 'init', [ $this, 'register_slider_post_type' ] );
    }

    public function register_slider_post_type() {
        $labels = [
            'name'               => __( 'Sliders', 'custom-slider-plugin' ),
            'singular_name'      => __( 'Slider', 'custom-slider-plugin' ),
            'menu_name'          => __( 'Custom Sliders', 'custom-slider-plugin' ),
            'name_admin_bar'     => __( 'Slider', 'custom-slider-plugin' ),
            'add_new'            => __( 'Add New', 'custom-slider-plugin' ),
            'add_new_item'       => __( 'Add New Slider', 'custom-slider-plugin' ),
            'new_item'           => __( 'New Slider', 'custom-slider-plugin' ),
            'edit_item'          => __( 'Edit Slider', 'custom-slider-plugin' ),
            'view_item'          => __( 'View Slider', 'custom-slider-plugin' ),
            'all_items'          => __( 'All Sliders', 'custom-slider-plugin' ),
            'search_items'       => __( 'Search Sliders', 'custom-slider-plugin' ),
            'not_found'          => __( 'No sliders found.', 'custom-slider-plugin' ),
            'not_found_in_trash' => __( 'No sliders found in Trash.', 'custom-slider-plugin' ),
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_position'      => 20,
            'menu_icon'          => 'dashicons-images-alt2',
            'supports'           => [ 'title', 'thumbnail' ],
            'has_archive'        => false,
            'rewrite'            => [ 'slug' => 'cslpr-slider' ],
            'show_in_rest'       => true,
        ];

        register_post_type( 'cslpr_slider', $args );
    }
}
