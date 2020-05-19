{{--
  Template Name: Industry
--}}

@php $showBreadcrumbs = true; @endphp

@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 | col-md-7 | col-lg-12">
          @if( have_rows('section_left') )

            @while( have_rows('section_left') ) @php the_row(); @endphp

            @includeIf('partials.asides.' . get_row_layout())

            @endwhile

          @endif
        </div>
        {{--<div class="col-12 | col-md-5 | col-lg-4 | mt-5 | mt-md-0">--}}
          {{--@include('partials.sidebar.nav')--}}
          {{--@include('partials.sidebar.callout')--}}
          {{--@include('partials.sidebar.pdf-downloader')--}}
        {{--</div>--}}
      </div>
    </div>
  </section>

  @if( have_rows('section') )

    @while( have_rows('section') ) @php the_row(); @endphp

      @includeIf('partials.acf.' . get_row_layout())

    @endwhile

  @endif

@endsection
