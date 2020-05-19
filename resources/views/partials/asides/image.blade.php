@if(get_sub_field('image'))
  <aside class="aside | aside--image" data-aos="fade-up">
    <div class="image-hld" style="background-image: url('{{ wp_get_attachment_image_url(get_sub_field('image'), 'full-box') }}')">
      <img src="{{ wp_get_attachment_image_url(get_sub_field('image'), 'full-box') }}" alt="">
    </div>
  </aside>
@endif
