$(function() {
  var param = location.search
  if (param == '?live2d') {
    $('#live2d').prop('checked', true);
    $('#cb_live2d').css('background-color', '#181818');
    $('#cb_live2d').css('color', 'white');
  } else if(param == '?illust') {
    $('#illust').prop('checked', true);
    $('#cb_illust').css('background-color', '#181818');
    $('#cb_illust').css('color', 'white');
  } else {
    $('#ct').prop('checked', true);
    $('#cb_contact').css('background-color', '#181818');
    $('#cb_contact').css('color', 'white');
  }

  var format = $('#on').prop('checked');
  if (format) {
    $('.name_1').css('display', 'block');
    $('.name_2').css('display', 'none');
    $('#pic').append('<input id="pic_form" type="text" name="pic" placeholder="※必須" requirej>');
    $('#pic_kana').append('<input id="pic_kana_form" type="text" name="pic" placeholder="※必須" requirej>');
  } else {
    $('.name_1').css('display', 'none');
    $('.name_2').css('display', 'block');
    $('#pic_form').remove();
    $('#pic_kana_form').remove();
  }

  $('#cb_live2d').click(function () {
    var live2d = $('#live2d').prop('checked');
    if (!live2d) {
      $('#live2d').prop('checked', true);
      $('#illust').prop('checked', false);
      $('#ct').prop('checked', false);
      $('#cb_live2d').css('background-color', '#181818');
      $('#cb_live2d').css('color', 'white');
      $('#cb_illust').css('background-color', 'white');
      $('#cb_illust').css('color', 'black');
      $('#cb_contact').css('background-color', 'white');
      $('#cb_contact').css('color', 'black');
    }
    return false;
  });
  $('#cb_illust').click(function () {
    var illust = $('#illust').prop('checked');
    if (!illust) {
      $('#live2d').prop('checked', false);
      $('#illust').prop('checked', true);
      $('#ct').prop('checked', false);
      $('#cb_live2d').css('background-color', 'white');
      $('#cb_live2d').css('color', 'black');
      $('#cb_illust').css('background-color', '#181818');
      $('#cb_illust').css('color', 'white');
      $('#cb_contact').css('background-color', 'white');
      $('#cb_contact').css('color', 'black');
    }
    return false;
  });
  $('#cb_contact').click(function () {
    var ct = $('#ct').prop('checked');
    if (!ct) {
      $('#live2d').prop('checked', false);
      $('#illust').prop('checked', false);
      $('#ct').prop('checked', true);
      $('#cb_live2d').css('background-color', 'white');
      $('#cb_live2d').css('color', 'black');
      $('#cb_illust').css('background-color', 'white');
      $('#cb_illust').css('color', 'black');
      $('#cb_contact').css('background-color', '#181818');
      $('#cb_contact').css('color', 'white');
    }
    return false;
  });
  $('#cb_contact').click(function () {
    var ct = $('#ct').prop('checked');
    if (!ct) {
      $('#live2d').prop('checked', false);
      $('#illust').prop('checked', false);
      $('#ct').prop('checked', true);
      $('#cb_live2d').css('background-color', 'white');
      $('#cb_live2d').css('color', 'black');
      $('#cb_illust').css('background-color', 'white');
      $('#cb_illust').css('color', 'black');
      $('#cb_contact').css('background-color', '#181818');
      $('#cb_contact').css('color', 'white');
    }
    return false;
  });

  $('#format_on').click(function () {
    var on = $('#on').prop('checked');
    if (!on) {
      $('#on').prop('checked', true);
      $('#off').prop('checked', false);
      $('.name_1').css('display', 'block');
      $('.name_2').css('display', 'none');
      $('#pic').css('display', 'none');
      $('#pic_kana').css('display', 'none');
    }
    return false;
  });
  $('#format_off').click(function () {
    var off = $('#off').prop('checked');
    if (!off) {
      $('#on').prop('checked', false);
      $('#off').prop('checked', true);
      $('.name_1').css('display', 'none');
      $('.name_2').css('display', 'block');
      $('#pic').css('display', 'block');
      $('#pic_kana').css('display', 'block');
    }
    return false;
  });
});
