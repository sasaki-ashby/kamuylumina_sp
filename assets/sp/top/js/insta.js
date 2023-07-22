// ロード時の処理 ===================================
$(function () {
	$.ajax({ // jQueryのajaxでjsonデータを取得しますね
		type: 'GET',
		url: 'https://graph.facebook.com/v13.0/17841448526622087?access_token=EAAJS8Qiy5jUBADmaNIHVJrmamaDnOCyOZANo9wF8S10yGoo6L4Ea1dvhukSm7ITCRYas5DosvTL3u07ZAe597wGc5Esrz4NCxIFzl8gtRcJ2vkDroZAeE5xC4UptTPMPSLxc62XTbZBQL9uKnsyR1ueyIAYHrkpPXZAw7WR4hfsB6SSNxb0g8&fields=name,media{caption,media_url,thumbnail_url,permalink}',
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
