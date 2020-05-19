<aside class="aside | aside--text">
  <div class="row">
    <div class="col-12">
      <article data-aos="fade-up">
        {!! get_sub_field('content') !!}
      </article>

      @if($button = get_sub_field('button'))
        <div class="mt-4 | mt-md-5 | text-center" data-aos="fade-up">
          @include('partials.text_button')
        </div>
      @endif
    </div>
  </div>
</aside>
