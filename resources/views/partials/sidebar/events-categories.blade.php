@if(count(get_categories()))
<aside class="aside-bar | aside-bar--navigation" data-aos="fade-up">
  <nav>
    <h4>{!! __('categories', 'sage') !!}</h4>

    <ul>
      @foreach(get_categories() as $navElem)
        <li data-aos="fade-up">
          <a href="{{ get_category_link($navElem) }}" title="{{ $navElem->name }}">{{ $navElem->name }}</a>
        </li>
      @endforeach
    </ul>
  </nav>
</aside>
@endif
