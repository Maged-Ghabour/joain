<?php get_header(); ?>

<main class="site-main" style="padding: 40px 0; min-height: 50vh;">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
