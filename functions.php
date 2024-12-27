<?php
function portfolio_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    
    // Menü kayıtları burada yapılıyor
    register_nav_menus([
        'header-menu' => esc_html__('Header Menu', 'portfolio-theme'),
        'footer-menu' => esc_html__('Footer Menu', 'portfolio-theme')
    ]);
}
add_action('after_setup_theme', 'portfolio_theme_setup');

// Stil dosyalarını yükle
function portfolio_theme_scripts() {
    wp_enqueue_style('portfolio-theme-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');

// Customizer ayarları
function portfolio_customize_register($wp_customize) {
    // Header Settings
    $wp_customize->add_section('header_settings', array(
        'title' => __('Header Settings', 'portfolio'),
        'priority' => 20,
    ));

    // Logo Text
    $wp_customize->add_setting('header_logo_text', array(
        'default' => 'A',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('header_logo_text', array(
        'label' => __('Logo Text', 'portfolio'),
        'section' => 'header_settings',
        'type' => 'text'
    ));

    // Hero Section Settings
    $wp_customize->add_section('hero_settings', array(
        'title' => __('Hero Section', 'portfolio'),
        'priority' => 30,
    ));

    // Name
    $wp_customize->add_setting('portfolio_name', array(
        'default' => 'Your Name',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('portfolio_name', array(
        'label' => __('Your Name', 'portfolio'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    // Title
    $wp_customize->add_setting('portfolio_title', array(
        'default' => 'Your Title',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('portfolio_title', array(
        'label' => __('Your Title', 'portfolio'),
        'section' => 'hero_settings',
        'type' => 'text'
    ));

    // Profile Image
    $wp_customize->add_setting('portfolio_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_image', array(
        'label' => __('Profile Image', 'portfolio'),
        'section' => 'hero_settings'
    )));

    // CV File
    $wp_customize->add_setting('portfolio_cv_file', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'portfolio_cv_file', array(
        'label' => __('CV File', 'portfolio'),
        'section' => 'hero_settings'
    )));

    // Social Media Settings
    $wp_customize->add_section('social_settings', array(
        'title' => __('Social Media Links', 'portfolio'),
        'priority' => 40,
    ));

    // Social Media URLs
    $social_platforms = array('instagram', 'facebook', 'twitter', 'youtube');
    
    foreach($social_platforms as $platform) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize->add_control('social_' . $platform, array(
            'label' => ucfirst($platform) . ' URL',
            'section' => 'social_settings',
            'type' => 'url'
        ));
    }

    // Footer Settings
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'portfolio'),
        'priority' => 50,
    ));

    // Footer Text
    $wp_customize->add_setting('footer_tagline', array(
        'default' => 'Your footer tagline here',
        'sanitize_callback' => 'wp_kses_post'
    ));

    $wp_customize->add_control('footer_tagline', array(
        'label' => __('Footer Tagline', 'portfolio'),
        'section' => 'footer_settings',
        'type' => 'textarea'
    ));

    // Location
    $wp_customize->add_setting('footer_location', array(
        'default' => 'Your Location',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('footer_location', array(
        'label' => __('Location', 'portfolio'),
        'section' => 'footer_settings',
        'type' => 'text'
    ));

    // About Section Settings
$wp_customize->add_section('about_settings', array(
    'title' => __('About Section', 'portfolio'),
    'priority' => 35,
));

// About Description
$wp_customize->add_setting('about_description', array(
    'default' => 'Hello! I\'m a UI/UX designer and Flutter developer. Dive into my portfolio to discover a fusion of elegant design and seamless Flutter development. Welcome to a world where creativity meets functionality!',
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('about_description', array(
    'label' => __('About Description', 'portfolio'),
    'section' => 'about_settings',
    'type' => 'textarea'
));

// Services Section Settings
$wp_customize->add_section('services_settings', array(
    'title' => __('Services Section', 'portfolio'),
    'priority' => 36,
));

// Services Intro
$wp_customize->add_setting('services_intro', array(
    'default' => 'Embark on a journey of digital transformation with services that blend design brilliance with cutting-edge development. Let\'s create experiences that resonate and applications that captivate.',
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('services_intro', array(
    'label' => __('Services Introduction', 'portfolio'),
    'section' => 'services_settings',
    'type' => 'textarea'
));

// Service 1
$wp_customize->add_setting('service_1_title', array(
    'default' => 'UI/UX Designer',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('service_1_title', array(
    'label' => __('Service 1 Title', 'portfolio'),
    'section' => 'services_settings',
    'type' => 'text'
));

$wp_customize->add_setting('service_1_description', array(
    'default' => 'Crafting captivating interfaces that resonate. From wireframes to polished designs, I make sure your digital presence stands out with user-centric creativity.',
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('service_1_description', array(
    'label' => __('Service 1 Description', 'portfolio'),
    'section' => 'services_settings',
    'type' => 'textarea'
));

// Service 2
$wp_customize->add_setting('service_2_title', array(
    'default' => 'Flutter Developer',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('service_2_title', array(
    'label' => __('Service 2 Title', 'portfolio'),
    'section' => 'services_settings',
    'type' => 'text'
));

$wp_customize->add_setting('service_2_description', array(
    'default' => 'Turning app ideas into reality. As a Flutter developer, I build sleek, cross-platform applications for a seamless user experience and efficient performance.',
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('service_2_description', array(
    'label' => __('Service 2 Description', 'portfolio'),
    'section' => 'services_settings',
    'type' => 'textarea'
));

// About Section Settings
$wp_customize->add_section('about_settings', array(
    'title' => __('About Section', 'portfolio'),
    'priority' => 30,
));

// About Image
$wp_customize->add_setting('about_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
    'label' => __('About Image', 'portfolio'),
    'section' => 'about_settings',
    'settings' => 'about_image'
)));

// About Title
$wp_customize->add_setting('about_title', array(
    'default' => 'Software Engineer',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('about_title', array(
    'label' => __('About Title', 'portfolio'),
    'section' => 'about_settings',
    'type' => 'text'
));

// About Description
$wp_customize->add_setting('about_description', array(
    'default' => 'Hello! I\'m a UI/UX designer and Flutter developer...',
    'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control('about_description', array(
    'label' => __('About Description', 'portfolio'),
    'section' => 'about_settings',
    'type' => 'textarea'
));
}
add_action('customize_register', 'portfolio_customize_register');


function add_custom_scripts() {
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');
