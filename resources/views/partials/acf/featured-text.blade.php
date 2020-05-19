<section class="section | section--featured-text" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="image-hld" data-aos="fade-right">
    <img src="{{ wp_get_attachment_image_url(get_sub_field('image'), 'image-content') }}" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 | col-lg-5 | offset-lg-7">
        <article data-aos="fade-up">
          {!! get_sub_field('content') !!}
        </article>
      </div>
    </div>
  </div>
</section>
