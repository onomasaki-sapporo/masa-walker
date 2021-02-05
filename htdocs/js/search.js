// 検索ボックス
$(function(){
  $('.btn').click(function() { 
    $.ajax({
      url: "/htdocs/search.php",
      type: 'get',
      data: { concertSearchId: $(this).data('index'), isAjax: true},
      }).done(function(data) {
        console.log(data);
        $('#detail').html(data);
      }).fail(function() {
        console.log("Error!!!!");
      });
 });
});