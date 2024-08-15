<?php
/**
 * Banner Section
 *
 * @package Elite News
 */

$wp_customize->add_section(
	'elite_news_banner_section',
	array(
		'panel' => 'elite_news_front_page_options',
		'title' => esc_html__( 'Banner Section', 'elite-news' ),
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'elite_news_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'elite_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Elite_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'elite_news_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'elite-news' ),
			'section'  => 'elite_news_banner_section',
			'settings' => 'elite_news_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'elite_news_enable_banner_section',
		array(
			'selector' => '#elite_news_banner_section .section-link',
			'settings' => 'elite_news_enable_banner_section',
		)
	);
}

// Banner Section - Banner Grid Content Type.
$wp_customize->add_setting(
	'elite_news_banner_grid_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'elite_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'elite_news_banner_grid_content_type',
	array(
		'label'           => esc_html__( 'Select Banner\'s Grid Content Type', 'elite-news' ),
		'section'         => 'elite_news_banner_section',
		'settings'        => 'elite_news_banner_grid_content_type',
		'type'            => 'select',
		'active_callback' => 'elite_news_is_banner_grid_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'elite-news' ),
			'category' => esc_html__( 'Category', 'elite-news' ),
		),
	)
);

for ( $i = 1; $i <= 6; $i++ ) {
	// Banner Section - Select Post.
	$wp_customize->add_setting(
		'elite_news_banner_grid_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'elite_news_banner_grid_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'elite-news' ), $i ),
			'section'         => 'elite_news_banner_section',
			'settings'        => 'elite_news_banner_grid_content_post_' . $i,
			'active_callback' => 'elite_news_is_banner_grid_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => elite_news_get_post_choices(),
		)
	);

}

// Banner Section - Select Category.
$wp_customize->add_setting(
	'elite_news_banner_grid_content_category',
	array(
		'sanitize_callback' => 'elite_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'elite_news_banner_grid_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'elite-news' ),
		'section'         => 'elite_news_banner_section',
		'settings'        => 'elite_news_banner_grid_content_category',
		'active_callback' => 'elite_news_is_banner_grid_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => elite_news_get_post_cat_choices(),
	)
);

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'elite_news_banner_grid_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Elite_News_Customize_Horizontal_Line(
		$wp_customize,
		'elite_news_banner_grid_horizontal_line',
		array(
			'section'         => 'elite_news_banner_section',
			'settings'        => 'elite_news_banner_grid_horizontal_line',
			'active_callback' => 'elite_news_is_banner_grid_section_enabled',
			'type'            => 'hr',
		)
	)
);

// Banner Section - Editor Pick Title.
$wp_customize->add_setting(
	'elite_news_editor_picks_title',
	array(
		'default'           => __( 'Editor\'s Picks', 'elite-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'elite_news_editor_picks_title',
	array(
		'label'           => esc_html__( 'Editors Picks\'s Section Title', 'elite-news' ),
		'section'         => 'elite_news_banner_section',
		'settings'        => 'elite_news_editor_picks_title',
		'type'            => 'text',
		'active_callback' => 'elite_news_is_banner_grid_section_enabled',
	)
);

// Banner Section - Editor Pick Content Type.
$wp_customize->add_setting(
	'elite_news_editor_picks_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'elite_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'elite_news_editor_picks_content_type',
	array(
		'label'           => esc_html__( 'Select Editor Picks\'s Content Type', 'elite-news' ),
		'section'         => 'elite_news_banner_section',
		'settings'        => 'elite_news_editor_picks_content_type',
		'type'            => 'select',
		'active_callback' => 'elite_news_is_banner_grid_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'elite-news' ),
			'category' => esc_html__( 'Category', 'elite-news' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Banner Section - Editor Picks Select Post.
	$wp_customize->add_setting(
		'elite_news_editor_picks_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'elite_news_editor_picks_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'elite-news' ), $i ),
			'section'         => 'elite_news_banner_section',
			'settings'        => 'elite_news_editor_picks_content_post_' . $i,
			'active_callback' => 'elite_news_is_editor_picks_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => elite_news_get_post_choices(),
		)
	);

}

// Banner Section - Editor picks Select Category.
$wp_customize->add_setting(
	'elite_news_editor_picks_content_category',
	array(
		'sanitize_callback' => 'elite_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'elite_news_editor_picks_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'elite-news' ),
		'section'         => 'elite_news_banner_section',
		'settings'        => 'elite_news_editor_picks_content_category',
		'active_callback' => 'elite_news_is_editor_picks_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => elite_news_get_post_cat_choices(),
	)
);

// Banner Section - Horizontal Line.
$wp_customize->add_setting(
	'elite_news_editor_picks_horizontal_line',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Elite_News_Customize_Horizontal_Line(
		$wp_customize,
		'elite_news_editor_picks_horizontal_line',
		array(
			'section'         => 'elite_news_banner_section',
			'settings'        => 'elite_news_editor_picks_horizontal_line',
			'active_callback' => 'elite_news_is_banner_grid_section_enabled',
			'type'            => 'hr',
		)
	)
);

for ( $i = 1; $i <= 2; $i++ ) {

	// Banner Section - Advertisement Area.
	$wp_customize->add_setting(
		'elite_news_banner_advertisement_area_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'elite_news_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'elite_news_banner_advertisement_area_' . $i,
			array(
				'label'           => sprintf( esc_html__( 'Advertisement Area %d', 'elite-news' ), $i ),
				'section'         => 'elite_news_banner_section',
				'settings'        => 'elite_news_banner_advertisement_area_' . $i,
				'active_callback' => 'elite_news_is_banner_grid_section_enabled',
			)
		)
	);

	// Banner Section - Advertisement Link.
	$wp_customize->add_setting(
		'elite_news_banner_advertisement_link_' . $i,
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'elite_news_banner_advertisement_link_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Advertisement Link %d', 'elite-news' ), $i ),
			'section'         => 'elite_news_banner_section',
			'settings'        => 'elite_news_banner_advertisement_link_' . $i,
			'type'            => 'url',
			'active_callback' => 'elite_news_is_banner_grid_section_enabled',
		)
	);

}
