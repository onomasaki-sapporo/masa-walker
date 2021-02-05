$(function() {
  $('#btt').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });

  $('#top').click(function () {
    location.href = '/';
    return false;
  });
  $('#twitter').click(function () {
    window.open('https://twitter.com/, '_blank');
    return false;
  });
  $('#pixiv').click(function () {
    window.open('https://www.pixiv.net', '_blank');
    return false;
  });
  var informationFlag = false;
  $('#information').hover( () => {
    $('.dd').fadeToggle(informationFlag);
    informationFlag = !informationFlag;
  }, function() {
    $('.dd').fadeToggle(informationFlag);
    informationFlag = !informationFlag;
  });
  $('#pop1').click(function () {
    location.href = '/live2d';
    return false;
  });
  $('#pop2').click(function () {
    location.href = '/illustration';
    return false;
  });
  $('#contact').click(function () {
    location.href = '/contact';
    return false;
  });
  $('#achievement').click(function () {
    location.href = '/achievement';
    return false;
  });
});
