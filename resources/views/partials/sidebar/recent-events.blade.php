@if(($posts = \App\Controllers\Post::getLatest()) AND count($posts))
  <aside class="aside-bar | aside-bar--recent-events" data-aos="fade-up">
    <nav>
      <h4>{!! __('recent events', 'sage') !!}</h4>

      <ul>
        @foreach($posts as $post)
          <li data-aos="fade-up">
            <a href="{{ $post->url }}" title="{{ $post->name }}">
              <div class="img-hld">
                <div class="img" style="background-image: url('{{ $post->image }}')"></div>
              </div>

              <h5>{{ $post->name }}</h5>
            </a>
          </li>
        @endforeach
      </ul>
    </nav>
  </aside>
@endif
