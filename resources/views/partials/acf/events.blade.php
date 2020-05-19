@if(($posts = App\Controllers\Post::getLatest(get_sub_field('category'))) AND count($posts))
  <section class="section | section--events" data-aos="fade-up" data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
    <div class="container">
      <article class="text-center">
        <h3>{!! get_sub_field('title') !!}</h3>
      </article>

      <div class="row | events-hld">
        @foreach($posts as $post)
          <div class="col-12 | col-sm-6 | col-lg-4">
            @include('partials.part.event')
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endif
