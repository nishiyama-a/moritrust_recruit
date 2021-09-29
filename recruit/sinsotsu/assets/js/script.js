export function funcModal() {
  'use strict';
  const $body = document.querySelector('body');
  const $modalBtn = document.getElementsByClassName('modal-open');
  for (let i = 0; i < $modalBtn.length; i++) {
    $modalBtn[i].addEventListener('click', e => {
      let thisBtn = $modalBtn[i];
      const scrollPosition =
      document.documentElement.scrollTop || document.body.scrollTop;
      $body.style.top = '-' + scrollPosition + 'px';
      $body.classList.add('body-fixed');
      const $isClose = document.getElementsByClassName('is-close');
      //overlay show
      $body.insertAdjacentHTML(
        'beforeend',
        '<div id="modal-overlay" class="is-close"></div>'
      );
      const $overlay = document.getElementById('modal-overlay');
      let begin = new Date() - 0;
      let myTime = 300;
      let id = setInterval(function() {
        var current = new Date() - begin;
        if (current > myTime){
          clearInterval(id);
          current = myTime;
        }
        $overlay.style.opacity = current / myTime;
      }, 10);
      //modal show
      let $modalArea = thisBtn.getAttribute('data-target');
      let $modal = document.getElementById($modalArea);
      const $modalContens = $modal.querySelector('.modal-contents');
      setTimeout(function() {
        centerModal();
      }, 5);
      $modal.style.display = 'block';
      $modalContens.style.opacity = 1;
      $modal.insertAdjacentHTML(
        'beforeend',
        '<div id="modal-close" class="modal-close is-close"></div>'
      );
      const $closeBtn = $modal.querySelector('#modal-close');

      //close
      for (let i = 0; i < $isClose.length; i++) {
        $isClose[i].addEventListener('click', () => {
          $body.classList.remove('body-fixed');
          $body.style.top = '0';
          window.scrollTo(0, scrollPosition);
          $modalContens.style.opacity = '';
          $modal.classList.remove('active');
          $modal.style.display = '';
          $closeBtn.parentNode.removeChild($closeBtn);
          let begin = new Date() - 0;
          let myTime = 300;
          let id = setInterval(function() {
            let current = new Date() - begin;
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
        const w = window.innerWidth;
        const h = window.innerHeight;
        const x = (w - $modal.offsetWidth) / 2;
        const y = (h - $modal.offsetHeight) / 2;
        $modal.style.left = x + 'px';
        $modal.style.top = y + 'px';
      }
    },false);
  }
}
funcModal();