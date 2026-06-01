<?php 
/*
Template Name: تصميم الرئيسية الخاص بالثيم
*/
get_header(); 
?>

<!-- ===== HERO SECTION ===== -->
<section class="hero" id="hero">
  <div class="container">
    <div class="hero__inner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner1.png');">
      <!-- CONTENT -->
      <div class="hero__content">
        <h1 class="hero__title">
          <?php echo get_theme_mod( 'joan_hero_title', 'ابتسامة صحية تبدأ من هنا' ); ?>
        </h1>

        <p class="hero__subtitle">
          <?php echo nl2br( get_theme_mod( 'joan_hero_subtitle', 'رعاية متكاملة لأسنانك بأحدث التقنيات وفريق متخصص' ) ); ?>
        </p>

        <a href="<?php echo esc_url( get_theme_mod( 'joan_hero_btn_url', '#booking' ) ); ?>" class="hero__btn">
          <span><?php echo esc_html( get_theme_mod( 'joan_hero_btn_text', 'ابدأ رحلتك لابتسامة أفضل' ) ); ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png" alt="WhatsApp" />
        </a>
      </div>

      <!-- INFO -->
      <div class="hero__info">
        <div class="hero__info-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.png" alt="clock" />
        </div>

        <div class="hero__info-text">
          <h4>مواعيد العمل:</h4>
          <p>من السبت الى الخميس - من الساعة 3 م الى 11 م</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== ABOUT SECTION ===== -->
<section class="about section-pad" id="about">
  <div class="container">
    <div class="section-header split-header">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>من نحن</span>
        </div>
        <h2 class="section-header__title">
          خبرة واهتمام لصحة أسنانك
        </h2>
      </div>
      <div class="section-header__left">
        <p>
          جوان كلينك – أفضل مركز أسنان في نجران يقدم خدمات طبية متكاملة للعناية بصحة أسنانك.
        </p>
      </div>
    </div>

    <div class="about-content">
      <div class="about-content__text">
       <p class="about-content__desc">
          <span>في جوان كلينك نؤمن أن تجربة علاج الأسنان لابد أن تكون مريحة وواضحة من أول لحظة.</span>
          <span>نقدم لك خدمات متكاملة للعناية بصحة وجمال أسنانك باستخدام أحدث التقنيات وتحت إشراف فريق طبي متخصص.</span>
          <span>سواء كنت تحتاج علاج، تجميل، أو زيارة وقائية، نوفر لك تجربة سهلة وسريعة تناسب احتياجك.</span>
        </p>
        <a href="#" class="about-content__btn">
          <span>تعرف علينا أكثر</span>
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M13 6L19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div class="about-content__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about1.png" alt="About Jwansa Clinic" />
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="services section-pad" id="services">
  <div class="container">
    <div class="section-header services-header">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>خدماتنا</span>
        </div>
        <h2 class="section-header__title">
          كل ما تحتاجه لصحة وجمال أسنانك
        </h2>
        <p class="services-header__desc">
          مجموعة متكاملة من خدمات الأسنان تحت إشراف فريق متخصص
        </p>
      </div>
    </div>

    <div class="services__grid">
      <div class="service-card fade-up fade-up-delay-2">
        <div class="service-card__body">
          <h3>1- تقويم الأسنان</h3>
          <p>حلول متقدمة لتصحيح اصطفاف الأسنان وتحسين الابتسامة بثقة</p>
        </div>
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/serv1.png" alt="خدمة">
        </div>
      </div>
      <div class="service-card fade-up fade-up-delay-3">
        <div class="service-card__body">
          <h3>2- علاج جذور الأسنان (العصب)</h3>
          <p>علاج دقيق باستخدام تقنيات حديثة لتخفيف الألم وإنقاذ السن.</p>
        </div>
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/serv2.png" alt="خدمة">
        </div>
      </div>
      <div class="service-card fade-up">
        <div class="service-card__body">
          <h3>3- الفحص الشامل وتنظيف الأسنان</h3>
          <p>نساعدك تكتشف المشاكل مبكرًا مع تنظيف احترافي يحافظ على صحة اللثة والأسنان</p>
        </div>
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/serv3.png" alt="خدمة">
        </div>
      </div>
      <div class="service-card fade-up fade-up-delay-1">
        <div class="service-card__body">
          <h3>4- حشوات الأسنان التجميلية والعلاجية</h3>
          <p>نستخدم مواد عالية الجودة لإعادة بناء الأسنان بشكل متناسق.</p>
        </div>
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/serv4.png" alt="خدمة">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WHY US SECTION ===== -->
<section class="why-us section-pad" id="why-us">
  <div class="container">
    <div class="section-header split-header">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>ليش تختارنا</span>
        </div>
        <h2 class="section-header__title">
          راحة وثقة في كل زيارة
        </h2>
      </div>
      <div class="section-header__left">
        <p>نقدم تجربة علاجية مريحة بمعايير طبية حديثة واهتمام حقيقي بالمريض</p>
      </div>
    </div>
    <div class="why-us__grid">
      <div class="why-card fade-up fade-up-delay-2">
        <div class="why-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon1.png" alt="icon"></div>
        <h3>فريق طبي متخصص</h3>
        <p>نخبة من الأطباء بخبرة عالية يضمنون لك علاج دقيق ونتائج موثوقة</p>
      </div>
      <div class="why-card fade-up fade-up-delay-3">
        <div class="why-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" alt="icon"></div>
        <h3>تجربة مريحة</h3>
        <p>نحرص على تقليل التوتر وتوفير بيئة هادئة لزيارة بدون قلق</p>
      </div>
      <div class="why-card fade-up">
        <div class="why-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon3.png" alt="icon"></div>
        <h3>تقنيات حديثة</h3>
        <p>نستخدم أحدث الأجهزة لتقديم علاج أسرع وأكثر دقة لكل خدماتنا</p>
      </div>
      <div class="why-card fade-up fade-up-delay-1">
        <div class="why-card__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.png" alt="icon"></div>
        <h3>سهولة الحجز</h3>
        <p>احجز موعدك بسرعة عبر واتساب أو الاتصال بخطوات بسيطة</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== BANNER SECTION ===== -->
