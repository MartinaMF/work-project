<section class="section" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <article data-aos="fade-up" class="text-center">
          <h3>{!! get_sub_field('title') !!}</h3>
        </article>
      </div>
    </div>
    <div class="row | mt-5 | align-items-center">
      <div class="col-12 | col-md-8 | col-lg-7">
        <article data-aos="fade-right" class="no-h-before">
          {!! get_sub_field('content') !!}
        </article>
      </div>
      <div class="col-12 | col-md-4 | offset-lg-1 | mt-5 | mt-md-0">
        <article data-aos="fade-left" class="d-flex justify-content-center">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('image'), 'full-box') }}" alt="">
        </article>
      </div>
    </div>
  </div>
</section>
