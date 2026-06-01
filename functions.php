<?php
/**
 * Joan Theme Functions and Definitions
 */

if ( ! function_exists( 'joan_theme_setup' ) ) :
	function joan_theme_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'joan' ),
			'footer_links' => esc_html__( 'Footer Links (المزيد عنا)', 'joan' ),
			'footer_services' => esc_html__( 'Footer Services (خدماتنا)', 'joan' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'joan_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function joan_scripts() {
	wp_enqueue_style( 'joan-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    
	wp_enqueue_script( 'joan-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'joan_scripts' );

/**
 * Customizer additions.
 */
function joan_customize_register( $wp_customize ) {
	// Hero Section
	$wp_customize->add_section( 'joan_hero_section', array(
		'title'       => __( 'Hero Section', 'joan' ),
		'priority'    => 30,
	) );

	$wp_customize->add_setting( 'joan_hero_title', array(
		'default'           => 'مستقبل الاستثمار العقاري',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'joan_hero_title', array(
		'label'    => __( 'Hero Title', 'joan' ),
		'section'  => 'joan_hero_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting( 'joan_hero_subtitle', array(
		'default'           => 'اكتشف أرقى المشاريع العقارية في العاصمة الإدارية الجديدة',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'joan_hero_subtitle', array(
		'label'    => __( 'Hero Subtitle', 'joan' ),
		'section'  => 'joan_hero_section',
		'type'     => 'textarea',
	) );
    
    $wp_customize->add_setting( 'joan_hero_btn_text', array(
		'default'           => 'تواصل معنا',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'joan_hero_btn_text', array(
		'label'    => __( 'Button Text', 'joan' ),
		'section'  => 'joan_hero_section',
		'type'     => 'text',
	) );

	$wp_customize->add_setting( 'joan_hero_btn_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'joan_hero_btn_url', array(
		'label'    => __( 'Button URL', 'joan' ),
		'section'  => 'joan_hero_section',
		'type'     => 'url',
	) );
}
add_action( 'customize_register', 'joan_customize_register' );
