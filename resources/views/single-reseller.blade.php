@php
  if(!isset($_COOKIE["res_ha_bms"]) || (isset($_COOKIE["res_ha_bms"]) && $_COOKIE["res_ha_bms"] !== $post->post_name)) {
    header("HTTP/1.1 401 Unauthorized");
    header("Location: " . get_bloginfo('url') . '/become-a-reseller');
    exit();
  }
@endphp

@php $showBreadcrumbs = false; @endphp
@php $hideContactForm = true; @endphp

@extends('layouts.app')

@section('content')

  @if( have_rows('content_sections') )
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            @php $num = 0; @endphp
            @while( have_rows('content_sections') ) @php the_row(); @endphp
              <article class="{{ $num ? 'mt-5 | pt-lg-5' : '' }}">
                <h3>{!! get_sub_field('title') !!}</h3>

                @includeIf('partials.reseller.' . get_sub_field('type'))

                @if(get_sub_field('zip_archive'))
                  <div class="mt-3">
                    <a class="site-btn site-btn--primary | no-responsive" href="{{ wp_get_attachment_url(get_sub_field('zip_archive')) }}" target="_blank" title="{{ __('Download', 'sage') }}">{{ __('Download', 'sage') }}</a>
                  </div>
                @endif
              </article>
              @php $num++; @endphp
            @endwhile
          </div>
        </div>
      </div>
    </section>
  @endif

@endsection
