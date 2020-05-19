import AOS from 'aos';

export function init() {
  if (
    !document.querySelector('html').classList.contains('md-mobile') && !document.querySelector('html').classList.contains('ie')
    && (
      document.querySelector('[aos]') !== null
      || document.querySelector('[data-aos]') !== null
    )
  ) {
    setTimeout(function () {
      AOS.init({
        disable: 'mobile',
        duration: 500,
        easing: 'ease-in-out',
        offset: 50,
        triggerEvent: true,
        once: true,
      });
    }, 500);
  }

  $(window).on('scroll', function () {
    AOS.refresh();
  });

  $(window).on('resize', function () {
    AOS.refresh();
  });
}
