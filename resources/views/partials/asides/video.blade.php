@if(get_sub_field('video_id'))
  <aside class="aside | aside--video" data-aos="fade-up">
    <div class="video-hld">
      <div class="video | js-yt-video" data-video-id="{{ get_sub_field('video_id') }}"></div>
      <div class="poster | js-yt-video-poster" style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('poster'), 'full-box') }}')">
        <img src="{{ wp_get_attachment_image_url(get_sub_field('poster'), 'full-box') }}" alt="">
      </div>
    </div>
  </aside>
@endif
