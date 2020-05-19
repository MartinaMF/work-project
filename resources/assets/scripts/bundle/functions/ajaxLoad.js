export function init($name) {
  const button = $($name);

  if (!button.length)
    return;

  button.click(function (e) {
    e.preventDefault();

    const parent = $(this).parents($name + '-parent');
    const container = $(this).parents($name + '-container');
    const page = parseInt(container.attr('data-current-page')) + 1;

    parent.addClass('is-loading');

    $.ajax({
      type: 'POST',
      url: window.location.href + '?paged=' + page,
      success: function (response) {
        container.attr('data-current-page', page);
        parent.removeClass('is-loading');

        if (!$(response).find($name).length)
          parent.remove();

        const elements = $(response).find($name + '-posts').children();
        container.find($name + '-posts').append(elements);
      },
    });
  });
}
