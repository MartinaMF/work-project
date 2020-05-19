<form action="{{ admin_url('admin-ajax.php?action=reseller_login') }}" method="POST" class="js-ajax-form">
  <div class="input-group | form-group">
    <label for="rl_em" class="h-form">{{ __('e-mail address', 'sage') }}</label>
    <input type="email" name="f_em" id="rl_em" placeholder="{{ __('e-mail address', 'sage') }}" required>
  </div>

  <div class="input-group | form-group">
    <label for="rl_sp" class="h-form">{{ __('password', 'sage') }}</label>
    <input type="password" name="f_sp" id="rl_sp" placeholder="{{ __('password', 'sage') }}" required>
  </div>

  <div class="button-group">
    <button class="site-btn site-btn--primary | js-ajax-form-button" type="submit"
            title="{!! __('login', 'sage') !!}">{!! __('login', 'sage') !!}</button>
  </div>

  <h5 class="form-message | js-ajax-form-message"
      data-success="{{ __('Login successfully! You will be redirected in a while!', 'sage') }}"
      data-error="{{ __('An Error occurred. Try again later', 'sage') }}">{{ __('Login successfully! You will be redirected in a while!', 'sage') }}</h5>

  <input type="text" name="date_int" class="h-form" value="<?= time() ?>">
  <input type="text" name="date_sh" class="h-form">
</form>
