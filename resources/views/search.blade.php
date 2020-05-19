@php $showBreadcrumbs = false; @endphp

@extends('layouts.app')

@section('content')

  <section class="section | section--ajax-events">
    <div class="container">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
      @else
        <div class="row">
          @while (have_posts()) @php the_post() @endphp
            @if (get_post_type() === 'post')
              <div class="col-12 | col-sm-6 | col-lg-4">
                <a href="{{ get_permalink() }}" title="{{ get_the_title() }}" class="event-item">
                  <div class="img-hld">
                    @php $imageId = get_field('listing_image', get_the_ID()) ?: get_post_thumbnail_id(get_the_ID()); @endphp
                    <div class="img" style="background-image: url('{{ wp_get_attachment_image_src($imageId, 'news-box')[0] }}')"></div>
                    <span class="date">{!! str_replace('-', '<br />', get_the_date('d-M')) !!}</span>
                  </div>

                  <h4>{{ get_the_title() }}</h4>

                  <p>{!! get_the_excerpt() !!}</p>

                  <p class="link">{{ __('read more', 'sage') }}</p>
                </a>
              </div>
            @endif
          @endwhile
        </div>

        {!! get_the_posts_navigation() !!}
      @endif
    </div>
  </section>

@endsection
