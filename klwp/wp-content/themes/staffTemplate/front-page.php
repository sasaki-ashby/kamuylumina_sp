<?php /*Template Name: サイトトップ*/ ?>
<!DOCTYPE html>
<html lang="jp">

<head>
	<meta charset="UTF-8">
	<title>KAMUY LUMINA (カムイルミナ)</title>
	<meta name="description" content="国立公園では日本初、北海道阿寒湖に誕生する体験型ナイトウォーク「KAMUY LUMINA(カムイルミナ)」。先住民族アイヌの物語をベースに描かれた、まったく新しい夜の森の物語。幻想的な光と音、映像、ストーリーがあなたを未知の世界へ誘います。" lang="ja">
	<meta name="keywords" content="KAMUY LUMINA,カムイルミナ,阿寒,ナイトウォーク, 体験型, インタラクティブ体験, デジタルアート, MOMENT FACTORY, モーメントファクトリー" lang="ja">
	<meta property="og:title" content="KAMUY LUMINA">
	<meta property="og:type" content="website">
	<meta property="og:description" content="国立公園では日本初、北海道阿寒湖に誕生する体験型ナイトウォーク「KAMUY LUMINA(カムイルミナ)」。先住民族アイヌの物語をベースに描かれた、まったく新しい夜の森の物語。幻想的な光と音、映像、ストーリーがあなたを未知の世界へ誘います。">
	<meta property="og:url" content="https://www.kamuylumina.jp">
	<meta property="og:image" content="https://www.kamuylumina.jp/assets/img/ogp_jp.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/head_link.php'); ?>
	<!---->

	<!---->
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/head_tag.php'); ?>
</head>

