<section class="section | section--video" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center" data-aos="fade-up">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>

    @if(get_sub_field('video_id'))
      <div class="video-hld" data-aos="fade-up">
        <div class="video | js-yt-video" data-video-id="{{ get_sub_field('video_id') }}"></div>
        <div class="poster | js-yt-video-poster" style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('poster'), 'full-box') }}')">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('poster'), 'full-box') }}" alt="">
        </div>
      </div>
    @endif
  </div>
</section>
