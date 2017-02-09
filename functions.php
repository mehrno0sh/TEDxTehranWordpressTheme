<?php

// Custom Post Type
function create_about_page_info() {
    register_post_type( 'about-page-info',
        array(
            'labels' => array(
                'name' => __( 'About Page Info' ),
                'singular_name' => __( 'About Page Info' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
            )
        ));
}
add_action( 'init', 'create_about_page_info' );