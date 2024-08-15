<?php
/**
 * Excerpt
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_excerpt_options',
	array(
		'panel' => 'elite_news_theme_options',
		'title' => esc_html__( 'Excerpt', 'elite-news' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'elite_news_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'elite_news_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'elite_news_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'elite-news' ),
		'section'     => 'elite_news_excerpt_options',
		'settings'    => 'elite_news_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
	)
);
