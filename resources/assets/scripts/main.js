// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import * as header from './bundle/functions/header';
import * as ajaxForms from './bundle/functions/ajaxForms';
import * as sliders from './bundle/functions/sliders';
import * as ytVideos from './bundle/functions/ytVideos';
import * as ajaxLoad from './bundle/functions/ajaxLoad';
import * as aos from './bundle/functions/aos';
import * as pageBehavior from './bundle/functions/pageBehavior';
import * as fancybox from './bundle/functions/fancybox';
import * as gallery from './bundle/functions/gallery';


// Load Events
$(() => {
  pageBehavior.init();
  //
  header.menuMobile('.js-header-nav-toggle');
  header.hideOnScroll('header.header');
  header.smallOnScroll('header.header');
  //
  ajaxForms.init('.js-ajax-form');
  //
  sliders.hero('.js-home-hero');
  sliders.testimonials('.js-testimonials-slider');
  //
  ytVideos.init('.js-yt-video');
  //
  ajaxLoad.init('.js-ajax-load-more');
  //
  aos.init();
  //
  fancybox.init();
  //
  gallery.init('.js-gallery-fancy');

});

$(window).load(() => {
  pageBehavior.check();
});
