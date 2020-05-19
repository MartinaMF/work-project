<section class="section | section--small-boxes" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <div class="row">
      <div class="col-12 | col-lg-6">
        <div class="section-box" data-aos="fade-up">
          <article>
            {!! get_sub_field('content') !!}
          </article>
        </div>
      </div>
      <div class="col-12 | col-lg-6 | p-mob">
        <div class="row">
          <div class="col-12 | col-sm-6" data-aos="fade-up">
            <div class="bg-primary section-box">
              <div>
                {!! get_sub_field('first_box_text') !!}
              </div>
            </div>
          </div>
          <div class="col-12 | col-sm-6 | p-mob | pt-sm-0" data-aos="fade-up">
            <div class="image-fluid"
                 style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('first_image'), 'small-box') }}')">
              <img src="{{ wp_get_attachment_image_url(get_sub_field('first_image'), 'small-box') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 | col-lg-6" data-aos="fade-up">
        <div class="image-fluid"
             style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('second_image'), 'bigger-box') }}')">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('second_image'), 'bigger-box') }}" alt="">
        </div>
      </div>
      <div class="col-12 | col-lg-6 | p-mob">
        <div class="row">
          <div class="col-12 | col-sm-6" data-aos="fade-up">
            <div class="image-fluid"
                 style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('third_image'), 'small-box') }}')">
              <img src="{{ wp_get_attachment_image_url(get_sub_field('third_image'), 'small-box') }}" alt="">
            </div>
          </div>
          <div class="col-12 | col-sm-6 | p-mob | pt-sm-0" data-aos="fade-up">
            <div class="bg-primary section-box">
              <div>
                {!! get_sub_field('second_box_text') !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
