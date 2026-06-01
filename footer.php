 <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="container footer__inner">

      <!-- Col 1: Logo -->
      <div class="footer__col footer__brand">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footerlogo.png" alt="<?php bloginfo('name'); ?>" class="footer__logo" />
        <p class="footer__desc">عيادة جوان لطب الأسنان توفر لك تجربة مريحة للعناية بأسنانك مع أفضل الكوادر الطبية.</p>
      </div>

      <!-- Col 2: Links -->
      <div class="footer__col footer__links">
        <h4>المزيد عنا</h4>
        <?php
        if ( has_nav_menu( 'footer_links' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'footer_links',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => false,
            ) );
        } else {
        ?>
        <ul>
          <li><a href="#">من نحن</a></li>
          <li><a href="#">سياسة الخصوصية</a></li>
          <li><a href="#">الشروط والأحكام</a></li>
          <li><a href="#">تواصل معنا</a></li>
          <li><a href="https://jwansa.com/%d8%a7%d9%84%d9%85%d8%af%d9%88%d9%86%d8%a9/">المقالات الطبية</a></li>
        </ul>
        <?php } ?>
      </div>

      <!-- Col 3: Services -->
      <div class="footer__col footer__links">
        <h4>خدماتنا</h4>
        <?php
        if ( has_nav_menu( 'footer_services' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'footer_services',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => false,
            ) );
        } else {
        ?>
        <ul>
          <li><a href="https://jwansa.com/%d8%b9%d9%8a%d8%a7%d8%af%d8%a9-%d8%aa%d9%82%d9%88%d9%8a%d9%85-%d8%a7%d8%b3%d9%86%d8%a7%d9%86/">تقويم الأسنان</a></li>
          <li><a href="https://jwansa.com/%d8%b9%d9%84%d8%a7%d8%ac-%d8%b9%d8%b5%d8%a8-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/">علاج جذور الأسنان (العصب)</a></li>
          <li><a href="https://jwansa.com/%d8%a7%d9%84%d8%ad%d8%b4%d9%88%d8%a7%d8%aa-%d8%a7%d9%84%d8%aa%d8%ac%d9%85%d9%8a%d9%84%d9%8a%d8%a9-%d9%84%d8%b3%d8%af-%d8%a7%d9%84%d9%81%d8%b1%d8%a7%d8%ba%d8%a7%d8%aa/">حشوات الأسنان التجميلية والعلاجية</a></li>
          <li><a href="https://jwansa.com/%d8%aa%d8%b1%d9%83%d9%8a%d8%a8-%d8%a7%d9%84%d8%a7%d8%b3%d9%86%d8%a7%d9%86/">تركيب الأسنان الثابتة والمتحركة</a></li>
        </ul>
        <?php } ?>
      </div>

      <!-- Col 4: Contact -->
      <div class="footer__col footer__contact">
        <h4>تواصل معنا</h4>
        <ul class="contact-list">
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="contact-icon">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <span dir="ltr">نجران – طريق الملك عبدالعزيز – دحضه</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="contact-icon">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg>
            <span dir="ltr">+966 17 722 2220</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="contact-icon">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            <span dir="ltr">info@jwansa.com</span>
          </li>
        </ul>
      </div>

      <!-- Col 4: Socials -->
      <div class="footer__col footer__social">
        <h4>تابعنا على وسائل التواصل</h4>
        <div class="footer__socials">
          <a href="https://x.com/jwan_clinic" class="social-icon" aria-label="Twitter">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
              </path>
            </svg>
          </a>
          <a href="https://www.instagram.com/jwan_clinic_sa/" class="social-icon" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <a href="https://www.pinterest.com/jwansaClinic/" class="social-icon" aria-label="Pinterest">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.951-7.252 4.105 0 7.398 2.967 7.398 6.923 0 4.131-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.367 18.624 0 12.017 0z"/></svg>
          </a>
          <a href="https://www.tiktok.com/@jwan_clinic" class="social-icon" aria-label="TikTok">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.04-.1z"/></svg>
          </a>
        </div>
      </div>

    </div>

    <div class="footer__bottom">
      <div class="container footer__bottom-inner">
        <p>جميع الحقوق المحفوظة <?php echo date('Y'); ?></p>
        <p>الرقم الضريبي : 123456789</p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
