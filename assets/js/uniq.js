//top mv　イメージ用
$(window).scroll(function () {
  //active
  if($(window).scrollTop() > 20) {
    $('#kv-img').addClass('active');
  } else {
    $('#header').removeClass('fixed');
  }
  //overlay
  setTimeout(function() {
    $('#kv-img').addClass('overlay');
	}, 1000);
   //show
   setTimeout(function() {
    $('#kv_copy').addClass('show');
	}, 1500);
  // fixed
$("#kv_copy").on('animationend webkitAnimationEnd',function(){
  $('.header').addClass('fadedown');
});
});



jQuery(function ($) {
  $(".answer").css("display", "none");
  // 質問の答えをあらかじめ非表示

  
  
  //質問をクリック
  $(".question").click(function () {
    
    $(".question").not(this).removeClass("open");
    //クリックしたquestion以外の全てのopenを取る

    $(".question").not(this).next().slideUp(300);
    //クリックされたquestion以外のanswerを閉じる
    
    $(this).toggleClass("open");
    //thisにopenクラスを付与
    
    $(this).next().slideToggle(300);
    //thisのcontentを展開、開いていれば閉じる
  
  });
});

