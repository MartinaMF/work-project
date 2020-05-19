<section class="section | section--features" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center" data-aos="fade-up">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>

    <ul class="features-hld">
      @foreach(get_sub_field('boxes') as $box)
        <li>
          <div class="box" data-aos="fade-up">
            <img src="{{ wp_get_attachment_image_url($box['icon']) }}" alt="">
            <h6>{!! $box['title'] !!}</h6>
            <p>{!! $box['content'] !!}</p>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</section>
