<?php
/**
 * Pagination
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_pagination',
	array(
		'panel' => 'elite_news_theme_options',
		'title' => esc_html__( 'Pagination', 'elite-news' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'elite_news_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'elite-news' ),
			'section'  => 'elite_news_pagination',
			'settings' => 'elite_news_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'elite_news_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'elite_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'elite_news_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'elite-news' ),
		'section'         => 'elite_news_pagination',
		'settings'        => 'elite_news_pagination_type',
		'active_callback' => 'elite_news_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default'  => __( 'Default (Older/Newer)', 'elite-news' ),
			'numeric'  => __( 'Numeric', 'elite-news' ),
		),
	)
);
