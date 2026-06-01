/* ======================================
   JWANSA DENTAL CLINIC — JAVASCRIPT
   ====================================== */

document.addEventListener('DOMContentLoaded', () => {

  /* ---------- SCROLL ANIMATIONS ---------- */
/* ---------- STAGGER SCROLL ANIMATION ---------- */
/* ---------- STAGGER SCROLL ANIMATION ---------- */

const animatedSections = document.querySelectorAll(`
  .hero,
  .about,
  .services,
  .why-us,
  .testimonials,
  .banner-section,
  .before-after,
  .blog,
  .booking,
  .footer
`);

animatedSections.forEach(section => {

  const items = section.querySelectorAll(`
    .hero__content,
    .hero__info,

    .section-header,

    .about-content__text,
    .about-content__image,

    .service-card,

    .why-card,

    .banner-box,

    .before-after__item,

    .blog-card,

    .booking__form,
    .booking__map,

    .footer__col
  `);

  items.forEach(item => {
    item.classList.add('fade-up');
  });

});

const observer = new IntersectionObserver((entries) => {

  entries.forEach(entry => {

    const items = entry.target.querySelectorAll('.fade-up');

    if (entry.isIntersecting) {

      items.forEach((item, index) => {

        setTimeout(() => {
          item.classList.add('visible');
        }, index * 120);

      });

    } else {

      items.forEach(item => {
        item.classList.remove('visible');
      });

    }

  });

}, {
  threshold: 0.2
});

animatedSections.forEach(section => {
  observer.observe(section);
});

  /* ---------- QUIZ INTERACTION ---------- */
  const quizQuestions = document.querySelectorAll('.quiz__q');

  quizQuestions.forEach(q => {
    q.addEventListener('click', () => {
      quizQuestions.forEach(item => {
        item.classList.remove('quiz__q--active');
        item.querySelector('.quiz__dot').classList.remove('quiz__dot--active');
      });
      q.classList.add('quiz__q--active');
      q.querySelector('.quiz__dot').classList.add('quiz__dot--active');
    });
  });

  /* ---------- STICKY NAVBAR SHADOW ---------- */
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      navbar.style.boxShadow = '0 4px 24px rgba(0,0,0,0.12)';
    } else {
      navbar.style.boxShadow = '0 2px 16px rgba(0,0,0,0.07)';
    }
  });

  /* ---------- BOOKING FORM SUBMIT ---------- */
  const bookingForm = document.getElementById('bookingForm');
  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = bookingForm.querySelector('button[type="submit"]');
      btn.textContent = '✓ تم الحجز بنجاح!';
      btn.style.background = '#27ae60';
      btn.style.borderColor = '#27ae60';
      setTimeout(() => {
        btn.textContent = 'احجز الآن';
        btn.style.background = '';
        btn.style.borderColor = '';
        bookingForm.reset();
      }, 3000);
    });
  }

  /* ---------- ACTIVE NAV LINK ON SCROLL ---------- */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.navbar__links a');

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navLinks.forEach(link => link.classList.remove('active'));
        const activeLink = document.querySelector(
          `.navbar__links a[href="#${entry.target.id}"]`
        );
        if (activeLink) activeLink.classList.add('active');
      }
    });
  }, { rootMargin: '-50% 0px -50% 0px' });

  sections.forEach(s => sectionObserver.observe(s));

});
