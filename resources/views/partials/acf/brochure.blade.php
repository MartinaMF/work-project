<section class="section | section--brochure" data-aos="fade-up" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <h3>{!! get_sub_field('title') !!}</h3>

    @include('partials.forms.pdf-brochure')
  </div>
</section>
