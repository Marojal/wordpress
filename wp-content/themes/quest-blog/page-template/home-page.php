<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php get_header(); ?>


<main id="content">
    

    <div id="content" class="page-container container-fluid">
        <div class="row">
            <div class="col-lg-8 col-12">

                <?php do_action( 'quest_blog_before_section1' ); ?>

                <?php get_template_part( 'template-parts/home-sections/section1' ); ?>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="class-sidebar">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>




    </div>

</main>

<?php get_footer(); ?>
