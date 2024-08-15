<?php
$no_sidebar = is_active_sidebar( 'secondary-widgets-section' ) ? '' : 'no-frontpage-sidebar';

if ( is_active_sidebar( 'primary-widgets-section' ) || is_active_sidebar( 'secondary-widgets-section' ) ) :
	?>
<div class="main-widget-section">
	<div class="ascendoor-wrapper">
		<div class="main-widget-section-wrap frontpage-right-sidebar <?php echo esc_attr( $no_sidebar ); ?>">
			<div class="primary-widgets-section ascendoor-widget-area">
				<?php dynamic_sidebar( 'primary-widgets-section' ); ?>
			</div>
			<div class="secondary-widgets-section ascendoor-widget-area">
				<?php dynamic_sidebar( 'secondary-widgets-section' ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
