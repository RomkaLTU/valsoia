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
