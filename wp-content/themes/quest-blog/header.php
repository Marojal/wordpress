<?php
/**
 * The Header for our theme.
 *
 * @package quest-blog
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php do_action( 'wp_body_open' ); ?>
    <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html__('Skip to content', 'quest-blog'); ?></a>
  <div class="date-time-file">
    <span class="topbar-date-head"><?php echo date_i18n('F j, Y'); ?><p id="clock"></p></span>   
  </div>
  <div class="head-banner-img">
    <?php if ( get_header_image() ) : ?>
       <div class="site-img-header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src='<?php echo esc_url( get_header_image() ); ?>' alt='Banner Image'>
          </a>
       </div>
      <div class="site-branding">
         <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
         <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
         <?php endif; ?>
      </div>
    <?php else : ?>
      <div class="display_only">
        <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
         <?php else : ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p><?php bloginfo( 'description' ); ?></p>
         <?php endif; ?>
      </div>
    <?php endif; ?> 
  </div>
  <header id="Main-head-class" class="site-header">
    <!-- before header hook -->
    <?php do_action( 'quest_blog_before_header' ); ?>
    <?php get_template_part('template-parts/header/header-file'); ?>
  </header>