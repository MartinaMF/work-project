@if(get_sub_field('content'))
  <section class="section" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
    <div class="container">
      <div class="row">
        <div class="col-12 | col-xl-10 | offset-xl-1">
          <article data-aos="fade-up">
            {!! get_sub_field('content') !!}
          </article>
        </div>
      </div>
    </div>
  </section>
@endif
