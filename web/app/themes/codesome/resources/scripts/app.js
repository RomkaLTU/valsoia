import {domReady} from '@roots/sage/client';
import Alpine from 'alpinejs';

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

  Alpine.start();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
