<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp

  @include('partials.tracking', ['trackingPosition' => 'head-end'])
</head>
<body @php body_class(get_field('enable_bigger_hero') ? 'big-hero' : '') @endphp>
@include('partials.tracking', ['trackingPosition' => 'body-start'])

<div class="all-overlay">
  @php do_action('get_header') @endphp
  @include('partials.header')

  <main class="main-wrapper">
    @if(is_front_page())
      @include('partials.hero-home')
    @elseif(get_field('enable_bigger_hero'))
      @include('partials.hero-generic-big')
    @else
      @include('partials.hero-generic')
    @endif

    @yield('content')
  </main>

  @if(!is_front_page() && !is_page('thank-you') && !get_field('disabled_contact_section') && !@$hideContactForm)
    @include('partials.forms.contact')
  @endif

  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp

  <div class="arrow-bg-top" data-aos="slide-left"></div>
  <div class="arrow-bg-bottom" data-aos="slide-right"></div>
</div>

@include('partials.tracking', ['trackingPosition' => 'body-end'])
</body>
</html>
