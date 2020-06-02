<!-- Header
============================================= -->
<?php get_header(); ?>

    <!-- Content
    ============================================= -->
    <section id="content" style="padding: 30px; background: lightpink;">

        <!-- Posts
        ============================================= -->
        <?php get_template_part( 'partials/reusables/posts' ); ?>



        <!-- Pagination
        ============================================= -->
        <?php get_template_part( 'partials/reusables/pagination-posts' ); ?>


        <!-- Sidebar
        ============================================= -->
        <?php get_sidebar(); ?>


    </section>
    <!-- Content [END] -->


<!-- Footer
============================================= -->
<?php get_footer(); ?>