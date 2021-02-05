$(function() {
  var ua = navigator.userAgent;
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
    $('.slider').slick({
      centerMode: true,
      centerPadding: '0%',
      dots: true,
      focusOnSelect: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      slidesToShow: 1,
      dots: true,
    });
  
    $('#live2d').click(function () {
      location.href = '/live2d';
      return false;
    });
  
    $('#illust').click(function () {
      location.href = '/illustration';
      return false;
    });
  
  }else{
    $('.slider').slick({
      focusOnSelect: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      slidesToShow: 1,
    });
  
    $('#live2d').click(function () {
      location.href = '/live2d';
      return false;
    });
  
    $('#illust').click(function () {
      location.href = '/illustration';
      return false;
    });
  }
});
