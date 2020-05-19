@if(get_sub_field('list_of_files'))
  <ul class="not-styled | cleared | reseller-list | poster-structure">
    @foreach(get_sub_field('list_of_files') as $elem)
      <li>
        <a href="{{ wp_get_attachment_url($elem['file']) }}" target="_blank" title="{{ $elem['title'] }}">
          @php $img = $elem['poster'] ? wp_get_attachment_image_url($elem['poster'], 'small-box') : null @endphp
          <div class="img-hld">
            @if($img)
              <div class="img-box" style="background-image: url('{{ $img }}')">
                <img src="{{ $img }}" alt="{{ $elem['title'] }}">
              </div>
            @else
              <div class="img-box"></div>
            @endif
          </div>
          <span>{!! $elem['title'] !!}</span>
        </a>
      </li>
    @endforeach
  </ul>
@endif
