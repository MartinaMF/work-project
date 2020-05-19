<section class="section | section--image-content-bellow" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <img data-aos="fade-up" src="{{ wp_get_attachment_image_url(get_sub_field('image'), 'full-box') }}" alt="">

    <article data-aos="fade-up">
      {!! get_sub_field('content') !!}
    </article>
  </div>
</section>
