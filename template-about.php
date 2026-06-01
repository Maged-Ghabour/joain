<?php 
/*
Template Name: تصميم صفحة "من نحن"
*/
get_header(); 
?>

<!-- ===== PAGE HEADER ===== -->
<div class="page-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--navy) 100%);">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="post-meta">
      <span>تعرف على قصة نجاحنا ورؤيتنا في رعاية أسنانك</span>
    </div>
  </div>
</div>

<main class="site-main about-page-main">
  <!-- ===== STORY SECTION ===== -->
  <section class="about-story section-pad" style="padding-top: 40px;">
    <div class="container">
      <div class="about-content" style="grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div class="about-content__text">
          <div class="section-header__label" style="justify-content: flex-start; margin-bottom: 20px;">
            <span>قصتنا</span>
          </div>
          <h2 style="font-size: 38px; color: var(--navy); margin-bottom: 24px; line-height: 1.3;">
            رعاية صحية بمعايير عالمية في قلب نجران
          </h2>
          <div class="article-body" style="padding: 0; box-shadow: none; background: transparent;">
            <p>
              في <strong>جوان كلينك</strong>، نؤمن بأن الابتسامة هي مفتاح الثقة والجمال. انطلقنا من رؤية واضحة تهدف إلى تقديم أرقى مستويات الرعاية الطبية والتجميلية للأسنان، مجهزين بأحدث التقنيات الرقمية العالمية.
            </p>
            <p>
              يضم مجمعنا نخبة من أفضل الاستشاريين والأخصائيين الذين يكرسون خبراتهم لضمان تجربة علاجية خالية من الألم، ومريحة تماماً لكل أفراد الأسرة. نحن لسنا مجرد عيادة أسنان، بل شركاء لك في رحلة الحفاظ على صحة فمك وابتسامتك طوال العمر.
            </p>
          </div>
        </div>
        <div class="about-content__image" style="position: relative;">
          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/about1.png" alt="عيادات جوان" style="border-radius: 24px; width: 100%; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
          <!-- Decorative element -->
          <div style="position: absolute; bottom: -30px; right: -30px; background: var(--primary); color: #fff; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(33,104,148,0.3);">
            <h3 style="font-size: 40px; margin-bottom: 5px;">+10</h3>
            <p style="font-size: 16px; margin:0;">سنوات من الخبرة</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== MISSION & VISION ===== -->
  <section class="mission-vision section-pad" style="background: var(--bg-light); margin-top: 60px;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <!-- Card 1 -->
        <div class="mv-card" style="background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); text-align: center; transition: transform 0.3s ease;">
          <div style="width: 80px; height: 80px; background: rgba(33,104,148,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
            <svg viewBox="0 0 24 24" width="40" height="40" stroke="var(--primary)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          </div>
          <h3 style="color: var(--navy); font-size: 24px; margin-bottom: 15px;">رؤيتنا</h3>
          <p style="color: var(--text-mid); line-height: 1.7;">أن نكون الخيار الأول والمركز الرائد لطب الأسنان التجميلي والعلاجي في المنطقة، من خلال تقديم خدمات طبية استثنائية تعتمد على الابتكار والتكنولوجيا الرقمية.</p>
        </div>
        <!-- Card 2 -->
        <div class="mv-card" style="background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); text-align: center; transition: transform 0.3s ease;">
          <div style="width: 80px; height: 80px; background: rgba(33,104,148,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
            <svg viewBox="0 0 24 24" width="40" height="40" stroke="var(--primary)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
          </div>
          <h3 style="color: var(--navy); font-size: 24px; margin-bottom: 15px;">رسالتنا</h3>
          <p style="color: var(--text-mid); line-height: 1.7;">توفير رعاية صحية عالية الجودة تتسم بالأمان والشفافية. نلتزم بالاستماع لمرضانا وتلبية احتياجاتهم بخطط علاجية مخصصة تضمن لهم راحة البال والنتائج المبهرة.</p>
        </div>
        <!-- Card 3 -->
        <div class="mv-card" style="background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); text-align: center; transition: transform 0.3s ease;">
          <div style="width: 80px; height: 80px; background: rgba(33,104,148,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
            <svg viewBox="0 0 24 24" width="40" height="40" stroke="var(--primary)" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
          </div>
          <h3 style="color: var(--navy); font-size: 24px; margin-bottom: 15px;">قيمنا</h3>
          <p style="color: var(--text-mid); line-height: 1.7;">النزاهة الطبية، الشفافية، التعاطف، التميز المستمر، ووضع راحة المريض كأولوية قصوى قبل، أثناء، وبعد العلاج.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== PAGE CONTENT (From Editor) ===== -->
  <section class="section-pad">
    <div class="container article-container">
      <div class="article-content">
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
  </section>

</main>

<style>
.mv-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(33,104,148,0.1) !important;
}
@media (max-width: 768px) {
  .about-content {
    grid-template-columns: 1fr !important;
    gap: 40px !important;
  }
}
</style>

<?php get_footer(); ?>
