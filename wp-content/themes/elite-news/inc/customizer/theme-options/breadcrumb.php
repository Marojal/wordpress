<?php
/**
 * Breadcrumb
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'elite-news' ),
		'panel' => 'elite_news_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'elite_news_enable_breadcrumb',
	array(
		'sanitize_callback' => 'elite_news_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'elite-news' ),
			'section' => 'elite_news_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'elite_news_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'elite_news_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'elite-news' ),
		'active_callback' => 'elite_news_is_breadcrumb_enabled',
		'section'         => 'elite_news_breadcrumb',
	)
);
