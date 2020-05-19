@php $showBreadcrumbs = false; @endphp

@extends('layouts.app')

@section('content')

  @if( have_rows('section') )

    @while( have_rows('section') ) @php the_row(); @endphp
      @includeIf('partials.acf.' . get_row_layout())

    @endwhile

  @endif

@endsection
