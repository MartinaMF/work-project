@if(get_field('callout_show', 'options'))
  <aside class="aside-bar | aside-bar--callout" data-aos="fade-up">
    <h4>{!! get_field('callout_title', 'options') !!}</h4>
    <p>{!! get_field('callout_content', 'options') !!}</p>
    @if($button = get_field('main_number', 'options'))
      <p>
        <a href="tel:{{ str_replace(' ', '', str_replace('-', '', $button)) }}" title="{{ $button }}">{!! $button !!}</a>
      </p>
    @endif
  </aside>
@endif
