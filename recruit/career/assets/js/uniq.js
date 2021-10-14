$(function () {

  //ハンバーガーメニューのheight設定
  $('.hum_wrap').css('height',$(window).height());

  //ハンバーガーメニュー
  if (window.matchMedia('(max-width: 768px)').matches) {
    $(".hum_links").css("display", "none");
    $(".hum_ttl").click(function () {
      $(".hum_ttl").not(this).removeClass("open");
      $(".hum_ttl").not(this).next().slideUp(300);
      $(this).toggleClass("open");
      $(this).next().slideToggle(300);
    });
    }


  //カレント表示
  $('.hum_links .link a').each(function () {
    var target = $(this).attr('href');
    if (location.href.match(target)) {
      $(this).parent().addClass('current');
    } else {
      $(this).parent().removeClass('current');
    }
  });


  //freshman　アコーディオン
  $(".answer").css("display", "none");
  //$(".txt-q").css("display", "none");

  $(".question").click(function () {

    // $(".question").not(this).removeClass("open");
    // $(".question").not(this).next().slideUp(300);
    $(this).toggleClass("open");
    $(this).next().slideToggle(300);
    //txt-q
    //$(this).children('.txt-q').slideToggle();
  });


  //top mv
  ScrollTrigger.matchMedia({
    //ロゴが拡大する
	    // mobile
    "(max-width: 765px)": function() {
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: "#kv-slide ,#scroll_logo",
            start: "top top",
            end: '+=250', //アニメーション開始位置から固定する
            scrub: true, // スクロールに合わせて動く
            pin: true, //トリガー要素を固定する
            //markers: true,
          }
        });
    }, 
  //pc
    "(min-width: 766px)": function() {
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: "#kv-slide ,#scroll_logo",
            start: "top top",
            end: '+=250', //アニメーション開始位置から固定する
            scrub: true, // スクロールに合わせて動く
            pin: true, //トリガー要素を固定する
            //markers: true,
          }
        });


      // gsap.to("#scroll_logo", {
      //   scrollTrigger: {
      //     trigger: "#kv-slide",
      //     start: "-70 top",
      //     end: '+=250', //アニメーション開始位置から固定する
      //     scrub: true, // スクロールに合わせて動く
      //     pin: true, //トリガー要素を固定する
      //     markers: true,
      //   },
      //   scale: 60,
      // autoAlpha: 0,
      // });
    }, 

  });
  
  

  //コピー等が消える
  gsap.fromTo('.kv_top', {
    autoAlpha: 1, //fromToで初期状態を設定
  },
    {
      autoAlpha: 0,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "top top",
        end: '+=100', //アニメーション開始位置から100pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });
    
//  //画像を暗く
//  gsap.fromTo('.overlay', {
//   autoAlpha: 0, //初期状態
// },
//   {
//     autoAlpha: 1,
//     scrollTrigger: {
//       trigger: '.first_kv',
//       start: "200 top",
//       end: '+=100', //アニメーション開始位置から100pxの位置で終わる
//       scrub: true, // スクロールに合わせて動く
//       //markers: true,
//     }
//   });


  //ボディーコピーを表示・画面を暗く
  gsap.fromTo('#kv_copy,.overlay', {
    autoAlpha: 0, //初期状態
  },
    {
      autoAlpha: 1,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "100 top",
        end: '+=50', //アニメーション開始位置から300pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

    //ボディーコピーがスクロールする
    gsap.to("#kv_copy", {
      scrollTrigger: {
        trigger: "#kv-slide",
        start: "-50 top",
        end: '1000 center', //アニメーション開始位置から固定する
        scrub: true, // スクロールに合わせて動く
        pin: true, //トリガー要素を固定する
        //markers: true,
      },
    });

});
