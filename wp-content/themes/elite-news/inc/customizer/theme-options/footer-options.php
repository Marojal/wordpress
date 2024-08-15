<?php
/**
 * Footer Options
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_footer_options',
	array(
		'panel' => 'elite_news_theme_options',
		'title' => esc_html__( 'Footer Options', 'elite-news' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'elite-news' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'elite_news_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'elite_news_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'elite-news' ),
		'section'  => 'elite_news_footer_options',
		'settings' => 'elite_news_footer_copyright_text',
		'type'     => 'textarea',
	)
);
