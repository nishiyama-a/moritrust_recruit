'use strict';

var slider1 = '#slider-1';
var options1 = {
  loop: true,
  // speed: 1000,
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
  loop: true, //ループさせる
  effect: "fade", //フェードのエフェクト
  slidesPerView: 1.2,
  autoplay: {
    delay: 4000, //４秒後に次の画像へ
    disableOnInteraction: false //ユーザー操作後に自動再生を再開する
  },
  speed: 2500, //２秒かけながら次の画像へ移動
  allowTouchMove: false //マウスでのスワイプを禁止

}

var swiper = () => {
  new Swiper(slider1, options1);
  new Swiper(slider2, options2);
};
swiper();