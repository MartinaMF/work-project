@if(get_sub_field('list_of_images'))
  <ul class="not-styled | cleared | reseller-list | poster-structure">
    @foreach(get_sub_field('list_of_images') as $elem)
      <li>
        <a href="{{ wp_get_attachment_image_url($elem['image'], 'full') }}" data-fancybox="images-{{ @$num ? $num : '1' }}" class="js-fancybox" title="{{ $elem['title'] }}">
          <div class="img-hld">
            <div class="img-box" style="background-image: url('{{ wp_get_attachment_image_url($elem['image'], 'small-box') }}')">
              <img src="{{ wp_get_attachment_image_url($elem['image'], 'small-box') }}" alt="{{ $elem['title'] }}">
            </div>
          </div>
          <span>{!! $elem['title'] !!}</span>
        </a>
      </li>
    @endforeach
  </ul>
@endif
