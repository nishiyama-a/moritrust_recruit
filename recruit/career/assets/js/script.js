'use strict';
// hambmenu
var $_body = document.querySelector("body");
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("hamb-btn").addEventListener("click", () => {
    let scroll_position =
      document.documentElement.scrollTop || document.body.scrollTop;
    $_body.classList.toggle("g-active");
    if ($_body.classList.contains("g-active")) {
      $_body.style.top = "-" + scroll_position + "px";
      $_body.classList.add("body-fixed");
    } else {
      var body_style_top = $_body.style.top;
      var hamb_pos = body_style_top.replace(/[^0-9]/g, "");
      $_body.style.top = '';
      $_body.classList.remove("body-fixed");
      window.scrollTo({
        top: hamb_pos,
        behavior: 'instant'
      });
    }
  }, false);
}, false);

//hambmenu-height設定
$('.hum_wrap').css('height', $(window).height());

//hambmenu-アコーディオン
if (window.matchMedia('(max-width: 768px)').matches) {
  $(".acd_box").css("display", "none");
  $(".hum_ttl").click(function () {
    $(".hum_ttl").not(this).removeClass("open");
    $(".hum_ttl").not(this).next().slideUp(300);
    $(this).toggleClass("open");
    $(this).next().slideToggle(300);
  });
}

//カレント
$('.hum_links .link a').each(function () {
  var target = $(this).attr('href');
  if (location.href.match(target)) {
    $(this).parent().addClass('current');
  } else {
    $(this).parent().removeClass('current');
  }
});

// scrolltop
var pagetop = document.getElementById('pagetop-btn');
if (pagetop) {
  window.addEventListener('scroll', () => {
    var y = window.pageYOffset;
    if (y > 200) {
      pagetop.classList.add('active');
    } else {
      pagetop.classList.remove('active');
    }
  });
}

// smoothscroll
var scrollElm = (() => {
  if ('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if (navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
    return document.documentElement;
  }
})();
(function () {
  var duration = 500;
  var ignore = '.noscroll';
  var easing = function (t, b, c, d) {
    return c * (0.5 - Math.cos(t / d * Math.PI) / 2) + b;
  };
  var smoothScrollElm = document.querySelectorAll('a[href^="#"]:not(' + ignore + ')');
  Array.prototype.forEach.call(smoothScrollElm, elm => {
    elm.addEventListener('click', e => {
      e.preventDefault();
      var targetElm = document.querySelector(elm.getAttribute('href'));
      if (!targetElm) return;
      var targetPos = targetElm.getBoundingClientRect().top;
      var startTime = Date.now();
      var scrollFrom = scrollElm.scrollTop;
      (function loop() {
        var currentTime = Date.now() - startTime;
        if (currentTime < duration) {
          scrollTo(0, easing(currentTime, scrollFrom, targetPos, duration));
          window.requestAnimationFrame(loop);
        } else {
          scrollTo(0, targetPos + scrollFrom);
        }
      })();
    })
  });
})();