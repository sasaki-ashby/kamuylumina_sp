var headerH = $('#header').outerHeight(true); //headerの高さを取得

//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH) {
    //ヘッダーの高さを超えたら
    $('#header').addClass('HeightMin'); //#headerについているHeightMinというクラス名を付与
  } else {
    $('#header').removeClass('HeightMin'); //HeightMinというクラス名を除去
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

//リンク先のidまでスムーススクロール
//※ページ内リンクを行わない場合は不必要なので削除してください
$('#g-navi li a').click(function () {
  var headerVal = $('#header').outerHeight(true); //現在のheaderの高さを取得

  //ヘッダーが高さの状態を取得してスクロールする範囲を調整する
  var scroll = $(window).scrollTop(); //スクロール
  var adjust = 0; //調整の変数
  if (scroll <= headerVal) {
    //スクロールとヘッダーの高さを取得
    adjust = 70; //スクロール値がヘッダーの高さ以内であれば調整変数に70を入れる
  }

  var elmHash = $(this).attr('href'); //hrefを取得
  var pos = $(elmHash).offset().top - headerVal - adjust; //クリックしたheader分の高さと調整分を引いた高さまでスクロール

  $('body,html').animate({ scrollTop: pos }, 1000);
  return false;
});

$(function () {
  'use strict';

  const $window = $(window);
  const $boxes = $('.box');
  const $indicator = $('#indicator');
  let indeicatorHtml = '';
  const duration = 500;
  const easing = 'swing';

  // boxの個数
  const boxes_cnt = $boxes.length;

  // インジケーター生成
  for (let i = 0; i < boxes_cnt; i++) {
    indeicatorHtml += '';
  }
  $indicator.html(indeicatorHtml);

  // boxに連番のクラス付与
  $boxes.each(function (index, element) {
    $(element).addClass('box' + (index + 1));
  });

  // 状態管理用の変数
  let flag = 1;

  // インジケーターのクリックイベント
  $indicator.on('click', 'a', function (e) {
    e.preventDefault();
    const offset = $('.box' + ($(this).index() + 1)).offset().top;
    flag = 3;
    $('html, body')
      .stop(true)
      .animate({ scrollTop: offset }, duration, easing, function () {
        flag = 1;
      });
  });

  // prev_posの初期値（画面をロードしたときの位置）
  let prev_pos = $window.scrollTop();

  $window.on(
    'scroll',
    $.throttle(1000 / 100, function () {
      let current_pos = $(this).scrollTop();

      // インジケーターの点灯・消灯
      for (let i = 0; i < boxes_cnt; i++) {
        const prev_offset = $('.box' + (i + 1)).offset().top;
        if (current_pos >= prev_offset - 1) {
          // IE11用に-1
          $('#indicator a').removeClass('active');
          $('#indicator a.indicator' + (i + 1)).addClass('active');
        }
      }

      // スクロールスナップ
      for (let i = 1; i < boxes_cnt; i++) {
        const prev_offset = $('.box' + i).offset().top;
        const next_offset = $('.box' + (i + 1)).offset().top;

        if (
          current_pos > prev_offset &&
          current_pos < next_offset &&
          flag === 1
        ) {
          if (current_pos > prev_pos) {
            flag = 2;
            $('html, body')
              .stop(true)
              .animate(
                { scrollTop: next_offset },
                duration,
                easing,
                function () {
                  flag = 1;
                }
              );
          } else if (current_pos < prev_pos) {
            flag = 2;
            $('html, body')
              .stop(true)
              .animate(
                { scrollTop: prev_offset },
                duration,
                easing,
                function () {
                  flag = 1;
                }
              );
          }
        }
      }
      prev_pos = current_pos;
    })
  );

  $window.trigger('scroll');
});

const $boxes = $('.box');
$boxes.each(function (index, element) {
  $(element).addClass('box' + (index + 1));
});
