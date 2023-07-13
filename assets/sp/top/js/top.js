
/* 900以下になったらメニューを消す
   900以上でメニューを追加   
 */
$(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 900;
  if (winW < devW) {
    //900px未満の時の処理
    $('.page_wrap').addClass('page_wrap_hide');
    //スライダー無効化
    $.scrollify.disable();

  } else {
    //900pxより大きい時の処理
    $('.page_wrap').removeClass('page_wrap_hide');
    //スライダー有効化
    $.scrollify.enable();
  }
});
