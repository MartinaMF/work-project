@if(get_option('blog_public') === '1' AND $code = get_field('tracking-code-' . $trackingPosition, 'options'))
  {!! $code !!}
@endif
