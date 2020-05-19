import '@fancyapps/fancybox';

export function init() {
  const elems = $('.js-fancybox');

  if (!elems.length)
    return;

  elems.fancybox();
}
