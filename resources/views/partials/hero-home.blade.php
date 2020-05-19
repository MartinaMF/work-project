@if(get_field('items') AND count(get_field('items')))
  <section class="section | section--hero-home">
    <div class="slider | js-home-hero">
      @foreach(get_field('items') as $item)
        <div class="item">
          <div class="img-hld" style="background-image: url('{{ wp_get_attachment_image_url($item['image'], 'hero-' . (\App\Controllers\App::isMobile() ? 'mobile' : 'desktop')) }}')">
            <img src="{{ wp_get_attachment_image_url($item['image'], 'hero-' . (\App\Controllers\App::isMobile() ? 'mobile' : 'desktop')) }}" alt="">
          </div>

          <div class="content-hld">
            <div class="container">
              <h1>{!! $item['title'] !!}</h1>

              @if($button = $item['button'])
                @php $btnType = 'secondary'; @endphp
                @include('partials.text_button')
              @endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endif
