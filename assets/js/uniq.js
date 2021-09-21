$(function () {
  //ハンバーガーメニュー

  if (window.matchMedia('(max-width: 768px)').matches) {
    $(".hum_links").css("display", "none");
    $(".hum_ttl").click(function () {
      
      $(".hum_ttl").not(this).removeClass("open");
      //クリックしたquestion以外の全てのopenを取る
  
      $(".hum_ttl").not(this).next().slideUp(300);
      //クリックされたquestion以外のanswerを閉じる
      
      $(this).toggleClass("open");
      //thisにopenクラスを付与
      
      $(this).next().slideToggle(300);
      //thisのcontentを展開、開いていれば閉じる
    
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
  $(".txt-q").css("display", "none");

  $(".question").click(function () {

    $(".question").not(this).removeClass("open");
    $(".question").not(this).next().slideUp(300);
    $(this).toggleClass("open");
    $(this).next().slideToggle(300);
    //txt-q
    $(this).children('.txt-q').slideToggle();
  });

  //top pickup TWG
$('.open-first').mouseout(function(e) {
  $(this).removeClass('open-first');
});

  //top mv
  //ロゴが拡大する
  gsap.to("#scroll_logo", {
    scrollTrigger: {
      trigger: ".sc-kv",
      start: "-70 top",
      end: '+=1500', //アニメーション開始位置から1500px固定する
      scrub: true, // スクロールに合わせて動く
      //markers: true,
      pin: true //トリガー要素を固定する
    },
    scale: 35,
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
        end: '+=100', //アニメーション開始位置から200pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

  //画像を暗く
  gsap.fromTo('.overlay', {
    autoAlpha: 0, //初期状態
  },
    {
      autoAlpha: 1,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "700 top",
        end: '+=300', //アニメーション開始位置から200pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        //markers: true,
      }
    });

  //ボディーコピーを表示
  gsap.fromTo('#kv_copy , .copy_sp', {
    autoAlpha: 0, //初期状態
  },
    {
      autoAlpha: 1,
      scrollTrigger: {
        trigger: '.first_kv',
        start: "700 top",
        end: '+=300', //アニメーション開始位置から300pxの位置で終わる
        scrub: true, // スクロールに合わせて動く
        // markers: true,
      }
    });

});
