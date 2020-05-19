<section class="section | section--contact-form" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <div class="row">
      <div class="col-12 | col-lg-4" data-aos="fade-right">
        <article>
          {!! get_sub_field('content') !!}
        </article>
      </div>

      <div class="col-12 | col-lg-8 | mt-4 | mt-md-5 | mt-lg-0" data-aos="fade-left">
        @include('partials.forms.contact-page')
      </div>
    </div>
  </div>
</section>
