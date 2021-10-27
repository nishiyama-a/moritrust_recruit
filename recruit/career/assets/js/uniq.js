$(function () {
  //------
  //top mv
  //------
  ScrollTrigger.matchMedia({
    //------pc
    "(min-width: 766px)": function () {
      //ロゴが拡大する
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: ".first-kv",
            start: "top top",
            end: '+=250',
            scrub: true,
            //markers: true,
          }
        });

      //コピー等が消える
      gsap.fromTo('.first-copy', {
        autoAlpha: 1,
      },
        {
          autoAlpha: 0,
          scrollTrigger: {
            trigger: '.first-kv',
            start: "0 top",
            end: '+=30',
            scrub: true,
            //markers: true,
          }
        });

      //背景変化
      $(".one").each(function (i, elem) {
        var one = $(elem).offset().top;
        $(window).on("load scroll resize", function () {
          var two = $(window).height();
          var three = $(window).scrollTop();
          var showClass = "show";
          var timing = 500; // add to css
          if (three >= one - two + timing) {
            $(elem).addClass(showClass);
          } else {
            $(elem).removeClass(showClass);
          }
        });
      });
    },

    //------SP
    "(max-width: 765px)": function () {
      //ロゴ拡大
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: ".first-kv",
            start: "-50 top",
            end: '+=1000',
            scrub: true,
            //markers: true,
          }
        });

      //コピー等が消える
      gsap.fromTo('.first-copy', {
        autoAlpha: 1,
      },
        {
          autoAlpha: 0,
          scrollTrigger: {
            trigger: '.first-kv',
            start: "-50 top",
            end: '+=30',
            scrub: true,
            //markers: true,
          }
        });

      //背景変化
      $(function () {
        $(".one").each(function (i, elem) {
          var one = $(elem).offset().top;
          $(window).on("load scroll resize", function () {
            var two = $(window).height();
            var three = $(window).scrollTop();
            var showClass = "show";
            var timing = 500; // add to css
            if (three >= one - two + timing) {
              $(elem).addClass(showClass);
            } else {
              $(elem).removeClass(showClass);
            }
          });
        });
      });
    },
  });

  //------デバイス共通
  //画面を暗く・ボディーコピーの表示
  gsap.fromTo('.body-copy, .kv-en, .overlay', {
    autoAlpha: 0,
  },
    {
      autoAlpha: 1,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "top top",
        end: '+=50',
        scrub: true,
        //markers: true,
      }
    });
});



//-------------
//swiper
//-------------
'use strict';

var slider1 = '#slider-1';
var options1 = {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: true,
  autoplay: {
    delay: 3000,
    stopOnLast: false,
    disableOnInteraction: false
  },
  navigation: {
    nextEl: slider1 + ' .swiper-button-next',
    prevEl: slider1 + ' .swiper-button-prev'
  },
  //pc
  breakpoints: {
    767: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
  },
}


var slider2 = '#slider-2';
var options2 = {
  loop: true,
  effect: "fade",
  slidesPerView: 1.2,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  speed: 2500,
  allowTouchMove: false

}

var swiper = () => {
  new Swiper(slider1, options1);
  new Swiper(slider2, options2);
};
swiper();