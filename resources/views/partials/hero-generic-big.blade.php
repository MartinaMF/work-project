@if(get_field('big_hero_image'))
  <section class="section | section--hero-generic-big">
    <div class="img-hld" style="background-image: url('{{ wp_get_attachment_image_url(get_field('big_hero_image'), 'hero-' . (\App\Controllers\App::isMobile() ? 'mobile' : 'desktop')) }}')">
      <img src="{{ wp_get_attachment_image_url(get_field('big_hero_image'), 'hero-' . (\App\Controllers\App::isMobile() ? 'mobile' : 'desktop')) }}" alt="">
    </div>

    <div class="content-hld">
      <div class="container">
        <h1>{!! get_the_title() !!}</h1>
      </div>
    </div>
  </section>
@endif
