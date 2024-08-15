<?php
/**
 * Header Options
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_header_options',
	array(
		'panel' => 'elite_news_theme_options',
		'title' => esc_html__( 'Header Options', 'elite-news' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'elite_news_enable_topbar',
	array(
		'sanitize_callback' => 'elite_news_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'elite-news' ),
			'section' => 'elite_news_header_options',
		)
	)
);

// Header Section - Advertisement.
$wp_customize->add_setting(
	'elite_news_header_advertisement',
	array(
		'sanitize_callback' => 'elite_news_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'elite_news_header_advertisement',
		array(
			'label'    => esc_html__( 'Advertisement', 'elite-news' ),
			'section'  => 'elite_news_header_options',
			'settings' => 'elite_news_header_advertisement',
		)
	)
);

// Header Section - Advertisement URL.
$wp_customize->add_setting(
	'elite_news_header_advertisement_url',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'elite_news_header_advertisement_url',
	array(
		'label'    => esc_html__( 'Advertisement URL', 'elite-news' ),
		'section'  => 'elite_news_header_options',
		'settings' => 'elite_news_header_advertisement_url',
		'type'     => 'url',
	)
);
