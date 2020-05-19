import 'parsleyjs';

export function init($formName) {
  const forms = $($formName);

  if (!forms.length)
    return;

  forms.each(function() {
    const form = $(this);

    form.parsley({
      successClass: 'has-success',
      errorClass: 'has-error',
      errorsWrapper: '<ul class="form__group-errors"></ul>',
      errorTemplate: '<li class="form__group-error"></li>',
      focus: 'none',
      classHandler(el) {
        return el.$element.parents('.form-group');
      },
      errorsContainer(el) {
        return el.$element.parents('.form-group');
      },
    });

    form.submit(function (e) {
      e.preventDefault();
      e.stopPropagation();

      if (!form.parsley().validate())
        return;

      const thisForm = $(this);

      const message = thisForm.find($formName + '-message');
      const button = thisForm.find($formName + '-button');

      hideError(message);
      disableButton(button);

      const data = new FormData(this);

      $.ajax({
        type: 'POST',
        enctype: 'multipart/form-data',
        url: thisForm.attr('action'),
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: (response) => {
          enableButton(button);

          if (response.hasOwnProperty('success') && response.success) {
            showSuccess(message);
            resetFields(thisForm);
            form.trigger('form-success');

            if (response.hasOwnProperty('data') && response.data && response.data.hasOwnProperty('download') && response.data.download)
              window.open(response.data.download, '_blank');

            if (response.hasOwnProperty('data') && response.data && response.data.hasOwnProperty('go_to') && response.data.go_to)
              window.location = response.data.go_to;

            return;
          }

          if (response.hasOwnProperty('data') && response.data && response.data.hasOwnProperty('message') && response.data.message) {
            showError(message, response.data.message);
            return;
          }

          showError(message);
        },
        error: () => {
          enableButton(button);
          showError(message);
        },
      });
    });
  });
}

function hideError($elem) {
  $elem.slideUp().removeClass('is-success is-error');
}

function showSuccess($elem, $content = null) {
  $elem
    .html($content ? $content : $elem.attr('data-success'))
    .addClass('is-success')
    .slideDown();

  setTimeout(() => {
    $elem.slideUp();
  }, 5000);
}

function showError($elem, $content = null) {
  $elem
    .html($content ? $content : $elem.attr('data-error'))
    .addClass('is-error')
    .slideDown();
}

function disableButton($elem) {
  $elem.attr('disabled', 'disabled');
}

function enableButton($elem) {
  $elem.removeAttr('disabled');
}

function resetFields($form) {
  $form.find('input[type="text"]:not(.h-form), input[type="email"], input[type="tel"], input[type="url"], input[type="password"], textarea').val('');
  $form.find('input[type="checkbox"]').prop('checked', false);
}
