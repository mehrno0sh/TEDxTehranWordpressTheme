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


function create_team_members()
{
    register_post_type('team-members',
        array(
            'labels' => array(
                'name' => __('Team Members'),
                'singular_name' => __('Team Member'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
            )
        ));
}

add_action('init', 'create_team_members');


function create_sponsors()
{
    register_post_type('sponsors',
        array(
            'labels' => array(
                'name' => __('Sponsors'),
                'singular_name' => __('Sponsor'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
            )
        ));
}

add_action('init', 'create_sponsors');

function create_press()
{
    register_post_type('press',
        array(
            'labels' => array(
                'name' => __('Press'),
                'singular_name' => __('Press'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
            )
        ));
}

add_action('init', 'create_press');

add_theme_support('title-tag');