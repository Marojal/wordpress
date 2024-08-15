<?php
/**
 * Exclusive News functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Exclusive News
 */

if ( ! function_exists( 'exclusive_news_setup' ) ) :
	function exclusive_news_setup() {
		/*
		* Make child theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
		load_child_theme_textdomain( 'exclusive-news', get_stylesheet_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'register_block_pattern' );

		add_theme_support( 'register_block_style' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'exclusive_news_setup' );

if ( ! function_exists( 'exclusive_news_enqueue_styles' ) ) :
	/**
	 * Enqueue scripts and styles.
	 */
	function exclusive_news_enqueue_styles() {
		$parenthandle = 'elite-news-style';
		$theme        = wp_get_theme();
		// Append .min if SCRIPT_DEBUG is false.
		$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		wp_enqueue_style(
			$parenthandle,
			get_template_directory_uri() . '/style.css',
			array(
				'elite-news-slick-style',
				'elite-news-fontawesome-style',
				'elite-news-google-fonts',
			),
			$theme->parent()->get( 'Version' )
		);

		wp_enqueue_style(
			'exclusive-news-style',
			get_stylesheet_uri(),
			array( $parenthandle ),
			$theme->get( 'Version' )
		);

		wp_enqueue_script( 'exclusive-news-script', get_stylesheet_directory_uri() . '/assets/js/custom' . $min . '.js', array( 'jquery', 'elite-news-navigation-script', 'elite-news-slick-script', 'elite-news-marquee-script', 'elite-news-custom-script' ), $theme->get( 'Version' ), true );

	}

endif;

add_action( 'wp_enqueue_scripts', 'exclusive_news_enqueue_styles' );

function exclusive_news_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'exclusive_news_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => 'ea911c',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'elite_news_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'exclusive_news_custom_header_setup' );

function exclusive_news_admin_style() {
	?>
	<style type="text/css">
		.ocdi .notice.elite-news-demo-data {
			display: none !important;
		}
	</style>
	<?php
}
add_action( 'admin_head', 'exclusive_news_admin_style' );

// Widgets.
require get_theme_file_path() . '/inc/widgets/widgets.php';

// Customizer.
require get_theme_file_path() . '/inc/customizer.php';

// Custom Controls.
require get_theme_file_path() . '/inc/custom-controls.php';

/**
 * One Click Demo Import after import setup.
 */
if ( class_exists( 'OCDI_Plugin' ) ) {
	require get_theme_file_path() . '/inc/ocdi.php';
}
