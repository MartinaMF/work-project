@if(get_sub_field('content'))
  <section class="section | section--reseller-login" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
    <div class="container">
      <div class="row">
        <div class="col-12 | col-lg-6 | col-xl-7">
          <article data-aos="fade-up">
            {!! get_sub_field('content') !!}
          </article>
        </div>
        <div class="col-12 | col-lg-6 | col-xl-4 | offset-xl-1 | mt-5 | mt-lg-0 | right-side">
          <article data-aos="fade-up">
            <h3>{!! get_sub_field('right_column_title') !!}</h3>
          </article>

          <div data-aos="fade-up" class="mt-4">
            @include('partials.forms.reseller-login')
          </div>
        </div>
      </div>
    </div>
  </section>
@endif

