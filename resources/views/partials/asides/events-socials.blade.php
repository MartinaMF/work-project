<aside class="aside | aside--events-socials" data-aos="fade-up">
  <ul>
    @foreach(\App\Controllers\App::getSocialShares() as $type => $social)
      <li class="{{ $type }}">
        <a href="{{ $social['url'] }}" target="{{ $social['target'] }}"><i></i></a>
      </li>
    @endforeach
  </ul>
</aside>
