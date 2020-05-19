<form action="{{ admin_url('admin-ajax.php?action=pdf') }}" method="POST" class="js-ajax-form">
  <div class="input-group | form-group">
    <label for="n_em" class="h-form">{{ __('e-mail address', 'sage') }}</label>
    <input type="email" name="f_em" id="n_em" placeholder="{{ __('e-mail address', 'sage') }}" required>
  </div>

  <div class="button-group">
    <button class="site-btn site-btn--primary | js-ajax-form-button" type="submit"
            title="{!! __('download our catalog', 'sage') !!}">{!! __('download our catalog', 'sage') !!}</button>
  </div>

  <h5 class="form-message | js-ajax-form-message" data-success="{{ __('Download should begin!', 'sage') }}"
      data-error="{{ __('An Error occurred. Try again later', 'sage') }}">{{ __('Download should begin!', 'sage') }}</h5>

  <input type="text" name="date_int" class="h-form" value="<?= time() ?>">
  <input type="text" name="date_sh" class="h-form">
</form>
