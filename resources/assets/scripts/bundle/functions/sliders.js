import 'slick-carousel';

export function hero($name) {
  const sliders = $($name);

  if (!sliders.length)
    return;

  sliders.each(function () {
    $(this).slick({
      dots: false,
      arrows: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 10000,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      swipe: true,
      swipeToSlide: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="icon icon-bms-arrow" ></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="icon icon-bms-arrow" ></i></button>',
    });
  });
}

export function testimonials($name) {
  const sliders = $($name);

  if (!sliders.length)
    return;

  sliders.each(function () {
    $(this).slick({
      dots: false,
      arrows: false,
      infinite: true,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 5000,
      pauseOnHover: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      swipe: true,
      swipeToSlide: true,
    });
  });
}
