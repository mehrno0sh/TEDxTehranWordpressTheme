<?php

function create_about_page_info()
{
    register_post_type('about-page-info',
        array(
            'labels' => array(
                'name' => __('About Page Info Items'),
                'singular_name' => __('About Page Info Item'),
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
                'singular_name' => __('Social Link'),
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


function create_speakers()
{
    register_post_type('speakers',
        array(
            'labels' => array(
                'name' => __('Speakers'),
                'singular_name' => __('Speaker'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'thumbnail',
                'page-attributes'
            )
        ));
}

add_action('init', 'create_speakers');

add_theme_support( 'title-tag' );