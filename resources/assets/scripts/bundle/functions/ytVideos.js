/*global YT */

export function init($name) {
  const videos = $($name);

  if (!videos.length)
    return;

  const tag = document.createElement('script');
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  videos.each(function () {
    const that = this;
    const poster = $(that).parent().find($name + '-poster');

    let player;

    const videoId = $(that).attr('data-video-id');

    window.onYouTubeIframeAPIReady = function () {
      player = new YT.Player(that, {
        width: '1170',
        height: '600',
        videoId: videoId,
        playerVars: {
          autoplay: 0,
          controls: 0,
          rel: 0,
          showinfo: 0,
          cc_load_policy: 0,
          iv_load_policy: 3,
          loop: 1,
          playsinline: 1,
        },
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange,
        },
      });
    };

    function onPlayerReady(event) {
      poster.click(function (e) {
        e.preventDefault();

        poster.fadeOut();
        event.target.playVideo();
      })
    }

    function onPlayerStateChange(event) {
      if (event.data === YT.PlayerState.ENDED || event.data === YT.PlayerState.PAUSED) {
        stopVideo(event.data === YT.PlayerState.ENDED);
      }
    }

    function stopVideo(end) {
      if (end)
        player.stopVideo();
      else
        player.pauseVideo();

      poster.fadeIn();
    }
  });
}
