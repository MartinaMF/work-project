@php $showBreadcrumbs = false; @endphp

@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 | col-md-7 | col-lg-8">
          @include('partials.asides.events-hero')
   
          @include('partials.asides.events-description')
         
          @include('partials.asides.events-socials')
        </div>
        <div class="col-12 | col-md-5 | col-lg-4 | mt-5 | mt-md-0">
          @include('partials.sidebar.search')
          @include('partials.sidebar.recent-events')
          @include('partials.sidebar.events-categories')
        </div>
      </div>
    </div>
  </section>

@endsection
