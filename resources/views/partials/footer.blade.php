<footer class="footer">
  <div class="container">
    <div class="footer--top">
      <div class="side">
        <h4>{!! __('address', 'sage') !!}</h4>

        @if($phone = get_field('main_number', 'options'))
          <p class="contain-icon"><i class="fas fa-phone-square"></i> <a href="tel:{{ str_replace(' ', '', str_replace('-', '', $phone)) }}" title="{{ $phone }}">{!! $phone !!}</a></p>
        @endif

        @if($email = get_field('main_email', 'options'))
          <p class="contain-icon"><i class="fas fa-envelope"></i> <a href="mailto:{{ $email }}" title="{{ $email }}">{!! $email !!}</a></p>
        @endif

        @if($address = get_field('main_address', 'options'))
          <p class="contain-icon"><i class="fas fa-map"></i> {!! $address !!}</p>
        @endif
      </div>

      @if (has_nav_menu('footer_navigation'))
        <div class="side">
          <h4>{!! __('navigation', 'sage') !!}</h4>

          <nav class="header--nav">
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'depth' => 1]) !!}
          </nav>
        </div>
      @endif

      <div class="side">
        <h4>{!! __('subscribe', 'sage') !!}</h4>

        <div class="newsletter">
          <p>{{ __('subscribe for latest articles and resources', 'sage') }}</p>

          @include('partials.forms.newsletter')
        </div>
      </div>
    </div>
    <div class="footer--bottom">
      <p>{{ str_replace('[DATE]', date('Y'),get_field('footer_copy', 'options')) }}</p>

      @if($socials = get_field('footer_socials', 'options'))
          <ul class="socials">
            @foreach($socials as $social)
              <li class="{{ $social['type'] }}">
                <a href="{{ $social['url'] }}" target="_blank"><i></i></a>
              </li>
            @endforeach
          </ul>
      @endif
    </div>
  </div>
</footer>
