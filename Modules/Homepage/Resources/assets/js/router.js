

export default function() {

  Vue.component(
    'top-bar',
    require('./components/Topbar.vue').default
  );

  Vue.component(
    'header-bar',
    require('./components/Header.vue').default
  );

  Vue.component(
    'slider-section',
    require('./components/Slider.vue').default
  );

  Vue.component(
    'hightlight-section',
    require('./components/Highlight.vue').default
  );

  Vue.component(
    'main-section',
    require('./components/Main.vue').default
  );

  Vue.component(
    'banner-section',
    require('./components/Banner.vue').default
  );

  Vue.component(
    'characteristic-section',
    require('./components/Characteristic.vue').default
  );

  Vue.component(
    'deals-section',
    require('./components/Deals.vue').default
  );

  Vue.component(
    'featured-section',
    require('./components/Featured.vue').default
  );

  Vue.component(
    'popular-section',
    require('./components/Popular.vue').default
  );

  Vue.component(
    'banner2-section',
    require('./components/Banner2.vue').default
  );

  Vue.component(
    'hotnew-section',
    require('./components/Hotnew.vue').default
  );

  Vue.component(
    'bestseller-section',
    require('./components/Bestseller.vue').default
  );

  Vue.component(
    'newsletter-section',
    require('./components/Newsletter.vue').default
  );




}