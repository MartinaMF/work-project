export function menuMobile($triggerName) {
  const trigger = $($triggerName);

  if (!trigger.length)
    return;

  trigger.click((e) => {
    e.stopPropagation();
    trigger.toggleClass('is-triggered');
  });

  $('body').click(() => {
    trigger.removeClass('is-triggered');
  });
}

export function hideOnScroll($header) {
  const header = $($header);

  if (!header.length)
    return;

  let position = $(document).scrollTop();
  const body = $('body');

  $(document).on('scroll', () => {
    let curPosition = $(document).scrollTop();

    if (curPosition > 100) {
      if (curPosition > position)
        body.addClass('hide-nav');
      else
        body.removeClass('hide-nav');
    } else {
      body.removeClass('hide-nav');
    }

    position = curPosition;
  });
}

export function smallOnScroll($header) {
  const header = $($header);

  if (!header.length)
    return;

  $(document).on('scroll', () => {

    if ($(document).scrollTop() > 100)
      header.addClass('is-small');
    else
      header.removeClass('is-small');
  });
}
