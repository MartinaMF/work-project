@if(get_field('pdf_for_email_show', 'options') AND get_field('pdf_for_email_file', 'options'))
  <aside class="aside-bar | aside-bar--pdf-downloader" data-aos="fade-up">
    @include('partials.forms.pdf')
  </aside>
@endif
