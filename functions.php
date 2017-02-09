<?php

function create_about_page_info()
{
    register_post_type('about-page-info',
        array(
            'labels' => array(
                'name' => __('About Page Info'),
                'singular_name' => __('About Page Info'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
            )
        ));
}

add_action('init', 'create_about_page_info');

function create_social_link()
{
    register_post_type('social-links',
        array(
            'labels' => array(
                'name' => __('Social Links'),
                'singular_name' => __('Social Links'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'excerpt',
                'custom-fields'
            )
        ));
}
add_action('init', 'create_social_link');


add_theme_support( 'title-tag' );