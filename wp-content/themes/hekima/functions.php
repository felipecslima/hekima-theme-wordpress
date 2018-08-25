<?php

add_filter('template_include', 'var_template_include', 1000);
function var_template_include($t)
{
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template($echo = false)
{
    if (!isset($GLOBALS['current_theme_template']))
        return false;
    if ($echo)
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts()
{

    wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
    wp_enqueue_script('modernizr');

    wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
    wp_enqueue_script('require');

    wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('require'), false, true);
    wp_enqueue_script('global');

    wp_register_script('livereload', 'http://hekima.local:35729/livereload.js?snipver=1', null, false, true);
    wp_enqueue_script('livereload');

    wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks()
{
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus()
{
    register_nav_menus(
        array(
            'main-nav' => 'Main Navigation',
            'secondary-nav' => 'Secondary Navigation',
            'sidebar-menu' => 'Sidebar Menu'
        )
    );
}

add_action('init', 'register_menus');

function register_widgets()
{

    register_sidebar(array(
        'name' => __('Sidebar'),
        'id' => 'main-sidebar',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}//end register_widgets()
add_action('widgets_init', 'register_widgets');

wp_register_script('livereload', 'http://hekima.local:35729/livereload.js?snipver=1', null, false, true);


function create_post_type()
{
    register_post_type('hkm-partners',
        array(
            'supports' => array('title', 'editor', 'thumbnail'),
            'labels' => array(
                'name' => __('Parceiros'),
                'singular_name' => __('Parceiro')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'parceiros'),
        )
    );
}

add_action('init', 'create_post_type');