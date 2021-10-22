$(function () {

  //ハンバーガーメニューのheight設定
  $('.hum_wrap').css('height',$(window).height());

  //ハンバーガーメニュー
  if (window.matchMedia('(max-width: 768px)').matches) {
    $(".acd_box").css("display", "none");
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

    
    //-------------
    // SP
    //-------------
    "(max-width: 765px)": function() {
      //ロゴが拡大する
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: "#scroll_logo",
            start: "top top",
            end: '+=1000', //アニメーション開始位置から固定する
            scrub: true, // スクロールに合わせて動く
            pin: true, //トリガー要素を固定する
            //markers: true,
          }
        });

          //コピー等が消える
  gsap.fromTo('.kv_top', {
    autoAlpha: 1, //fromToで初期状態を設定
  },
    {
      autoAlpha: 0,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "-50 top",
        end: '+=30', //アニメーション開始位置から100pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

        //初期背景
  gsap.fromTo('.first-bg', {
    autoAlpha: 1, //fromToで初期状態を設定
  },
    {
      autoAlpha: 0,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "400 top",
        end: '+=50', //アニメーション開始位置から100pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

//背景変化
$(function(){
  $(".one").each(function(i, elem){
    var one = $(elem).offset().top;
    $(window).on("load scroll resize", function(){
      var two = $(window).height();
      var three = $(window).scrollTop();
      var showClass = "show";
      var timing = 800; // 50px, add to css
      if (three >= one - two + timing){
        $(elem).addClass(showClass);
      } else {
        $(elem).removeClass(showClass);
      }
    });
  });
});
    }, 

    //-------------
    //pc
    //-------------

    "(min-width: 766px)": function() {
      //ロゴが拡大する
      gsap.fromTo('#scroll_logo', {
        scale: 1,
      },
        {
          scale: 60,
          autoAlpha: 0,
          scrollTrigger: {
            trigger: "#scroll_logo",
            start: "top top",
            end: '+=250', //アニメーション開始位置から固定する
            scrub: true, // スクロールに合わせて動く
            pin: true, //トリガー要素を固定する
            //markers: true,
          }
        });

          //コピー等が消える
  gsap.fromTo('.kv_top', {
    autoAlpha: 1, //fromToで初期状態を設定
  },
    {
      autoAlpha: 0,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "0 top",
        end: '+=30', //アニメーション開始位置から100pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });
    
    //初期背景
  gsap.fromTo('.first-bg', {
    autoAlpha: 1, //fromToで初期状態を設定
  },
    {
      autoAlpha: 0,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "300 top",
        end: '+=50', //アニメーション開始位置から100pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

    //背景変化
    $(".one").each(function(i, elem){
      var one = $(elem).offset().top;
      $(window).on("load scroll resize", function(){
        var two = $(window).height();
        var three = $(window).scrollTop();
        var showClass = "show";
        var timing = 500; // 50px, add to css
        if (three >= one - two + timing){
          $(elem).addClass(showClass);
        } else {
          $(elem).removeClass(showClass);
        }
      });
    });
    }, 

  });
  
  
    //-------------
    //共通
    //-------------
  //画面を暗く
  gsap.fromTo('.scroll-copy,.overlay', {
    autoAlpha: 0, //初期状態
  },
    {
      autoAlpha: 1,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "top top",
        end: '+=50', //アニメーション開始位置から300pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });
    
});