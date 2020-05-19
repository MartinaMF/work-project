export function init() {
  $('a[href="#"]').click((e) => {
    e.preventDefault();
  });

  $('a[href*="' + window.location.host + '"],' +
    'a[href^="/"],' +
    'a[href^="./"],' +
    'a[href^="../"]'
  )
    .not('[target="_blank"]')
    .not('[href^="mailto:"]')
    .not('[href^="tel:"]')
    .not('[href$=".pdf"]')
    .not('.disabled-actions')
    .not('.js-fancybox')
    .click(function(e) {
      e.preventDefault();

      const href = $(this).attr('href');
      const hashTag = href.substring(href.indexOf('#') + 1);
      const section = $('[data-scroll-id="' + hashTag + '"');

      if (href.includes('#') && section.length) {
        return slideTo(section);
      }

      window.location = href;
    });
}

export function check() {
  setTimeout(() => {
    if (window.location.hash) {
      const section = $('[data-scroll-id="' + window.location.hash.substring(1) + '"');

      if (section.length)
        return slideTo(section);
    }
  }, 1000);
}

function slideTo(section) {
  let offset = section.offset().top;

  if ($(window).width() >= 992)
    offset -= 60;

  $('.js-header-nav-toggle').removeClass('is-triggered');

  $('html, body').animate({scrollTop: offset}, 600, () => {
    $('body').addClass('hide-nav');
    window.location.hash = section.attr('data-scroll-id');
  });
}
