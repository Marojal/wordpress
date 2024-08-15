<?php
/**
 * Sidebar Position
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'elite-news' ),
		'panel' => 'elite_news_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'elite_news_sidebar_position',
	array(
		'sanitize_callback' => 'elite_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'elite_news_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'elite-news' ),
		'section' => 'elite_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'elite-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'elite-news' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'elite_news_post_sidebar_position',
	array(
		'sanitize_callback' => 'elite_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'elite_news_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'elite-news' ),
		'section' => 'elite_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'elite-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'elite-news' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'elite_news_page_sidebar_position',
	array(
		'sanitize_callback' => 'elite_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'elite_news_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'elite-news' ),
		'section' => 'elite_news_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'elite-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'elite-news' ),
		),
	)
);
