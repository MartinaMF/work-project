import '@fancyapps/fancybox';

export function init($name) {
  const galleries = $($name);
  
  if (!galleries.length)
    return;
  
  galleries.each(function () {
    $(this).find('a').attr('data-fancybox', 'content-gallery-' + $(this).attr('id'));
    $(this).find('a').fancybox();
  });
}