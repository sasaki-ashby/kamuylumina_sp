// ロード時の処理 ===================================
$(function () {
	$.ajax({ // jQueryのajaxでjsonデータを取得しますね
		type: 'GET',
		url: 'https://graph.facebook.com/v13.0/17841448526622087?access_token=EAAJS8Qiy5jUBAKnGZCpxRL6Fq7nteAQlbRe7S0gHwKcq3GZCbi4GYHKO9uHUDxHt0ZAoUZAhw33w93sIOrnKCybngtOkTiKQhrEcn8R8SnaOrGrIu12wHBVAvE1cCFMJjSOm21VdIiHyHh9dM6FvqixL6p8XwmlgGe8VUwpy6ochYhliyOBP&fields=name,media{caption,media_url,thumbnail_url,permalink}',
		dataType: 'json',
		success: function (json) {
			var insta = json.media.data;
			for (var i = 0; i < 12; i++) {
				let url = insta[i].media_url; // 動画ソースのURLを取得thumbnail_url
				let href = insta[i].permalink; // リンク先URLを取得
				let caption = insta[i].caption; //　投稿のキャプションを取得
				let thumbnail = insta[i].thumbnail_url; // 動画ソースのURLを取得
				if (url.indexOf('.mp4') > 0) { // 今回は動画は除外させました .mp4以外を<li>タグで描画します
$('.sp_gallery').append(`
<li>
  <a href="${href}" target="qoo_insta">
    <img src="${thumbnail}" alt="${caption}">
  </a>
</li>
`);
					
				}else{
$('.sp_gallery').append(`
<li>
  <a href="${href}" target="qoo_insta">
    <img src="${url}" alt="${caption}">
  </a>
</li>
`);
				}
			}
		}
	});
});
