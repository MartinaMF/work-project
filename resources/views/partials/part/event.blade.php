<a href="{{ $post->url }}" title="{{ $post->name }}" class="event-item">
  <div class="img-hld">
    <div class="img" style="background-image: url('{{ $post->image }}')"></div>
    <span class="date">{!! str_replace('-', '<br />', $post->date) !!}</span>
  </div>

  <h4>{{ $post->name }}</h4>

  <p>{!! $post->excerpt !!}</p>

  <p class="link">{{ __('read more', 'sage') }}</p>
</a>
