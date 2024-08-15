<?php
/**
 * Theme Customizer
 *
 * @package Exclusive_News
 */

function exclusive_news_customize_register( $wp_customize ) {

	// Upsell Section.
	$wp_customize->add_section(
		new Exclusive_News_Upsell_Section(
			$wp_customize,
			'upsell_sections',
			array(
				'title'            => __( 'Exclusive News Pro', 'exclusive-news' ),
				'button_text'      => __( 'Buy Pro', 'exclusive-news' ),
				'url'              => 'https://ascendoor.com/themes/exclusive-news-pro/',
				'background_color' => '#ea911c',
				'text_color'       => '#fff',
				'priority'         => 0,
			)
		)
	);

}
add_action( 'customize_register', 'exclusive_news_customize_register' );

function exclusive_news_custom_control_scripts() {

	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_style( 'exclusive-news-custom-controls-css', get_stylesheet_directory_uri() . '/assets/css/custom-controls' . $min . '.css', array( 'elite-news-custom-controls-css' ), '1.0', 'all' );
	wp_enqueue_script( 'exclusive-news-custom-controls-js', get_stylesheet_directory_uri() . '/assets/js/custom-controls' . $min . '.js', array( 'elite-news-custom-controls-js', 'jquery', 'jquery-ui-core' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'exclusive_news_custom_control_scripts' );
