<?php get_header(); ?>

<?php
// Check if the page is built with Elementor
if ( class_exists( '\\Elementor\\Plugin' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
?>
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
<?php endif; ?>

<?php get_footer(); ?>
