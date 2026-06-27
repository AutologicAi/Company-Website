<?php
/**
 * autologicAI Modern — theme functions.
 *
 * @package autologicai
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

define( 'AUTOLOGICAI_VERSION', '1.0.0' );

if ( ! function_exists( 'autologicai_setup' ) ) :
	/**
	 * Core theme setup.
	 */
	function autologicai_setup() {
		load_theme_textdomain( 'autologicai', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 48,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'autologicai' ),
				'footer'  => __( 'Footer Menu', 'autologicai' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'autologicai_setup' );

/**
 * Enqueue styles and scripts.
 */
function autologicai_assets() {
	// Google Fonts — Inter + Space Grotesk for a modern AI-product feel.
	wp_enqueue_style(
		'autologicai-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'autologicai-style',
		get_stylesheet_uri(),
		array(),
		AUTOLOGICAI_VERSION
	);

	wp_enqueue_style(
		'autologicai-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'autologicai-style' ),
		AUTOLOGICAI_VERSION
	);

	wp_enqueue_script(
		'autologicai-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		AUTOLOGICAI_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'autologicai_assets' );

/**
 * Register widget areas.
 */
function autologicai_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'autologicai' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in the footer.', 'autologicai' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'autologicai_widgets_init' );

/**
 * Fallback menu when no primary menu is assigned.
 * Keeps the redesigned header usable on a fresh install.
 */
function autologicai_default_menu() {
	$items = array(
		home_url( '/' )            => __( 'Home', 'autologicai' ),
		home_url( '/#services' )   => __( 'Services', 'autologicai' ),
		home_url( '/#solutions' )  => __( 'Solutions', 'autologicai' ),
		home_url( '/#why' )        => __( 'Why Us', 'autologicai' ),
		home_url( '/#contact' )    => __( 'Contact', 'autologicai' ),
	);

	echo '<ul id="primary-menu" class="nav-menu">';
	foreach ( $items as $url => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_url( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}

/**
 * Lightweight helper to output an inline SVG icon by name.
 *
 * @param string $name Icon key.
 */
function autologicai_icon( $name ) {
	$icons = array(
		'ai'         => '<path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/><circle cx="12" cy="12" r="4"/>',
		'modernize'  => '<path d="M4 7V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2M4 7h16M4 7v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7M9 13l2 2 4-4"/>',
		'data'       => '<ellipse cx="12" cy="5" rx="8" ry="3"/><path d="M4 5v6c0 1.66 3.58 3 8 3s8-1.34 8-3V5M4 11v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6"/>',
		'integrate'  => '<path d="M8 7H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h3M16 7h3a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2h-3M8 12h8"/>',
		'quality'    => '<path d="M9 12l2 2 4-4M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>',
		'cloud'      => '<path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6 1.5A4 4 0 0 0 6 19h11.5z"/>',
		'spark'      => '<path d="M12 3l1.9 4.6L18.5 9.5 13.9 11.4 12 16l-1.9-4.6L5.5 9.5l4.6-1.9z"/>',
		'arrow'      => '<path d="M5 12h14M13 6l6 6-6 6"/>',
		'check'      => '<path d="M20 6L9 17l-5-5"/>',
		'mail'       => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
		'pin'        => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
	);

	$path = isset( $icons[ $name ] ) ? $icons[ $name ] : $icons['spark'];

	return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}
