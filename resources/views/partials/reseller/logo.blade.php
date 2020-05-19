@if(get_sub_field('list_of_logos'))
  <ul class="not-styled | cleared | reseller-list">
    @foreach(get_sub_field('list_of_logos') as $elem)
      <li>
        <img src="{{ wp_get_attachment_image_url($elem['logo'], 'full') }}" alt="{{ $elem['title'] }}" class="logo">
      </li>
    @endforeach
  </ul>
@endif
