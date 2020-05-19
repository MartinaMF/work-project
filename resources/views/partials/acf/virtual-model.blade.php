<section class="section | section--virtual-model" data-aos="fade-up"data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>
      <div class="row | images-row" data-aos="fade-up">
        <div class="col-6 | left-image">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('left_image'), 'full-size')}}" class="img-fluid" alt="">
        </div>
        <div class="col-6 | right-image">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('right_image'), 'full-size')}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row | description" data-aos="fade-up">
          <div class="title col-12"> {!! get_sub_field('description-title') !!}</div>
          <article data-aos="fade-up">
            <div class="col-12 col-md-6">{!! get_sub_field('first_text') !!}</div>
            <div class="col-12 col-md-6">{!! get_sub_field('second_text') !!}</div>
          </article>
      </div>
      <div class="row | description-2" data-aos="fade-up">
        <div class="col-12 col-md-6 | image-3">
        <img src="{{ wp_get_attachment_image_url(get_sub_field('text_image'), 'full-size')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6">
        {!! get_sub_field('third_text') !!}
        </div>
      </div>
  </div>
</section>
    