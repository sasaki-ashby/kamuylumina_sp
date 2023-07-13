
/* 900以下になったらメニューを消す
   900以上でメニューを追加
 */
$(window).on('load resize', function(){
  var winW = $(window).width();
  var devW = 900;
  if (winW < devW) {
    //900px未満の時の処理
     $('.page_wrap').addClass('page_wrap_hide');

  } else {
    //900pxより大きい時の処理
     $('.page_wrap').removeClass('page_wrap_hide');

  }
});
$('.slide-items').slick({
  //autoplay: true, // 自動再生
  arrows: true, // 矢印
  dots: true, // インジケーター
  dotsClass: "slick-dots2",
  slidesToShow: 1, // 表示させるスライド数
  centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する  
});

//レビューのドッツ部分の左右に画像を入れ込みたい

$(document).ready( function(){

// ページ読み込み時に実行したい処理
let img_element1 = document.createElement('img');
img_element1.id = 'review_prev',
//img_element1.src = '../img/slick-prev.jpg'; // 画像パス
img_element1.src = 'assets/sp/top/img/slick-prev.jpg'; // 画像パス

img_element1.width = 50; // 横サイズ（px）
img_element1.height = 12; // 縦サイズ（px）

let img_element2 = document.createElement('img');
img_element2.id = 'review_next',
//img_element2.src = '../img/slick-next.jpg'; // 画像パス
img_element2.src = 'assets/sp/top/img/slick-next.jpg'; // 画像パス

img_element2.width = 50; // 横サイズ（px）
img_element2.height = 12; // 縦サイズ（px）

// 指定した要素にimg要素を挿入
let content_area = document.getElementsByClassName("slick-dots2");

//let content_area = document.getElementById("slick-dots2");
content_area[0].prepend(img_element1);
content_area[0].appendChild(img_element2);

});


$(document).on('click', '#review_prev', function(){
    alert("うごいてる");

  $('.slider').slick('slickPrev');
});
$(document).on('click', '#review_next', function(){
    alert("うごいてる２");

  $('.slider').slick('slickNext');
});



$("#review_prev").on('click', function() {
  alert("うごいてる");
  $('.slider').slick('slickPrev');
});

$("#review_next").on('click', function() {
  alert("うごいてる");
  $('.slider').slick('slickNext');
});
