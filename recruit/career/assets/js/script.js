'use strict';
// modal
var $body = document.querySelector('body');
var $modalBtn = document.getElementsByClassName('modal-open');
for (var i = 0; i < $modalBtn.length; i++) {
  $modalBtn[i].addEventListener('click', e => {
    var thisBtn = $modalBtn[i];
    var scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;
    $body.style.top = '-' + scrollPosition + 'px';
    $body.classList.add('body-fixed');
    var $isClose = document.getElementsByClassName('is-close');
    //overlay show
    $body.insertAdjacentHTML(
      'beforeend',
      '<div id="modal-overlay" class="is-close"></div>'
    );
    var $overlay = document.getElementById('modal-overlay');
    var begin = new Date() - 0;
    var myTime = 300;
    var id = setInterval(function() {
      var current = new Date() - begin;
      if (current > myTime){
        clearInterval(id);
        current = myTime;
      }
      $overlay.style.opacity = current / myTime;
    }, 10);
    //modal show
    var $modal = document.getElementById('modal-wrap');
    var $modalContens = $modal.querySelector('.modal-contents');
    setTimeout(function() {
      centerModal();
    }, 5);
    $modal.style.display = 'block';
    $modalContens.style.opacity = 1;
    $modal.insertAdjacentHTML(
      'beforeend',
      '<div id="modal-close" class="modal-close is-close"></div>'
    );
    var $closeBtn = $modal.querySelector('#modal-close');

    //close
    for (var i = 0; i < $isClose.length; i++) {
      $isClose[i].addEventListener('click', () => {
        $body.classList.remove('body-fixed');
        $body.style.top = '0';
        window.scrollTo(0, scrollPosition);
        $modalContens.style.opacity = '';
        $modal.classList.remove('active');
        $modal.style.display = '';
        $closeBtn.parentNode.removeChild($closeBtn);
        var begin = new Date() - 0;
        var myTime = 300;
        var id = setInterval(function() {
          var current = new Date() - begin;
            if (current > myTime) {
              clearInterval(id);
              current = myTime;
              $overlay.style.display = "none";
            }
            $overlay.style.opacity = 1 - (current / myTime) ;
        }, 10);
        setTimeout(function () {
          $overlay.parentNode.removeChild($overlay);
        }, 300);
      },false);
    }
    window.addEventListener('resize', centerModal);
    // modal center
    function centerModal() {
      var w = window.innerWidth;
      var h = window.innerHeight;
      var x = (w - $modal.offsetWidth) / 2;
      var y = (h - $modal.offsetHeight) / 2;
      $modal.style.left = x + 'px';
      $modal.style.top = y + 'px';
    }
  },false);
}


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
  },);
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
(function() {
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
        if(currentTime < duration) {
          scrollTo(0, easing(currentTime, scrollFrom, targetPos, duration));
          window.requestAnimationFrame(loop);
        } else {
          scrollTo(0, targetPos + scrollFrom);
        }
      })();
    })
  });
})();