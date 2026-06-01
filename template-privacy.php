<?php 
/*
Template Name: تصميم سياسة الخصوصية / الشروط
*/
get_header(); 
?>

<!-- ===== PAGE HEADER ===== -->
<div class="page-header" style="background: linear-gradient(135deg, var(--navy) 0%, #1a1a2e 100%);">
  <div class="container">
    <div style="display: flex; justify-content: center; margin-bottom: 20px;">
      <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <svg viewBox="0 0 24 24" width="30" height="30" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      </div>
    </div>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="post-meta">
      <span>تلتزم جوان كلينك بحماية بياناتك وخصوصيتك</span>
    </div>
  </div>
</div>

<main class="site-main article-main" style="background: #f7fafa; padding-top: 60px;">
  <div class="container article-container">
    <div class="article-content" style="border-radius: 24px; box-shadow: 0 15px 50px rgba(0,0,0,0.05); border: 1px solid #eaeaea;">
      <div class="article-body privacy-body">
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

<style>
.privacy-body h2, .privacy-body h3 {
  color: var(--navy);
  border-bottom: 1px solid #eee;
  padding-bottom: 10px;
  margin-top: 40px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.privacy-body h2::before {
  content: '';
  display: inline-block;
  width: 8px;
  height: 8px;
  background: var(--primary);
  border-radius: 50%;
}
.privacy-body p {
  color: #555;
  font-size: 17px;
  line-height: 1.9;
}
.privacy-body ul {
  background: #fcfcfc;
  padding: 20px 40px;
  border-radius: 12px;
  border: 1px solid #eee;
}
.privacy-body ul li {
  color: #444;
  margin-bottom: 15px;
  position: relative;
}
</style>

<?php get_footer(); ?>
