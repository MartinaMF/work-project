@if(get_field('navigation') AND ($nav = wp_get_nav_menu_object(get_field('navigation'))) AND $nav->count)
  <aside class="aside-bar | aside-bar--navigation" data-aos="fade-up">
     <nav>
        <h4>{!! $nav->name !!}</h4>

        <ul>
          @foreach(wp_get_nav_menu_items($nav->term_id) as $navElem)
            <li data-aos="fade-up">
              <a href="{{ $navElem->url }}"{{ $navElem->target ? ' target="' . $navElem->target . '"' : '' }} title="{{ $navElem->title }}">{{ $navElem->title }}</a>
            </li>
          @endforeach
        </ul>
     </nav>
  </aside>
@endif
