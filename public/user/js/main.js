document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  // Header
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
        if (nextElement) nextElement.classList.add('sticked-header-offset');
      } else {
        selectHeader.classList.remove('sticked');
        if (nextElement) nextElement.classList.remove('sticked-header-offset');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  // Navbar
  let navbarlinks = document.querySelectorAll('#navbar a');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }


  // Filter Pendidikan
  let pendidikannIsotope = document.querySelector('.pendidikan-isotope');

  if (pendidikannIsotope) {

    let pendidikanFilter = pendidikannIsotope.getAttribute('data-pendidikan-filter') ? pendidikannIsotope.getAttribute('data-pendidikan-filter') : '*';
    let pendidikanLayout = pendidikannIsotope.getAttribute('data-pendidikan-layout') ? pendidikannIsotope.getAttribute('data-pendidikan-layout') : 'masonry';
    let pendidikanSort = pendidikannIsotope.getAttribute('data-pendidikan-sort') ? pendidikannIsotope.getAttribute('data-pendidikan-sort') : 'original-order';

    window.addEventListener('load', () => {
      let pendidikanIsotope = new Isotope(document.querySelector('.pendidikan-container'), {
        itemSelector: '.pendidikan-item',
        layoutMode: pendidikanLayout,
        filter: pendidikanFilter,
        sortBy: pendidikanSort
      });

      let menuFilters = document.querySelectorAll('.pendidikan-isotope .pendidikan-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.pendidikan-isotope .pendidikan-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          pendidikanIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
        }, false);
      });

    });

  }

  // Filter Pengurus
  let pengurusnIsotope = document.querySelector('.pengurus-isotope');

  if (pengurusnIsotope) {

    let pengurusFilter = pengurusnIsotope.getAttribute('data-pengurus-filter') ? pengurusnIsotope.getAttribute('data-pengurus-filter') : '*';
    let pengurusLayout = pengurusnIsotope.getAttribute('data-pengurus-layout') ? pengurusnIsotope.getAttribute('data-pengurus-layout') : 'masonry';
    let pengurusSort = pengurusnIsotope.getAttribute('data-pengurus-sort') ? pengurusnIsotope.getAttribute('data-pengurus-sort') : 'original-order';

    window.addEventListener('load', () => {
      let pengurusIsotope = new Isotope(document.querySelector('.pengurus-container'), {
        itemSelector: '.pengurus-item',
        layoutMode: pengurusLayout,
        filter: pengurusFilter,
        sortBy: pengurusSort
      });

      let menuFilters = document.querySelectorAll('.pengurus-isotope .pengurus-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.pengurus-isotope .pengurus-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          pengurusIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
        }, false);
      });

    });

  }
  // Slider Gambar Berita
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  // Slider Berita, Karya Santri, Prestasi
  new Swiper('.slides-3', {
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    },
  });

  // Slider Pengasuh, Muassis
  new Swiper('.slides-4', {
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 4,
      }
    },
  });

  // Slider Ustadz, Utadzah
  new Swiper('.slides-5', {
    speed: 600,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },

      1200: {
        slidesPerView: 6,
      }
    },
  });
  
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1500,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });
});