<section class="banner-section section-pad">
  <div class="container">
    <div class="banner-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.png" alt="Banner">
    </div>
  </div>
</section>

<!-- ===== BEFORE & AFTER SECTION ===== -->
<section class="before-after section-pad" id="before-after">
  <div class="container">
    <div class="section-header services-header">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>شاهد الفرق قبل وبعد العلاج</span>
        </div>
        <h2 class="section-header__title">شاهد الفرق قبل وبعد العلاج</h2>
        <p class="services-header__desc">صور حقيقية لنتائج بعض الحالات التي تم علاجها في جوان كلينك باستخدام أحدث التقنيات وبإشراف فريق طبي متخصص</p>
      </div>
    </div>
    <div class="before-after__grid">
      <div class="before-after__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/b&a1.png" alt="Before After 1"></div>
      <div class="before-after__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/b&a2.png" alt="Before After 2"></div>
      <div class="before-after__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/b&a3.png" alt="Before After 3"></div>
      <div class="before-after__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/b&a4.png" alt="Before After 4"></div>
    </div>
  </div>
</section>

<!-- ===== BLOG SECTION ===== -->
<section class="blog section-pad" id="blog">
  <div class="container">
    <div class="section-header testimonials-header">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>المدونة</span>
        </div>
        <h2 class="section-header__title">أحدث المقالات</h2>
      </div>
    </div>
    <div class="blog__grid">
      <?php
      $blog_query = new WP_Query(array('posts_per_page' => 4));
      if($blog_query->have_posts()) :
          while($blog_query->have_posts()) : $blog_query->the_post();
      ?>
      <article class="blog-card">
        <div class="blog-card__image">
          <?php if(has_post_thumbnail()) {
              the_post_thumbnail('medium');
          } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.png" alt="<?php the_title(); ?>">
          <?php } ?>
        </div>
        <div class="blog-card__content">
          <div class="blog-card__meta">
            <span class="blog-card__category"><?php the_category(', '); ?></span>
            <span class="blog-card__date"><?php echo get_the_date(); ?></span>
          </div>
          <h3 class="blog-card__title"><?php the_title(); ?></h3>
          <p class="blog-card__text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
          <a href="<?php the_permalink(); ?>" class="blog-card__link">
            <span>أكمل القراءة</span>
            <svg viewBox="0 0 24 24" fill="none"><path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M11 18L5 12L11 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
      </article>
      <?php endwhile; wp_reset_postdata(); else: ?>
          <p>لا توجد مقالات حالياً.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- ===== BOOKING SECTION ===== -->
<section class="booking section-pad" id="booking">
  <div class="container">
    <div class="section-header section-header--split">
      <div class="section-header__right">
        <div class="section-header__label">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerIcon.png" alt="icon" />
          <span>احجز موعدك</span>
        </div>
        <h2 class="section-header__title">املأ بياناتك واحجز زيارتك بسهولة</h2>
      </div>
      <div class="section-header__left">
        <p class="section-header__text">اختر الخدمة والوقت المناسب، وفريقنا بيتواصل معك لتأكيد الموعد في أقرب وقت</p>
      </div>
    </div>
    <div class="booking__inner">
      <div class="booking__form fade-up">
        <form action="#" method="post">
          <div class="form-row">
            <div class="form-group">
              <label>الاسم الكامل</label>
              <input type="text" name="full_name" placeholder="أدخل اسمك الكريم" required>
            </div>
            <div class="form-group">
              <label>رقم الجوال</label>
              <input type="tel" name="phone" placeholder="05xxxxxxxx" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>الخدمة المطلوبة</label>
              <select name="service" required>
                <option value="" disabled selected>اختر الخدمة...</option>
                <option value="تقويم">تقويم الأسنان</option>
                <option value="عصب">علاج العصب</option>
                <option value="تجميل">حشوات تجميلية</option>
                <option value="تركيبات">تركيبات الأسنان</option>
                <option value="أخرى">أخرى</option>
              </select>
            </div>
            <div class="form-group">
              <label>التاريخ المفضل (اختياري)</label>
              <input type="date" name="date">
            </div>
          </div>
          <button type="submit" class="btn btn--primary btn--full booking__submit-btn" style="margin-top: 10px;">تأكيد الحجز</button>
        </form>
      </div>
      <div class="booking__map fade-up fade-up-delay-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2!2d46.7!3d24.7!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQyJzAwLjAiTiA0NsKwNDInMDAuMCJF!5e0!3m2!1sar!2ssa!4v1" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        <div class="booking__map-cutout">
          <a href="https://maps.google.com" target="_blank" class="btn btn--primary">احصل على الاتجاهات</a>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
