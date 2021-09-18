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
// $("#kv_copy").on('animationend webkitAnimationEnd',function(){
//   $('.header').addClass('fadedown');
// });
});

// //top mv
// gsap.to("box_c",{
//   scrollTrigger: {
//       trigger: ".box_c",
//       start: "top center",
//       end: "600px",
//       scrub: true, // 要素を追従させる
//       markers: true
//   },
//   rotation: 360,
//   duration: 3,
//   y: 600,
// });




$(function(){

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


  
  //カレント表示
  $('.hum_links .link a').each(function(){
    var target = $(this).attr('href');
    if(location.href.match(target)) {
      $(this).parent().addClass('current');
    } else {
      $(this).parent().removeClass('current');
    }
  });
});
