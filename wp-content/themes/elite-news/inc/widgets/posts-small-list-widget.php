<?php
if ( ! class_exists( 'Elite_News_Posts_Small_List_Widget' ) ) {
	/**
	 * Adds Elite_News_Posts_Small_List_Widget Widget.
	 */
	class Elite_News_Posts_Small_List_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 */
		public function __construct() {
			$elite_news_small_list_widget_ops = array(
				'classname'   => 'ascendoor-widget magazine-small-list-section style-1',
				'description' => __( 'Retrive Posts List Widgets', 'elite-news' ),
			);
			parent::__construct(
				'elite_news_magazine_small_list_widget',
				__( 'Ascendoor Posts Small List Widget', 'elite-news' ),
				$elite_news_small_list_widget_ops
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
			$small_list_title        = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
			$small_list_title        = apply_filters( 'widget_title', $small_list_title, $instance, $this->id_base );
			$small_list_button_label = ( ! empty( $instance['button_label'] ) ) ? $instance['button_label'] : '';
			$small_list_post_count   = isset( $instance['number'] ) ? absint( $instance['number'] ) : 6;
			$small_list_post_offset  = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$small_list_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			$small_list_button_link  = ( ! empty( $instance['button_link'] ) ) ? $instance['button_link'] : esc_url( get_category_link( $small_list_category ) );

			echo $args['before_widget'];
			?>
			<div class="section-header">
				<?php
				if ( ! empty( $small_list_title ) ) {
					echo $args['before_title'] . esc_html( $small_list_title ) . $args['after_title'];
				}
				if ( ! empty( $small_list_button_label ) ) {
					?>
					<a href="<?php echo esc_url( $small_list_button_link ); ?>" class="mag-view-all-link">
						<?php echo esc_html( $small_list_button_label ); ?>
					</a>
					<?php
				}
				?>
			</div>
			<div class="magazine-section-body">
				<div class="magazine-list-section-wrapper">
					<?php
					$small_list_widgets_args = array(
						'post_type'      => 'post',
						'posts_per_page' => absint( $small_list_post_count ),
						'offset'         => absint( $small_list_post_offset ),
						'cat'            => absint( $small_list_category ),
					);

					$query = new WP_Query( $small_list_widgets_args );
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
									<div class="mag-post-detail-inner">
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
			$small_list_title        = isset( $instance['title'] ) ? $instance['title'] : '';
			$small_list_button_label = isset( $instance['button_label'] ) ? $instance['button_label'] : '';
			$small_list_button_link  = isset( $instance['button_link'] ) ? $instance['button_link'] : '';
			$small_list_post_count   = isset( $instance['number'] ) ? absint( $instance['number'] ) : 6;
			$small_list_post_offset  = isset( $instance['offset'] ) ? absint( $instance['offset'] ) : '';
			$small_list_category     = isset( $instance['category'] ) ? absint( $instance['category'] ) : '';
			?>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Section Title:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $small_list_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>"><?php esc_html_e( 'View All Button:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_label' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_label' ) ); ?>" type="text" value="<?php echo esc_attr( $small_list_button_label ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>"><?php esc_html_e( 'View All Button URL:', 'elite-news' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_link' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_link' ) ); ?>" type="text" value="<?php echo esc_attr( $small_list_button_link ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of posts to show(Min:1 | Max:6):', 'elite-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="number" step="1" min="1" max="6" value="<?php echo absint( $small_list_post_count ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>"><?php esc_html_e( 'Number of posts to displace or pass over:', 'elite-news' ); ?></label>
				<input class="tiny-text" id="<?php echo esc_attr( $this->get_field_id( 'offset' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'offset' ) ); ?>" type="number" step="1" min="0" value="<?php echo absint( $small_list_post_offset ); ?>" size="3" />
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>"><?php esc_html_e( 'Select the category to show posts:', 'elite-news' ); ?></label>
				<select id="<?php echo esc_attr( $this->get_field_id( 'category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'category' ) ); ?>" class="widefat" style="width:100%;">
					<?php
					$categories = elite_news_get_post_cat_choices();
					foreach ( $categories as $category => $value ) {
						?>
						<option value="<?php echo absint( $category ); ?>" <?php selected( $small_list_category, $category ); ?>><?php echo esc_html( $value ); ?></option>
						<?php
					}
					?>
				</select>
			</p>
			<p>
				<label><?php esc_html_e( 'Order By:', 'elite-news' ); ?></label>
				<ul>
					<li>
						<label>
							<input id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>" type="radio" value="date" <?php checked( 'date', $small_list_orderby ); ?> /> 
								<?php esc_html_e( 'Published Date', 'elite-news' ); ?>
						</label>
					</li>
					<li>
						<label>
							<input id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ); ?>" type="radio" value="title" <?php checked( 'title', $small_list_orderby ); ?> /> 
								<?php esc_html_e( 'Alphabetical Order', 'elite-news' ); ?>
						</label>
					</li>
				</ul>
			</p>
			<p>
				<label><?php esc_html_e( 'Sort By:', 'elite-news' ); ?></label>
				<ul>
					<li>
						<label>
							<input id="<?php echo esc_attr( $this->get_field_id( 'order' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'order' ) ); ?>" type="radio" value="asc" <?php checked( 'asc', $small_list_order ); ?> /> 
								<?php esc_html_e( 'Ascending Order', 'elite-news' ); ?>
						</label>
					</li>
					<li>
						<label>
							<input id="<?php echo esc_attr( $this->get_field_id( 'order' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'order' ) ); ?>" type="radio" value="desc" <?php checked( 'desc', $small_list_order ); ?> /> 
								<?php esc_html_e( 'Descending Order', 'elite-news' ); ?>
						</label>
					</li>
				</ul>
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
			$instance['number']       = (int) $new_instance['number'];
			$instance['offset']       = (int) $new_instance['offset'];
			$instance['category']     = (int) $new_instance['category'];
			$instance['orderby']      = wp_strip_all_tags( $new_instance['orderby'] );
			$instance['order']        = wp_strip_all_tags( $new_instance['order'] );
			$instance['style']        = wp_strip_all_tags( $new_instance['style'] );
			return $instance;
		}

	}
}
