@php $showBreadcrumbs = false; @endphp

@extends('layouts.app')

@section('content')

  @php $page = (get_query_var('paged') ?: 1); @endphp

  @if(($posts = App\Controllers\Post::getPaginated($page)) AND $posts->post_count)
    <section class="section | section--ajax-events">
      <div class="container">
        <div class="row | js-ajax-load-more-container" data-current-page="{{ $page }}">
          <div class="col-12">
            <div class="row | js-ajax-load-more-posts">
              @foreach($posts->posts as $post)
                <div class="col-12 | col-sm-6 | col-lg-4">
                  @include('partials.part.event')
                </div>
              @endforeach
            </div>
          </div>

          @if($posts->max_num_pages > 1 AND $page < $posts->max_num_pages)
            <div class="col-12 | mt-5 | text-center | events-ajax-loader | js-ajax-load-more-parent | ">
              <button class="site-btn site-btn--primary | js-ajax-load-more">{{ __('load more', 'sage') }}</button>

              <i class="fa fa-spinner | fa-spin"></i>
            </div>
          @endif
        </div>
      </div>
    </section>
  @endif

@endsection
