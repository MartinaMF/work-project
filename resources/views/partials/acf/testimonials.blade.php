<section class="section | section--testimonials" data-aos="fade-up" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <div class="testimonials-hld | js-testimonials-slider">
      @foreach(get_sub_field('testimonials') as $testimonial)
        <div class="testimonials-item">
          <h4>{!! $testimonial['content'] !!}</h4>
          <h5><span>{!! $testimonial['author'] !!}</span> / {!! $testimonial['position'] !!}</h5>
        </div>
      @endforeach
    </div>
  </div>
</section>
