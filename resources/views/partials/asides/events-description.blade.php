<aside class="aside | aside--text">
  <div class="row">
    <div class="col-12">
      <article>
        <h3 data-aos="fade-up">{!! get_the_title() !!}</h3>
        <p data-aos="fade-up" class="text-primary | mt-1">{{ __('Last updated') }} {{ get_the_date() }}
          {{ __('By') }}:
          @if(get_the_author_meta('user_url'))
          <a href='{!! get_the_author_meta("user_url") !!}' target='_blank'> {{ get_the_author()}}</a>
          @else  {{ get_the_author()}}
          @endif
        </p>
        <div data-aos="fade-up">
          @php the_content(); @endphp

          @if(get_the_author_meta('description'))
            <aside class="aside | aside--events-socials" data-aos="fade-up">
              <div class="row author-info">
                <div class="col-2">
                  <img src="{{get_avatar_url( get_the_author_meta( 'user_email'), 150)}}" alt="">
                </div>
                <div class="col-10">
               <h6 data-aos="fade-up" class="text-primary | no-before">
               @if(get_the_author_meta('user_url'))
                  <a href='{!! get_the_author_meta("user_url")!!}' target='_blank'>{{ get_the_author()}}</a>
                  @else  {{ get_the_author()}}
                  @endif
                </h6>
                  <p data-aos="fade-up" class="mt-2">{!! nl2br (get_the_author_meta('description')) !!}</p>
                </div>
              </div>
              <aside>
          @endif
        </div>
      </article>
    </div>
  </div>
</aside>
