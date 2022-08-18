import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import Swiper, { Navigation, Pagination } from 'swiper';
import '@styles/swiper/swiper.scss';
import '@styles/swiper/navigation.scss';
import '@styles/swiper/pagination.scss';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  const menuItems = document.querySelectorAll('.menu-item:not(.menu-item-has-children):not(.sub-menu .menu-item)');
  const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children');
  const header = document.getElementById('header');
  const mobileMenuItemWithChildren = document.querySelectorAll('.nav-primary-mobile .menu-item-has-children > a');
  const mobileMenuLevelUpTrigger = document.querySelectorAll('.sub-menu .to-level-up');

  if (menuItemsWithChildren.length) {
    menuItems.forEach((menuItem) => {
      menuItem.addEventListener('mouseover', (e) => {
        e.preventDefault();
        e.stopPropagation();

        menuItemsWithChildren.forEach((menuItem) => {
          menuItem.classList.remove('is-active');
        });
      });
    });

    menuItemsWithChildren.forEach((menuItem) => {
      menuItem.addEventListener('mouseover', (e) => {
        e.preventDefault();
        e.stopPropagation();

        menuItem.classList.add('is-active');
      });
    });
  }

  if (mobileMenuItemWithChildren) {
    mobileMenuItemWithChildren.forEach((menuItem) => {
      menuItem.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        e.currentTarget.nextElementSibling.classList.add('is-active');
      });
    });
  }

  if (mobileMenuLevelUpTrigger) {
    mobileMenuLevelUpTrigger.forEach((menuItem) => {
      menuItem.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        e.target.parentElement.parentElement.classList.remove('is-active');
      });
    });
  }

  header.addEventListener('mouseleave', () => {
    menuItemsWithChildren.forEach((menuItem) => {
      menuItem.classList.remove('is-active');
    });
  });

  document.addEventListener('alpine:init', () => {
    Alpine.data('app', () => ({
      exampleAttr: false,

      toggleExampleAttr() {
        this.exampleAttr = !this.exampleAttr;
      }
    }));
  });

  const productSliderEl = document.querySelector('.glider-products');

  if (productSliderEl) {
    const productSlider = new Glider(productSliderEl, {
      slidesToShow: 1.3,
      draggable: true,
      dragVelocity: 1.5,
      arrows: {
        prev: '.glider-prev',
        next: '.glider-next',
      },
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2.5,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
          }
        },
      ],
    });

    if (window.innerWidth <= 500) {
      productSlider.scrollItem(0.8);
    }
  }

  new Swiper('.swiper-hero', {
    modules: [Navigation, Pagination],
    autoHeight: true,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    'breakpoints': {
      '500': {
        autoHeight: false,
      },
    }
  });

  new Swiper('.swiper-products', {
    modules: [Navigation],
    slidesPerView: '1.5',
    centeredSlides: true,
    autoHeight: true,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    'breakpoints': {
      '500': {
        slidesPerView: '2.5',
        spaceBetween: 30,
      },
      '768': {
        slidesPerView: '3',
        spaceBetween: 30,
      },
      '1024': {
        slidesPerView: '4',
        spaceBetween: 60,
        autoHeight: false,
      }
    }
  });

  new Swiper('.swiper-images', {
    modules: [Navigation],
    slidesPerView: '1.5',
    autoHeight: false,
    spaceBetween: 22,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    'breakpoints': {
      '500': {
        slidesPerView: '2.5',
      },
      '768': {
        slidesPerView: '3',
      },
      '1024': {
        slidesPerView: '4',
        autoHeight: false,
      }
    }
  });

  Alpine.plugin(collapse);
  Alpine.start();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
