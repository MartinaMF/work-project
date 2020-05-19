<a class="brand" href="{{ home_url('/') }}">
  @if(get_field('header_logo', 'options'))
    <img src="{!! wp_get_attachment_image_url(get_field('header_logo', 'options'))  !!}" alt="{{ get_bloginfo('name', 'display') }}">
  @else
    {{ get_bloginfo('name', 'display') }}
  @endif
</a>
