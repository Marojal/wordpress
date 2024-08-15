<?php
//about theme info
add_action( 'admin_menu', 'quest_blog_gettingstarted_page' );
function quest_blog_gettingstarted_page() {      
    add_theme_page( esc_html__('Quest Blog', 'quest-blog'), esc_html__('All About Quest Blog', 'quest-blog'), 'edit_theme_options', 'quest_blog_mainpage', 'quest_blog_content_main');   
}

function quest_blog_notice() {
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
        <div class="notice-content">
            <p><?php esc_html_e( 'Thank You For Choosing CA WP Themes', 'quest-blog' ); ?></p>
            <h2><?php esc_html_e( 'Thank You for installing Quest Blog Free Theme!', 'quest-blog' ) ?> </h2>
            <p><?php esc_html_e( "Please Click on the link below to Check The Full Theme Edit Documentation", 'quest-blog' ) ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'quest-blog' ); ?></a>
            </div>
            <h2><?php esc_html_e( 'Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'quest-blog' ) ?> </h2>
            <h2><?php esc_html_e( 'Check The Pro Version: Quest Blog Pro for Amazing Features for Unlimited Site', 'quest-blog' ); ?></h2>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'quest-blog' ); ?></a>
            </div>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Premium Demo', 'quest-blog' ); ?></a>
            </div>
        </div>
    </div>
    <?php }
}

add_action( 'admin_notices', 'quest_blog_notice' );


// Add a Custom CSS file to WP Admin Area
function quest_blog_admin_page_theme_style() {
   wp_enqueue_style('quest-blog-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
}
add_action('admin_enqueue_scripts', 'quest_blog_admin_page_theme_style');

//About Theme Info
function quest_blog_content_main() { 

    //custom function about theme customizer

    $return = add_query_arg( array()) ;
    $theme = wp_get_theme( 'quest-blog' );
?>

<div class="admin-main-box">
    <div class="admin-left-box">
        <h2><?php esc_html_e( 'Welcome to Quest Blog Theme', 'quest-blog' ); ?> <span class="version"><?php $theme_info = wp_get_theme();
echo $theme_info->get( 'Version' );?></span></h2>
        <p><?php esc_html_e('CA WP Themes is a premium WordPress theme development company that provides high-quality themes for various types of websites. They specialize in creating themes for businesses, eCommerce, portfolios, blogs, and many more. Their themes are easy to use and customize, making them perfect for those who want to create a professional-looking website without any coding skills.','quest-blog'); ?></p>
        <p><?php esc_html_e('CA WP Themes offers a wide range of themes that are designed to be responsive and compatible with the latest versions of WordPress. Our themes are also SEO optimized, ensuring that your website will rank well on search engines. They come with a variety of features such as customizable widgets, social media integration, and custom page templates.','quest-blog'); ?></p>
        <p><?php esc_html_e('One of the unique things about CA WP Themes is their focus on providing excellent customer support. They have a dedicated team of support staff who are available 24/7 to help customers with any issues they may encounter. Their support team is knowledgeable and friendly, ensuring that customers receive the best possible experience.','quest-blog'); ?></p>
    </div>
    <div class="admin-right-boxt">
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Buy Quest Blog Premium Theme','quest-blog'); ?></h4>
             <p><?php esc_html_e('Now the Premium Version is only at $39.99 with Lifetime Access!Grab the deal now!', 'quest-blog'); ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'quest-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Premium Theme Demo','quest-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'quest-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Need Support? / Contact Us','quest-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Contact Us', 'quest-blog' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Documentation','quest-blog'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( QUEST_BLOG_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Docs', 'quest-blog' ); ?></a>
            </div>
        </div>
    </div>
</div>


<?php } ?>