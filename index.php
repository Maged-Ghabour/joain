<?php get_header(); ?>

<!-- ===== PAGE HEADER ===== -->
<div class="page-header">
  <div class="container">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
  </div>
</div>

<main class="site-main article-main">
  <div class="container article-container">
    <div class="blog-archive-list fade-up">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="blog-card" style="margin-bottom: 30px; display: flex; gap: 20px; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 20px;">
          <?php if(has_post_thumbnail()): ?>
            <div style="flex: 0 0 200px;">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', array('style' => 'width:100%; height:auto; border-radius:10px;')); ?>
              </a>
            </div>
          <?php endif; ?>
          <div>
            <h2 style="font-size: 24px; margin-bottom: 10px;"><a href="<?php the_permalink(); ?>" style="color: var(--primary); text-decoration: none;"><?php the_title(); ?></a></h2>
            <div style="font-size: 14px; color: #888; margin-bottom: 10px;"><?php echo get_the_date(); ?></div>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" style="color: var(--secondary); font-weight: bold; text-decoration: none;">أكمل القراءة &raquo;</a>
          </div>
        </article>
      <?php endwhile; else : ?>
        <p>لا توجد مقالات.</p>
      <?php endif; ?>
      
      <div class="pagination" style="display: flex; justify-content: center; gap: 10px; margin-top: 40px;">
        <?php echo paginate_links(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
