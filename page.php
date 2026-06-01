<?php get_header(); ?>

<!-- ===== PAGE HEADER ===== -->
<div class="page-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>
</div>

<main class="site-main article-main">
    <div class="container article-container">
        <div class="article-content fade-up">
            <div class="article-body">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
