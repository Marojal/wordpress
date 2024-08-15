<?php

// Categories Widget.
require get_theme_file_path() . '/inc/widgets/categories-widget.php';

// Trending Posts Carousel Widget.
require get_theme_file_path() . '/inc/widgets/trending-posts-carousel-widget.php';

/**
 * Register Widgets
 */
function exclusive_news_register_widgets() {

	register_widget( 'Elite_News_Categories_Widget' );

	register_widget( 'Elite_News_Trending_Posts_Carousel_Widget' );

}
add_action( 'widgets_init', 'exclusive_news_register_widgets' );
