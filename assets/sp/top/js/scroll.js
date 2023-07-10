var headerH = $("#header").outerHeight(true); //headerの高さを取得

//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH) {
    //ヘッダーの高さを超えたら
    $("#header").addClass("HeightMin"); //#headerについているHeightMinというクラス名を付与
  } else {
    $("#header").removeClass("HeightMin"); //HeightMinというクラス名を除去
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on("load", function () {
  FixedAnime(); //スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

//リンク先のidまでスムーススクロール
//※ページ内リンクを行わない場合は不必要なので削除してください
$("#g-navi li a").click(function () {
  var headerVal = $("#header").outerHeight(true); //現在のheaderの高さを取得

  //ヘッダーが高さの状態を取得してスクロールする範囲を調整する
  var scroll = $(window).scrollTop(); //スクロール
  var adjust = 0; //調整の変数
  if (scroll <= headerVal) {
    //スクロールとヘッダーの高さを取得
    adjust = 70; //スクロール値がヘッダーの高さ以内であれば調整変数に70を入れる
  }

  var elmHash = $(this).attr("href"); //hrefを取得
  var pos = $(elmHash).offset().top - headerVal - adjust; //クリックしたheader分の高さと調整分を引いた高さまでスクロール

  $("body,html").animate({ scrollTop: pos }, 1000);
  return false;
});

$.scrollify({
  section: ".scrollify", //対象要素を指定
  easing: "swing", // イージングを指定
  scrollSpeed: 600, // スクロール時の速度
  updateHash: false, // スクロール時アドレスバーのURLを更新
  afterRender: function () {
    // ページがリロードされたら
    //変数に最初のHTMLを入れておいて
    var pagenation = '<ul class="page_wrap">';
    //eachイベントでクラス名「scrollify」の数だけHTMLをさっきの変数に追加します
    $(".scrollify").each(function (i) {
      pagenation += "<li><a></a></li>";
    });
    //最後に閉じタグを忘れずに
    pagenation += "</ul>";
    //そんでもってクラス名「container」内に作成されたHTMLを追加
    $(".container").append(pagenation);

    //ここでページネーションをクリックしたら指定のセクションに移動するよう仕向けます
    $(".page_wrap a").each(function (i) {
      $(this).on("click", function () {
        $.scrollify.move(i);
      });
    });
    //一番最初のセクションには最初から黒いのが付いてるようにします
    $(".page_wrap li:first-child").find("a").addClass("active");
  },
  before: function (i) {
    // 移動先にスクロールする前に
    //今ついている黒いのをとります
    $(".page_wrap .active").removeClass("active");
    //移動先に黒いのを付けます
    $(".page_wrap").find("a").eq(i).addClass("active");
  },
});
