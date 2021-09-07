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