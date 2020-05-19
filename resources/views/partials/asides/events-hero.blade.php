@if(get_post_thumbnail_id())
  <aside class="aside" data-aos="fade-up">
    <article>
      <img class="w-100" src="{{ wp_get_attachment_image_url(get_post_thumbnail_id(), 'full-box') }}" alt="">
    </article>
  </aside>
@endif