<body class="jp">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/body_tag.php'); ?>
	<div class="wrapper">
		<div class="contents">
			<div class="head">
				<div class="smp">
					<div class="menu">
						<div class="h_logo">
							<h1><a href="/"><img src="/assets/img/title.png" alt="KAMUY LUMINA"></a></h1>
						</div>
						<p class="menu-button"><img src="/assets/img/menu_w.svg" class="c"><img src="/assets/img/menu_close.png" class="o"></p>
					</div>
					<div class="menu-list">
						<ul>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="story.php">THE STORY</a></li>
							<li><a class="smooth" href="#sec_tickets">TICKETS</a></li>
							<li><a href="information-faq.php">INFORMATION／FAQ</a></li>
							<li><a href="access.php">ACCESS</a></li>
							<li><a href="contact.php">CONTACT US</a></li>
						</ul>
						<div class="lang-set">
							<div class="jp-s">
								<p>日本語</p>
								<span> | </span><a href="/en">ENGLISH</a><span> | </span><a href="/sc">簡体中文</a><span> | </span><a href="/tc">繁體中文</a><span> | </span><a href="/kr">한국어</a>
							</div>
							<div class="en-s"><a href="/">日本語</a><span> | </span>
								<p>ENGLISH</p>
								<span> | </span><a href="/sc">簡体中文</a><span> | </span><a href="/tc">繁體中文</a><span> | </span><a href="/kr">한국어</a>
							</div>
							<div class="kr-s"><a href="/">日本語</a><span> | </span><a href="/en">ENGLISH</a><span> | </span><a href="/sc">簡体中文</a><span> | </span><a href="/tc">繁體中文</a><span> | </span>
								<p>한국어</p>
							</div>
							<div class="sc-s"><a href="/">日本語</a><span> | </span><a href="/en">ENGLISH</a><span> | </span>
								<p>簡体中文</p>
								<span> | </span><a href="/tc">繁體中文</a><span> | </span><a href="/kr">한국어</a>
							</div>
							<div class="tc-s"><a href="/">日本語</a><span> | </span><a href="/en">ENGLISH</a><span> | </span><a href="/sc">SC</a><span> | </span>
								<p>繁體中文</p>
								<span> | </span><a href="/kr">한국어</a>
							</div>
						</div>
					</div>
				</div>
				<div class="in pcmenu">
					<div class="h_logo">
						<h1><a href="/"><img src="/assets/img/title.png" alt="KAMUY LUMINA"> </a></h1>
					</div>
					<div class="h_top">
						<ul>
							<li><a href="about.php">ABOUT</a></li>
							<li><a href="story.php">THE STORY</a></li>
							<li><a class="smooth" href="#sec_tickets">TICKETS</a></li>
							<li><a href="information-faq.php">INFORMATION／FAQ</a></li>
							<li><a href="access.php">ACCESS</a></li>
							<li><a href="contact.php">CONTACT US</a></li>
						</ul>
						<dl class="lang">
							<dt><span>LANGUAGE</span></dt>
							<dd>
								<p class="act">日本語</p>
								<p><a href="/en/">ENGLISH</a></p>
								<p><a href="/kr/">한국어</a></p>
								<p><a href="/sc/">簡体中文</a></p>
								<p><a href="/tc/">繁體中文</a></p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="main"> <a href="#sec_tickets" class="purchase_btn smooth"><span class="fpop">TICKETS</span>チケット購入は<br>コチラ<img src="/assets/img/purchase_btn_arrow.svg" width="9" height="11" class="thum"></a>
				<div class="page page-m">
					<div class="mainv section"><img src="/assets/img/main_jp.jpg"> </div>
					<?php
				$cancelargs = array(
					'post_type' => 'cancel',
					'posts_per_page' => 1
				);
				$cancelcspost = new WP_Query( $cancelargs );
				if ( $cancelcspost->have_posts() ): ?>
					<?php while($cancelcspost -> have_posts()) : $cancelcspost -> the_post(); ?>
					<section class="openinfo">
						<div class="flex">
							<div class="infor_ttl">
								<h2 class="secttl">INFORMATION</h2>
								<a id="shun_bnr" href="https://www.jtb.co.jp/nihonnoshun/hokkaido/" target="_blank"><img src="/assets/img/nihonnoshun_bnr.jpg" width="300" height="125" alt="WOW!HOKKAIDO LOVE! 日本の旬 北海道"></a>
							</div>
							<div id="cancel"> <strong><?php echo get_the_title(); ?></strong>
								<p>
									<?php the_field('maintxt'); ?>
								</p>
								<?php if(!empty($value)):?>
								<strong>
									<?php the_field('txt'); ?>
								</strong>
								<?php endif;?>
								<div class="pb_btn"> <a class="btn_plt" href="/assets/img/pamphlet_2023.pdf" target="_blank"><span class="sankaku">パンフレットは<span class="ilblk">こちら</span></span></a> <a class="btn_plt" href="/assets/img/brandbook_2023.pdf" target="_blank"><span class="sankaku">ブランドブックは<span class="ilblk">こちら</span></span></a> </div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</section>
				</div>
				<section id="award_bnr">
					<div class="page">
						<div class="imgblk"><img src="/assets/img/award_bnr_2.svg" width="758" class="thum"></div>
					</div>
				</section>
				<section id="about" class="section">
					<div class="page">
						<div class="txtblk">
							<h2 class="secttl">ABOUT KAMUY LUMINA</h2>
							<h3 class="subttl"><span class="min">MOMENT FACTORY社が<span class="ilblk">世界中で展開する</span></span><br>ルミナ・<span class="ilblk">ナイトウォーク・</span><span class="ilblk">シリーズ。</span></h3>
							<p>今回の舞台は、北海道、阿寒摩周国立公園にある阿寒湖。<br>湖畔の森から1.2kmの道をたどり、アイヌの神の世界を目指す夢のような体験が、夕暮れとともにはじまります。</p>
						</div>
						<div class="pb_btn"> <a class="btn_plt" href="about.php"><span class="sankaku">詳しくは<span class="ilblk">こちら</span></span></a> </div>
						<div class="in">
							<div class="movie-area movie01">
								<!--<img src="/assets/img/discoverPlay.png" width="523" class="thum">-->
								<iframe src="https://www.youtube.com/embed/uBLTQ2bxkyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
							<div class="movie-min-box">
								<div class="movie-area movie02">
									<!--<img src="/assets/img/discoverPlay.png" width="523" class="thum">-->
									<iframe src="https://www.youtube.com/embed/uwOskkegffY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								</div>
								<div class="movie-area movie03">
									<!--<img src="/assets/img/discoverPlay.png" width="523" class="thum">-->
									<iframe src="https://www.youtube.com/embed/QBvBizbbmOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="bg_kamui"> <img src="/assets/img/bg_text.png?<?php echo date('YmdHis'); ?>" width="3213" alt="KAMUY LUMINA"><img src="/assets/img/bg_text.png?<?php echo date('YmdHis'); ?>" width="3213" alt="KAMUY LUMINA"><img src="/assets/img/bg_text.png" width="3213" alt="KAMUY LUMINA"> </div>
				</section>

				<?php if (is_user_logged_in()) : ?>
				<!-- ログインしてたら↓ -->
				<section id="sec_tickets" class="tickets section test">
					<div class="page">
						<div class="txtblk">
							<h2 class="secttl">TICKET-test</h2>
							<p class="intro">※チケットは、本HPまたは、阿寒湖周辺ホテル、カムイルミナチケットブース、指定旅⾏会社にて販売。<br>カムイルミナとロストカムイのお得なセット券も販売しております。</p>
						</div>
						<div class="purchase tickets1">
							<h3 class="tck_ttl">KAMUY LUMINA 入場券</h3>
							<div class="tickets_conts">
								<div class="tickets_btn"><a class="btn_tckt" href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank"><span class="sankaku">チケット購入は<span class="ilblk">コチラ</span></span></a></div>
								<div class="price">
									<div class="flex">
										<div class="row">
											<dl>
												<dt>大人<span>(中学生以上)</span></dt>
												<dd>前売：3,000円<br>当日：3,500円</dd>
											</dl>
										</div>
										<div class="row rowend">
											<dl>
												<dt>小人<span>(小学生)&nbsp;</span><span class="min">※未就学児は無料。</span></dt>
												<dd>前売：1,500円<br>当日：1,700円</dd>
											</dl>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="purchase tickets2">
							<h3 class="tck_ttl">KAMUY LUMINA ＋ <span class="ilblk">ロストカムイ セット券</span></h3>
							<div class="tickets_conts">
								<div class="tickets_btn"><a class="btn_tckt" href="https://webket.jp/pc/ticket/index?fc=80050&ac=9000" target="_blank"><span class="sankaku">チケット購入は<span class="ilblk">コチラ</span></span></a></div>
								<div class="price">
									<div class="flex">
										<div class="row">
											<dl>
												<dt>大人<span>(中学生以上)</span></dt>
												<dd>4,700円</dd>
											</dl>
										</div>
										<div class="row rowend">
											<dl>
												<dt>小人<span>(小学生)&nbsp;</span><span class="min">※未就学児は無料。</span></dt>
												<dd>2,100円</dd>
											</dl>
										</div>
									</div>
								</div>
								<div class="reference">
									<p>【参考情報】</p>
									<dl class="reference_list">
										<dt>●ロストカムイ入場料金<span class="ilblk">(1施設のみ)</span></dt>
										<dd>大人(中学生以上)：@2,200円、<span class="ilblk">小人(小学生)：@700円</span></dd>
									</dl>
								</div>
								<div class="conts">
									<dl>
										<div>
											<dt>【ご注意】</dt>
											<dd>・カムイルミナ：購入時に入場日時の予約必用<br>・ロストカムイ：予約不要<br>・15:00～、21:00～の1日2回公演となりますが、季節変動や不定期の休演がございますので、購入前に下記にてご確認ください。</dd>
										</div>
										<div>
											<dt>【ロストカムイ公演スケジュール】</dt>
											<dd><a href="https://www.akanainu.jp/news/567" target="_blank" rel="noopener noreferrer">https://www.akanainu.jp/news/567</a><a href="https://www.akanainu.jp/news" target="_blank" rel="noopener noreferrer"> https://www.akanainu.jp/news</a>（ロストカムイ主催：阿寒アイヌ工芸協同組合）</dd>
										</div>
									</dl>
								</div>
							</div>
						</div>
						<div class="purchase tickets3">
							<h3 class="tck_ttl">KAMUY LUMINA・ <span class="ilblk">貸切プラン</span></h3>
							<div class="tickets_conts">
								<div class="tickets_btn"><a class="btn_tckt" href="" target="_blank"><span class="sankaku">お申込は<span class="ilblk">コチラ</span></span></a></div>
								<p class="tickets_text">1枠貸切料金:300,000円(税込 1名〜100名まで入場可能)</p>
								<p class="tickets_text">外国語対応ガイド料金(オプショナル):30,000円(税込 ガイド1名 2時間まで)</p>
								<ul class="tickets_text--list">
									<li>・貸切できる時間は21:00以降で、お申込時に他の予約が入ってない場合にご予約を承ります。</li>
									<li>・上記よりお申込いただき、後日弊社よりご回答申し上げます。</li>
								</ul>
							</div>
						</div>
						<div class="purchase tickets4">
							<h3 class="tck_ttl">KAMUY LUMINA・<span class="ilblk">アイヌスタイルプラン<span class="ilblk">(オリジナルグッズ付)</span></span></h3>
							<div class="tickets_conts">
								<div class="price">
									<div class="flex">
										<div class="row">
											<dl>
												<dt>大人<span>(中学生以上)</span></dt>
												<dd>8,000円</dd>
											</dl>
										</div>
										<div class="row rowend">
											<dl>
												<dt>小人<span>(小学生)&nbsp;</span></dt>
												<dd>1,500円<br><span class="min">※小人用のアイヌスタイルプラン設定はございませんので通常の入場料金となります。</span></dd>
											</dl>
										</div>
									</div>
								</div>
								<ul class="tickets_text--list">
									<li>・アイヌ文様やアイヌ語・芸能・料理など、アイヌ文化に照らして監修・制作・認証を行っている「阿寒アイヌコンサルン」に依頼し、オリジナル・アイヌ文様半纏を着用し、アイヌ文化やカムイルミナストーリーとの一体感をお楽しみください。</li>
									<li>※「オリジナル・アイヌ文様半纏」は、カムイルミナ見学時のみのレンタル品となりますのでお持ち帰りはできませんのでご了承ください。</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<?php else : ?>
				<!-- ログインしてなかったら↓ -->
				<section id="sec_tickets" class="tickets section">
					<div class="page">
						<div class="txtblk">
							<h2 class="secttl">TICKETS</h2>
							<p class="intro">※チケットは、本HPまたは、阿寒湖周辺ホテル、カムイルミナチケットブース、指定旅⾏会社にて販売。<br>カムイルミナとロストカムイのお得なセット券も販売しております。</p>
						</div>
						<div class="purchase tickets1">
							<h3 class="tck_ttl">KAMUY LUMINA 入場券</h3>
							<div class="tickets_conts">
								<div class="tickets_btn"><a class="btn_tckt" href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank"><span class="sankaku">チケット購入は<span class="ilblk">コチラ</span></span></a></div>
								<div class="price">
									<div class="flex">
										<div class="row">
											<dl>
												<dt>大人<span>(中学生以上)</span></dt>
												<dd>前売：3,000円<br>当日：3,500円</dd>
											</dl>
										</div>
										<div class="row rowend">
											<dl>
												<dt>小人<span>(小学生)&nbsp;</span><span class="min">※未就学児は無料。</span></dt>
												<dd>前売：1,500円<br>当日：1,700円</dd>
											</dl>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="purchase tickets2">
							<h3 class="tck_ttl">KAMUY LUMINA ＋ <span class="ilblk">ロストカムイ セット券</span></h3>
							<div class="tickets_conts">
								<div class="tickets_btn"><a class="btn_tckt" href="https://webket.jp/pc/ticket/index?fc=80050&ac=9000" target="_blank"><span class="sankaku">チケット購入は<span class="ilblk">コチラ</span></span></a></div>
								<div class="price">
									<div class="flex">
										<div class="row">
											<dl>
												<dt>大人<span>(中学生以上)</span></dt>
												<dd>4,700円</dd>
											</dl>
										</div>
										<div class="row rowend">
											<dl>
												<dt>小人<span>(小学生)&nbsp;</span><span class="min">※未就学児は無料。</span></dt>
												<dd>2,100円</dd>
											</dl>
										</div>
									</div>
								</div>
								<div class="reference">
									<p>【参考情報】</p>
									<dl class="reference_list">
										<dt>●ロストカムイ入場料金<span class="ilblk">(1施設のみ)</span></dt>
										<dd>大人(中学生以上)：@2,200円、<span class="ilblk">小人(小学生)：@700円</span></dd>
									</dl>
								</div>
							</div>
						</div>
						<div class="conts">
							<dl>
								<div>
									<dt>【ご注意】</dt>
									<dd>・カムイルミナ：購入時に入場日時の予約必用<br>・ロストカムイ：予約不要<br>・15:00～、21:00～の1日2回公演となりますが、季節変動や不定期の休演がございますので、購入前に下記にてご確認ください。</dd>
								</div>
								<div>
									<dt>【ロストカムイ公演スケジュール】</dt>
									<dd><a href="https://www.akanainu.jp/news/567" target="_blank" rel="noopener noreferrer">https://www.akanainu.jp/news/567</a><a href="https://www.akanainu.jp/news" target="_blank" rel="noopener noreferrer"> https://www.akanainu.jp/news</a>（ロストカムイ主催：阿寒アイヌ工芸協同組合）</dd>
								</div>
							</dl>
						</div>
					</div>
				</section>
				<?php endif;?>

				<section id="other" class="section">
					<div class="page">
						<h2 class="secttl">DISCOVER OTHER NIGHT WALKS</h2>
						<span></span><img src="/assets/img/contact_ph.png" width="41"><a href="https://momentfactory.com/lumina/en/" target="_blank" class="btn">世界のルミナを見る</a>
					</div>
				</section>
			</div>
		</div>
		<footer>
			<div class="in"><a href="https://momentfactory.com/home" target="_blank" class="mf"> <img src="/assets/img/footer_mt_logo.png" width="105" alt="Moment Factory"></a><a href="http://akanat.co.jp/" target="_blank" class="at"> <img src="/assets/img/footer_akan_logo.svg" width="150" alt="Akan Adventure Tourism Co."></a></div>
		</footer>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/util.js"></script>
	<script type="text/javascript" src="/assets/js/modernizr-custom.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.rwdImageMaps.min.js"></script>
	<script type="text/javascript" src="/assets/js/top.js?<?php echo date('YmdHis'); ?>"></script>
	<!-- <script type="text/javascript" src="/assets/js/common.js"></script> -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
	//イメージマップ
	$(document).ready(function(e) {
		$(".journey .imgmap").rwdImageMaps();
	});
	</script>
</body>

</html>