<?php get_header(); ?>

<!-- ===== SINGLE PAGE HEADER ===== -->
<div class="page-header">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="post-meta">
      <?php if(is_single()): ?>
        <span><?php echo get_the_date(); ?></span>
        <span>|</span>
        <span><?php the_category(', '); ?></span>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- ===== PAGE CONTENT ===== -->
<main class="site-main article-main">
  <div class="container article-container">
    <div class="article-content">
        <?php if(has_post_thumbnail()): ?>
          <div class="article-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        
        <div class="article-body entry-content">
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
