<?php
/**
 * Post Options
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'elite-news' ),
		'panel' => 'elite_news_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'elite_news_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'elite-news' ),
			'section' => 'elite_news_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'elite_news_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'elite-news' ),
			'section' => 'elite_news_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'elite_news_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'elite-news' ),
			'section' => 'elite_news_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'elite_news_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'elite-news' ),
			'section' => 'elite_news_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'elite_news_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'elite-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'elite_news_post_related_post_label',
	array(
		'label'           => esc_html__( 'Related Posts Label', 'elite-news' ),
		'section'         => 'elite_news_post_options',
		'settings'        => 'elite_news_post_related_post_label',
		'type'            => 'text',
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'elite_news_post_related_post_label',
		array(
			'selector' => '.single-post .related-posts h2',
			'settings' => 'elite_news_post_related_post_label',
		)
	);
}
