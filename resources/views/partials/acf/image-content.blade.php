<section class="section | section--image-content" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <div class="row | align-items-center">
      <div class="mt-5 | mt-lg-0 | order-1{{ get_sub_field('content_on_right') ? ' | order-lg-0' : '' }} | col-12 col-lg-6{{ !get_sub_field('content_on_right') ? ' | offset-lg-1' : '' }}">
        <div class="image-hld{{ get_sub_field('content_on_right') ? ' | is-content-right' : '' }}" data-aos="fade-{{ get_sub_field('content_on_right') ? 'right' : 'left' }}">
          <div>
            <img src="{{ wp_get_attachment_image_url(get_sub_field('image'), 'image-content') }}" alt="">
          </div>
        </div>
      </div>
      <div class="order-0{{ get_sub_field('content_on_right') ? ' | order-lg-1' : '' }} | col-12 | col-lg-5{{ get_sub_field('content_on_right') ? ' | offset-lg-1' : '' }}">
        <article data-aos="fade-up">
          {!! get_sub_field('content') !!}
        </article>

        @if($button = get_sub_field('button'))
          <div class="button-hld">
            @include('partials.text_button')
          </div>
        @endif
      </div>
    </div>
  </div>
</section>
