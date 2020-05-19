@if(@$button && is_array($button))
  <div data-aos="fade">
    <a href="{{ $button['url'] }}" class="site-btn site-btn--{{ @$btnType ? $btnType : 'primary' }}{{ @$btnClass ? ' ' . $btnClass : '' }}" target="{{ $button['target'] }}" title="{{ $button['title'] }}">{!! $button['title'] !!}</a>
  </div>
@endif
