// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import products from './components/products';

//import header from './components/header';
import hamburger from './components/hamburger';
import header from './components/header';
//import menu from './components/menu';
import preloader from './components/preloader';
import gmap from './components/gmap';
import wp_block_gallery from './components/wp-block-gallery';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  header.init();
  wp_block_gallery.init();
  preloader.init();
  hamburger.init();
  gmap.init();

  if($('.products-carousel').length) {
    products.init();
  }
});

