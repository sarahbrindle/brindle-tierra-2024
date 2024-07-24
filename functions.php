<?php

// Config for the Soil plugin
add_theme_support('soil', [
    'clean-up',
    //'disable-rest-api',
    'disable-asset-versioning',
    'disable-trackbacks',
    // 'google-analytics' => 'UA-XXXXX-Y',
    'js-to-footer',
    'nav-walker',
    'nice-search',
    'relative-urls'
]);

// Enqueue JS and CSS
function enqueue_assets() {
    // Change the links depending on whether we're in dev or shipping prod
    $directory = is_dir(dirname(__FILE__).'/dist') ? "/dist" : "";
   // $directory ='';
	//$js_version  = date("ymd-Gis", filemtime(get_stylesheet_directory() . $directory . '/js/app.js'));
	//$css_version = date("ymd-Gis", filemtime(get_stylesheet_directory() . $directory . '/css/app.css'));
   /* wp_enqueue_script('app_js', get_template_directory_uri() . $directory . '/js/app.js', array(), $js_version, false);
    wp_enqueue_style('app_css', get_template_directory_uri() . $directory . '/css/app.css', array(), $css_version, false);
    */
   // wp_enqueue_script('app_js', get_stylesheet_directory_uri() . $directory . '/js/app.js', array(), $js_version, false);
   // wp_enqueue_style('app_css', get_stylesheet_directory_uri() . $directory . '/css/app.css', array(), $css_version, false);
   // wp_enqueue_style('app_css', get_stylesheet_directory_uri() . $directory . '/style.css', array(), $css_version, false);
}
add_action('wp_enqueue_scripts', 'enqueue_assets');

// Remove editor from pages and posts as we'll be using ACF for everything
add_action('init', function() {
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
}, 99);


//Meta support
add_theme_support( 'title-tag' );

// Register Menus
function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'full-screen-menu' => __('Full Screen Menu'),
            'footer-left-menu' => __('Footer Left Menu'),
            'footer-right-menu' => __('Footer Right Menu'),
            'social-menu' => __('Social Menu')
        )
    );
}
add_action('init', 'register_menus');

// Register ACF global options pages
if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Global Styles',
        'menu_title'    => 'Global Styles',
        'parent_slug'   => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings'
    ));
}

// Create pretty names for acf-json files
function custom_acf_json_filename($filename, $post, $load_path) {
    $filename = str_replace(
        array(
            ' ',
            '_',
        ),
        array(
            '-',
            '-'
        ),
        $post['title']
    );

    $filename = strtolower($filename) . '.json';

    return $filename;
}
add_filter('acf/json/save_file_name', 'custom_acf_json_filename', 10, 3);


// Get google fonts import string
function get_weights_string($weights_array) {
    $font_weights_string = "";
    $i = 0;
    foreach($weights_array as $weight) {
        $i++;
        if ($i < count($weights_array)) {
            $font_weights_string .= $weight['weight'] . ";";
        } else {
            $font_weights_string .= $weight['weight'];
        }
    }
    return $font_weights_string;
}

function get_import_string($fonts) {
    $headings_weights_string = get_weights_string($fonts['headings']['font_weights']);
    $body_copy_weights_string = get_weights_string($fonts['body_copy']['font_weights']);
    $subheadings_weights_string = get_weights_string($fonts['subheadings']['font_weights']);

    $import_string = "https://fonts.googleapis.com/css2?family={$fonts['subheadings']['font_name']}:wght@{$subheadings_weights_string}&family={$fonts['headings']['font_name']}:wght@{$headings_weights_string}&family={$fonts['body_copy']['font_name']}:wght@{$body_copy_weights_string}&display=swap";

    return $import_string;
}

// Get the font families for the global styles

function get_font($font_type) {
    switch ($font_type) {
        case "headings":
            return "var(--headings)";
            break;
        case "body_copy":
            return "var(--body-copy)";
            break;
        case "subheadings":
            return "var(--subheadings)";
            break;
    }
}

// function that runs when shortcode is called
function wpb_demo_shortcode($atts = [], $content = null, $tag = '') { 
// Things that you want to do.
if (isset($atts['imageurl'])) {
    $message = '<div><img style="min-width:100%;max-width:100%;" src="' . $atts['imageurl'] . '" /></div>'; 
} else {
    $message = '<div style="border:1px solid #fff;padding:56px;">Shortcode Test</div>'; 
}
  
// Output needs to be return
return $message;
}
// register shortcode
add_shortcode('shortcode-test', 'wpb_demo_shortcode');