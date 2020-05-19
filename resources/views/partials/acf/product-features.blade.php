<section class="section | section--product-features" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
  <article class="text-center">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>
    <div class="row">
      <div class="col-12">
        <div class="section-box" data-aos="fade-up">
          <article>
            {!! get_sub_field('content') !!}
          </article>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
