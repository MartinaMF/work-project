<section class="section | section--info-block" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <p data-aos="fade">{!! get_sub_field('content') !!}</p>

    @if($button = get_sub_field('button'))
      <div class="button-hld">
        @php $btnType = 'secondary'; @endphp
        @include('partials.text_button')
      </div>
    @endif
  </div>
</section>
