<?php
/**
 * Typography
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_typography',
	array(
		'panel' => 'elite_news_theme_options',
		'title' => esc_html__( 'Typography', 'elite-news' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'elite_news_site_title_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'elite_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'elite_news_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'elite-news' ),
		'section'  => 'elite_news_typography',
		'settings' => 'elite_news_site_title_font',
		'type'     => 'select',
		'choices'  => elite_news_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'elite_news_site_description_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'elite_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'elite_news_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'elite-news' ),
		'section'  => 'elite_news_typography',
		'settings' => 'elite_news_site_description_font',
		'type'     => 'select',
		'choices'  => elite_news_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'elite_news_header_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'elite_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'elite_news_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'elite-news' ),
		'section'  => 'elite_news_typography',
		'settings' => 'elite_news_header_font',
		'type'     => 'select',
		'choices'  => elite_news_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'elite_news_body_font',
	array(
		'default'           => 'Titillium Web',
		'sanitize_callback' => 'elite_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'elite_news_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'elite-news' ),
		'section'  => 'elite_news_typography',
		'settings' => 'elite_news_body_font',
		'type'     => 'select',
		'choices'  => elite_news_get_all_google_font_families(),
	)
);
