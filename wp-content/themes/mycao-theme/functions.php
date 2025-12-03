<?php
/**
 * myCAO Theme Functions
 *
 * @package myCAO
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function mycao_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'mycao'),
        'footer'    => __('Footer Menu', 'mycao'),
    ));
}
add_action('after_setup_theme', 'mycao_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function mycao_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'mycao-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    
    // Theme stylesheet
    wp_enqueue_style(
        'mycao-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Theme JavaScript
    wp_enqueue_script(
        'mycao-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mycao_enqueue_scripts');

/**
 * Register Widget Areas
 */
function mycao_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'mycao'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here for footer column 1.', 'mycao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'mycao'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here for footer column 2.', 'mycao'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'mycao_widgets_init');

/**
 * Custom Excerpt Length
 */
function mycao_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'mycao_excerpt_length');

/**
 * Custom Excerpt More
 */
function mycao_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'mycao_excerpt_more');

/**
 * Add custom image sizes
 */
function mycao_custom_image_sizes() {
    add_image_size('mycao-hero', 1200, 800, true);
    add_image_size('mycao-feature', 600, 400, true);
    add_image_size('mycao-card', 400, 300, true);
}
add_action('after_setup_theme', 'mycao_custom_image_sizes');

/**
 * Customizer Settings
 */
function mycao_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('mycao_hero_section', array(
        'title'    => __('Hero Section', 'mycao'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Your Chief Accounting Officer in the Cloud',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'mycao'),
        'section' => 'mycao_hero_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Modern Cloud-Based Accounting ERP System',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'mycao'),
        'section' => 'mycao_hero_section',
        'type'    => 'textarea',
    ));
    
    // Contact Information
    $wp_customize->add_section('mycao_contact_section', array(
        'title'    => __('Contact Information', 'mycao'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@mycao.app',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'mycao'),
        'section' => 'mycao_contact_section',
        'type'    => 'email',
    ));
    
    $wp_customize->add_setting('github_url', array(
        'default'           => 'https://github.com/tundock007/myCAO',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('github_url', array(
        'label'   => __('GitHub URL', 'mycao'),
        'section' => 'mycao_contact_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'mycao_customize_register');

/**
 * Get theme mod helper with default
 */
function mycao_get_theme_mod($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Register Custom Rewrite Rules for Legal Pages
 */
function mycao_add_rewrite_rules() {
    add_rewrite_rule('^privacy-policy/?$', 'index.php?mycao_page=privacy-policy', 'top');
    add_rewrite_rule('^eula/?$', 'index.php?mycao_page=eula', 'top');
}
add_action('init', 'mycao_add_rewrite_rules');

/**
 * Register Custom Query Vars
 */
function mycao_query_vars($vars) {
    $vars[] = 'mycao_page';
    return $vars;
}
add_filter('query_vars', 'mycao_query_vars');

/**
 * Load Custom Templates for Legal Pages
 */
function mycao_template_include($template) {
    $mycao_page = get_query_var('mycao_page');
    
    if ($mycao_page === 'privacy-policy') {
        $new_template = locate_template('page-privacy-policy.php');
        if ($new_template) {
            return $new_template;
        }
    }
    
    if ($mycao_page === 'eula') {
        $new_template = locate_template('page-eula.php');
        if ($new_template) {
            return $new_template;
        }
    }
    
    return $template;
}
add_filter('template_include', 'mycao_template_include');

/**
 * Flush Rewrite Rules on Theme Activation
 */
function mycao_flush_rewrite_rules() {
    mycao_add_rewrite_rules();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'mycao_flush_rewrite_rules');
