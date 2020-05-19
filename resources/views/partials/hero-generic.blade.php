<section class="section | section--hero-generic{{ is_page('hospitality') ? ' | hospitality' : '' }} {{ App\Controllers\App::is_child('solutions') || is_page('solutions') ? ' | product ' : '' }}">
  @if($thumbnail = App\Controllers\App::thumbnail())
    <div class="img-hld" style="background-image: url('{{ $thumbnail }}')">
      <img src="{{ $thumbnail }}" alt="">
    </div>
  @endif

  <div class="container | text-center">
    <!-- @if(@$showBreadcrumbs && WPSEO_Options::get( 'breadcrumbs-enable', false ))
      <div class="breadcrumbs">
        @php yoast_breadcrumb() @endphp
      </div>
    @endif -->

    <h1>{!! App\Controllers\App::title() !!}</h1>
  </div>

  
</section>
