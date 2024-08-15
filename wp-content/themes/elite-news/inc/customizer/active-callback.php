<?php

/**
 * Active Callbacks
 *
 * @package Elite News
 */

// Theme Options.
function elite_news_is_pagination_enabled( $control ) {
	return ( $control->manager->get_setting( 'elite_news_enable_pagination' )->value() );
}
function elite_news_is_breadcrumb_enabled( $control ) {
	return ( $control->manager->get_setting( 'elite_news_enable_breadcrumb' )->value() );
}

// Flash News Section.
function elite_news_is_flash_news_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'elite_news_enable_flash_news_section' )->value() );
}
function elite_news_is_flash_news_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_flash_news_content_type' )->value();
	return ( elite_news_is_flash_news_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function elite_news_is_flash_news_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_flash_news_content_type' )->value();
	return ( elite_news_is_flash_news_section_enabled( $control ) && ( 'category' === $content_type ) );
}

// Banner Slider Section.
function elite_news_is_banner_grid_section_enabled( $control ) {
	return ( $control->manager->get_setting( 'elite_news_enable_banner_section' )->value() );
}
function elite_news_is_banner_grid_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_banner_grid_content_type' )->value();
	return ( elite_news_is_banner_grid_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function elite_news_is_banner_grid_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_banner_grid_content_type' )->value();
	return ( elite_news_is_banner_grid_section_enabled( $control ) && ( 'category' === $content_type ) );
}
function elite_news_is_editor_picks_section_and_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_editor_picks_content_type' )->value();
	return ( elite_news_is_banner_grid_section_enabled( $control ) && ( 'post' === $content_type ) );
}
function elite_news_is_editor_picks_section_and_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'elite_news_editor_picks_content_type' )->value();
	return ( elite_news_is_banner_grid_section_enabled( $control ) && ( 'category' === $content_type ) );
}

// Check if static home page is enabled.
function elite_news_is_static_homepage_enabled( $control ) {
	return ( 'page' === $control->manager->get_setting( 'show_on_front' )->value() );
}