<header class="header">
  <div class="container-fluid">
    @include('partials.header_logo')

    @if (has_nav_menu('header_navigation'))
      <button class="nav-mobile-button | js-header-nav-toggle |"><span>&nbsp;</span></button>

      <nav class="header--nav">
        {!! wp_nav_menu(['theme_location' => 'header_navigation', 'menu_class' => 'nav', 'depth' => 2]) !!}

        @if($button = get_field('header_button', 'options'))
          <div class="login-button-nav">
            <a href="{{ $button['url'] }}" target="{{ $button['target'] }}" class="site-btn site-btn--primary | has-btn-icon" title="{{ $button['title'] }}"><i class="fas fa-sign-in-alt"></i> <span>{!! $button['title'] !!}</span></a>
          </div>
        @endif
      </nav>
    @endif

    <div class="right-area">
      @if($button = get_field('header_button', 'options'))
        <div class="login-button">
          <a href="{{ $button['url'] }}" target="{{ $button['target'] }}" title="{{ $button['title'] }}"><i class="fas fa-sign-in-alt"></i> <span>{!! $button['title'] !!}</span></a>
        </div>
      @endif

      @if($button = get_field('main_number', 'options'))
        <div class="phone-button">
          <a href="tel:{{ str_replace(' ', '', str_replace('-', '', $button)) }}" title="{{ $button }}">{!! $button !!}</a>
        </div>
      @endif
    </div>
  </div>
</header>
