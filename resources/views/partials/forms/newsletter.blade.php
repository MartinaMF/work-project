<form action="{{ admin_url('admin-ajax.php?action=newsletter') }}" method="POST" class="js-ajax-form">
  <div class="form-group">
    <label for="n_em" class="h-form">{{ __('enter email', 'sage') }}</label>
    <input type="email" name="f_em" id="n_em" placeholder="{{ __('enter email', 'sage') }}" required>
  </div>

  <div class="button-group">
    <button class="js-ajax-form-button" type="submit" title="{!! __('submit', 'sage') !!}"><i
        class="fas fa-envelope"></i></button>
  </div>

  <h5 class="form-message | js-ajax-form-message"
      data-success="{{ __('You are successfully subscribed. We will be in touch!', 'sage') }}"
      data-error="{{ __('An Error occurred. Try again later', 'sage') }}">{{ __('You are successfully subscribed. We will be in touch!', 'sage') }}</h5>

  <input type="text" name="date_int" class="h-form" value="<?= time() ?>">
  <input type="text" name="date_sh" class="h-form">
</form>
