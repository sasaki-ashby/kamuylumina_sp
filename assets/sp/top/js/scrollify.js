$.scrollify({
  section: '.scrollify', //対象要素を指定
  easing: 'swing', // イージングを指定
  scrollSpeed: 600, // スクロール時の速度
  updateHash: false, // スクロール時アドレスバーのURLを更新
  afterRender: function () {
    // ページがリロードされたら
    //変数に最初のHTMLを入れておいて
    var pagenation = '<ul class="page_wrap">';
    //eachイベントでクラス名「scrollify」の数だけHTMLをさっきの変数に追加します
    $('.scrollify').each(function (i) {
      pagenation += '<li><a></a></li>';
    });
    //最後に閉じタグを忘れずに
    pagenation += '</ul>';
    //そんでもってクラス名「container」内に作成されたHTMLを追加
    $('.container').append(pagenation);

    //ここでページネーションをクリックしたら指定のセクションに移動するよう仕向けます
    $('.page_wrap a').each(function (i) {
      $(this).on('click', function () {
        $.scrollify.move(i);
      });
    });
    //一番最初のセクションには最初から黒いのが付いてるようにします
    $('.page_wrap li:first-child').find('a').addClass('active');
  },
  before: function (i) {
    // 移動先にスクロールする前に
    //今ついている黒いのをとります
    $('.page_wrap .active').removeClass('active');
    //移動先に黒いのを付けます
    $('.page_wrap').find('a').eq(i).addClass('active');
  },
});
