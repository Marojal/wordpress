<?php
if ( ! class_exists( 'Elite_News_Trending_Posts_Carousel_Widget' ) ) {
	/**
	 * Adds Elite_News_Trending_Posts_Carousel_Widget Widget.
	 */
	class Elite_News_Trending_Posts_Carousel_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$elite_news_trending_carousel_widget_ops = array(
				'classname'   => 'ascendoor-widget magazine-trending-carousel-section',
				'description' => __( 'Retrive Trending Posts Carousel Widgets', 'elite-news' ),
			);
			parent::__construct(
				'elite_news_magazine_trending_carousel_widget',
				__( 'Ascendoor Trending Posts Carousel Widget', 'elite-news' ),
				$elite_news_trending_carousel_widget_ops
			);
		}

		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget( $args, $instance ) {
			if ( ! isset( $args['widget_id'] ) ) {
				$args['widget_id'] = $this->id;
			}
			$trending_carousal_title        = ( ! empty( $instance['title'] ) ) ? ( $instance['title'] ) : '';
			$trending_carousal_title        = apply_filters( 'widget_title', $trending_carousal_title, $instance, $this->id_base );
			$trending_carousal_button_label = ( ! empty( $instance['button_label'] ) ) ? ( $instance['button_label'] ) : '';
			$trending_carousal_post_offset  = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$trending_carousal_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			$trending_carousal_button_link  = ( ! empty( $instance['button_link'] ) ) ? ( $instance['button_link'] ) : esc_url( get_category_link( $trending_carousal_category ) );

			echo $args['before_widget'];
			?>
			<div class="section-header">
				<?php
				if ( ! empty( $trending_carousal_title ) ) {
					echo $args['before_title'] . esc_html( $trending_carousal_title ) . $args['after_title'];
				}
				if ( ! empty( $trending_carousal_button_label ) ) {
					?>
					<a href="<?php echo esc_url( $trending_carousal_button_link ); ?>" class="mag-view-all-link">
						<?php echo esc_html( $trending_carousal_button_label ); ?>
					</a>
					<?php
				}
				?>
			</div>
			<div class="magazine-section-body">
				<div class="magazine-trending-carousel-section-wrapper trending-carousel">
					<?php
					$trending_posts_carousel_widgets_args = array(
						'post_type'      => 'post',
						'posts_per_page' => absint( 4 ),
						'offset'         => absint( $trending_carousal_post_offset ),
						'cat'            => absint( $trending_carousal_category ),
					);

					$query = new WP_Query( $trending_posts_carousel_widgets_args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
							<div class="mag-post-single has-image list-design">
								<div class="mag-post-img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div>
								<div class="mag-post-detail">
									<div class="mag-post-category">
										<?php elite_news_categories_list(); ?>
									</div>
									<h3 class="mag-post-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="mag-post-meta">
										<?php
											elite_news_posted_by();
											elite_news_posted_on();
										?>
									</div>
									<div class="mag-post-excerpt">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
			<?php
			echo $args['after_widget'];
		}

		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form( $instance ) {
			$trending_carousal_title        = isset( $instance['title'] ) ? ( $instance['title'] ) : '';
			$trending_carousal_button_label = isset( $instance['button_label'] ) ? ( $instance['button_label'] ) : '';
			$trending_carousal_button_link  = isset( $instance['button_link'] ) ? esc_url( $instance['button_link'] ) : '';
			$trending_carousal_post_offset  = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$trending_carousal_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $trending_carousal_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>"><?php esc_html_e( 'View All Button:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_label' ) ); ?>" type="text" value="<?php echo esc_attr( $trending_carousal_button_label ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>"><?php esc_html_e( 'View All Button URL:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_link' ) ); ?>" type="url" value="<?php echo esc_attr( $trending_carousal_button_link ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>"><?php esc_html_e( 'Number of posts to displace or pass over:', 'elite-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'offset' ) ); ?>" type="number" step="1" min="0" value="<?php echo absint( $trending_carousal_post_offset ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php esc_html_e( 'Select the category to show posts:', 'elite-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'category' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$categories = elite_news_get_post_cat_choices();
					foreach ( $categories as $category => $value ) {
						?>
						<option value="<?php echo absint( $category ); ?>" <?php selected( $trending_carousal_category, $category ); ?>><?php echo esc_html( $value ); ?></option>
						<?php
					}
					?>
				</select>
			</p>
			<?php
		}

		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
			$instance                 = $old_instance;
			$instance['title']        = sanitize_text_field( $new_instance['title'] );
			$instance['button_label'] = sanitize_text_field( $new_instance['button_label'] );
			$instance['button_link']  = esc_url_raw( $new_instance['button_link'] );
			$instance['offset']       = (int) $new_instance['offset'];
			$instance['category']     = (int) $new_instance['category'];
			return $instance;
		}

	}
}
