$(function(){

  //カレント表示
  $('.hum_links .link a').each(function(){
    var target = $(this).attr('href');
    if(location.href.match(target)) {
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



 gsap.to(".mask",{
  scrollTrigger: {
      trigger: ".sc-kv",
      start: "top center",
      end: "600px",
      scrub: true, // 要素を追従させる
      markers: true
  },
  duration: 3,
  y: 0,
  });


});