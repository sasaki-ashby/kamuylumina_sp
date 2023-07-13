<?php
/*
Template Name: スペシャルページトップ
*/
?>
<?php
$user = 'kamuylumina';
$pass = 'eizoutest';
if ( isset( $_SERVER[ 'PHP_AUTH_USER' ] ) && ( $_SERVER[ "PHP_AUTH_USER" ] == $user && $_SERVER[ "PHP_AUTH_PW" ] == $pass ) ) {

} else {
	header( "WWW-Authenticate: Basic realm=\"nter username and password.\"" );
	header( "HTTP/1.0 401 Unauthorized - basic" );
	die( 'このページを見るにはログインが必要です' );
}

require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/assets/sp/include/header.php' );
?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/klwp/wp-content/themes/staffTemplate/inc/lang_".$sp_lang."_top.php");?>
<div class="top"> 
	<!-- スライド1枚目 --> 
	<!-- スライド1枚目 -->
	<div class="top1-main-container">
		<div class="top1-title-img"> <img src="/assets/sp/common/img/logo.svg" alt="" /></div>
		<p class="top1-sub-title"><?php echo $top_copy['top1'][0]?></p>
		<!--<p class="top1-date-text">2023.07.15　UPGRADE<?php echo $top_copy['top1'][1]?></p>-->
		<p class="top1-text"><?php echo $top_copy['top1'][2]?></p>
		<a href="<?php echo lang_link( '/' , $sp_lang ,$sp_lang);?>">
		<div class="top1-under-container"><img class="top1-under-left-img" src="/assets/sp/top/img/top1_2.jpg" alt="" />
			<div class="top1-text-container">
				<p class="under-p-1">KAMUY LUMINA</p>
				<p class="under-p-2"> <?php echo $top_copy['top1'][3]?> </p>
			</div>
			<img src="/assets/sp/common/img/icons/arrow_right.png" alt="" /></div>
		</a></div>
	<!-- スライド1枚目 --> 
	<!-- スライド1枚目 --> 
	
	<!-- スライド2枚目 --> 
	<!-- スライド2枚目 -->
	<div class="top2-main-container">
		<div class="top2-upper-container"><img class="top2-upper-img" src="/assets/sp/top/img/top2.jpg" />
			<div class="top2-upper-text-container">
				<p class="top2-upper-title"><?php echo $top_copy['top2'][0];?></p>
				<p class="top2-upper-text"><?php echo $top_copy['top2'][1];?></p>
			</div>
		</div>
		<div class="top2-under-container"><img class="top2-under-img" src="/assets/sp/top/img/top2_smartfon.png" alt="" />
			<div class="top2-under-left">
				<div class="top2-under-btn">MOBILE APPS</div>
				<p class="top2-under-text1"><?php echo $top_copy['top2'][2];?></p>
			</div>
		</div>
	</div>
	<!-- スライド2枚目 --> 
	<!-- スライド2枚目 --> 
	
	<!-- スライド3枚目 --> 
	<!-- スライド3枚目 -->
	<div class="top3-main-container scrollify">
		<div class="top3-left-container">
			<p class="top3-title"><?php echo $top_copy['top3'][0];?></p>
			<span class="top3-sub-title">2019-LAKE AKAN, JAPAN</span> </div>
		<div class="top3-right-container"> <img class="top3-right-img" src="/assets/sp/top/img/top3-icon1.png" alt="" /> <img class="top3-right-icon" src="/assets/sp/top/img/top3-icon2.png" alt="" /> </div>
	</div>
	<!-- スライド3枚目 --> 
	<!-- スライド3枚目 --> 
	
	<!-- スライド4枚目 --> 
	<!-- スライド4枚目 -->
	<div class="top4-main-container">
		<div class="top4-left-container">
			<div class="top4-left-inner">
				<h3 class="top4-title"><?php echo $top_copy['top4'][0];?></h3>
				<p class="top4-text1">ABOUT KAMUY LUMINA</p>
			</div>
			<p class="top4-text2"><?php echo $top_copy['top4'][1];?></p>
		</div>
		<div class="top4-right-container"><img class="top4-right-img" src="/assets/sp/top/img/top4_img.jpg" alt="" /></div>
	</div>
	<!-- スライド4枚目 --> 
	<!-- スライド4枚目 --> 
	
	<!-- スライド5枚目 --> 
	<!-- スライド5枚目 -->
	<div class="top5-main-container">
		<div class="top5-main-inner"><img class="top5-left-img" src="/assets/sp/top/img/top5_img.jpg" alt="" />
			<p class="top5-text"><?php echo $top_copy['top5'][0];?></p>
		</div>
	</div>
	<!-- スライド5枚目 --> 
	<!-- スライド5枚目 --> 
	
	<!-- スライド6枚目 --> 
	<!-- スライド6枚目 -->
	<div class="top6-main-container scrollify">
		<div class="top6-main-contents"><img class="top6-img" src="/assets/sp/top/img/top6_img.jpg" alt="" />
			<p class="top6-text"><?php echo $top_copy['top6'][0];?></p>
		</div>
	</div>
	<!-- スライド6枚目 --> 
	<!-- スライド6枚目 --> 
	
	<!-- スライド7枚目 --> 
	<!-- スライド7枚目 -->
	<div class="top7-main-container">
		<div class="top7-container">
			<p class="top7-upper-text"><?php echo $top_copy['top7'][0];?></p>
		</div>
		<p class="top7-under-text"><?php echo $top_copy['top7'][1];?></p>
	</div>
	<!-- スライド7枚目 --> 
	<!-- スライド7枚目 --> 
	
	<!-- スライド8枚目 --> 
	<!-- スライド8枚目 -->
	<div class="top8-main-container">
		<div class="top8-upper-container">
			<div class="top8-left-container"> <img class="top8-left-img" src="/assets/sp/top/img/top8_img.jpg" /> 
				<!--             仕様変更のためコメントアウト
				<div class="top8-text-container">
					<p class="top8-text1"><?php echo $top_copy['top8'][0];?></p>
				</div>
				<div class="top8-sp-text1"><?php echo $top_copy['top8'][0];?></div>
				--> 
			</div>
			<div class="top8-right-container">
				<div class="top8-right-inner">
					<h3 class="top8-title"><?php echo $top_copy['top8'][1];?></h3>
					<p class="top8-text2">ENJOY AKAN</p>
				</div>
				<p class="top8-text3"><?php echo $top_copy['top8'][2];?></p>
				<a class="top2-a" href="<?php echo lang_link("/sp/enjoy/" , $sp_lang , $sp_lang);?>">
				<div class="top8-more-btn" id="moreButton">
					<p class="top8-text-btn"><?php echo $common_lang_text["VIEW MORE"];?></p>
					<img class="top8-arrow-icon" src="/assets/sp/common/img/icons/arrow_right.png" /> </div>
				</a> </div>
		</div>
		<div class="top8-under-container">
			<ul class="top8-img-list">
				<?php
				$args = array(
					'post_type' => 'enjoy',
					'posts_per_page' => 5,
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						?>
				<!-- 記事1件:start/ -->
				<li> <a href="<?php echo lang_link( url_domain_del( get_permalink() ) , $sp_lang , $sp_lang);?>"> <img class="top8-img" src="<?php the_field('head_img_thum');?>" /><span class="image-caption"><?php echo the_field("head_title_$sp_lang");?></span> </a> </li>
				<?php
				}
				}
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</div>
	<!-- スライド8枚目 --> 
	<!-- スライド8枚目 --> 
	
	<!-- スライド9枚目 --> 
	<!-- スライド9枚目 -->
	<div class="top9-main-container">
		<div class="top9-container">
			<div class="overlay"></div>
			<div class="top9-content">
				<h3 class="top9-title"><?php echo $top_copy['top9'][0];?></h3>
				<p class="top9-text1">KAMUY LUMINA REVIEWS</p>
				<div class="top9-left-inner">
					<p class="top9-text2"><?php echo $top_copy['top9'][1];?></p>
				</div>
			</div>
			<ul class="top9-card-container">
				<a href="">
				<li class="top9-card">
				<p><?php echo $common_lang_text["Coming soon"];?></p>
				</li>
				</a> <a href="">
				<li class="top9-card top9-card-sp-display-none">
				<p><?php echo $common_lang_text["Coming soon"];?></p>
				</li>
				</a> <a href="">
				<li class="top9-card top9-card-sp-display-none">
				<p><?php echo $common_lang_text["Coming soon"];?></p>
				</li>
				</a>
			</ul>
		</div>
	</div>
	<!-- スライド9枚目 --> 
	<!-- スライド9枚目 --> 
	
	<!-- スライド10枚目 --> 
	<!-- スライド10枚目 --> 
	<!--<div class="top10-main-container"></div>--> 
	<!-- スライド10枚目 --> 
	<!-- スライド10枚目 --> 
	
	<!-- スライド11枚目 --> 
	<!-- スライド11枚目 -->
	<div class="top11-main-container">
		<div class="top11-left-container">
			<div class="top11-left-inner">
				<h3 class="top11-title"><?php echo $top_copy['top11'][0];?></h3>
				<p class="top11-text1">ACCESS</p>
			</div>
			<p class="top11-left-text"><?php echo $top_copy['top11'][1];?></p>
			<div class="top11-line"></div>
			<p class="top11-left-text"><?php echo $top_copy['top11'][2];?></p>
		</div>
		<div class="top11-right-container">
			<div><img class="top11-img" src="/assets/sp/top/img/top11_img.jpg" /></div>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897.2536838325714!2d144.0963334117007!3d43.43441747099282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f7285d6b066493d%3A0x7d10c46e6a020db!2z6Zi_5a-S6Kaz5YWJ5rG96Ii544ix!5e0!3m2!1sja!2sjp!4v1689073474958!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
	<!-- スライド11枚目 --> 
	<!-- スライド11枚目 --> 
	
	<!-- スライド12枚目 --> 
	<!-- スライド12枚目 -->
	<div id="gallery" class="top12-main-container scrollify"> <img class="top12-left-img" src="/assets/sp/top/img/top12_img.jpg" /> <img class="top12-left-img2" src="/assets/sp/top/img/top11_img_sp.jpg" />
		<div class="top12-right-container">
			<div class="top12-right-text-container">
				<p class="top12-right-title"><?php echo $common_lang_text["ギャラリー"];?></p>
				<p class="top12-right-sub"><?php echo $common_lang_text["GALLERY"];?></p>
			</div>
			<a href="https://www.instagram.com/kamuy_lumina/" target="_blank">
			<div class="top12-more-btn" id="moreButton">
				<p class="top12-text-btn">INSTAGRAM</p>
				<img loading="lazy" class="top12-arrow-icon" src="/assets/sp/common/img/icons/arrow_right_wihte.png" /> </div>
			</a> </div>
	</div>
	<!-- スライド12枚目 --> 
	<!-- スライド12枚目 --> 
	
	<!-- スライド13枚目 --> 
	<!-- スライド13枚目 -->
	<div class="top13-main-container scrollify">
		<div class="top13-left-container">
			<div class="top13-left-text-container">
				<?php if($sp_lang == "ni"){?>
				<a href="http://akanat.co.jp/atdepartment/" target="_blank">
					<img loading="lazy" class="top13-left-img" src="/assets/sp/top/img/top13_img1.jpg" />
					<p class="top13-title">Akan Adventure Tourism</p>
					<p class="top13-sub-title"> http://akanat.co.jp/atdepartment/</p>
				</a>
				<?php }else{?>
				<a href="http://akanat.co.jp/atdepartment/en/" target="_blank">
					<img loading="lazy" class="top13-left-img" src="/assets/sp/top/img/top13_img1.jpg" />
					<p class="top13-title">Akan Adventure Tourism</p>
					<p class="top13-sub-title">http://akanat.co.jp/atdepartment/en/</p>
				</a>
				<?php }?>
				<p class="top13-text"><?php echo $top_copy['top13'][0];?></p>
			</div>
			
			<?php if($sp_lang == "ni"){?>
			<a href="http://akanat.co.jp/atdepartment/" target="_blank">
			<?php }else{?>
			<a href="http://akanat.co.jp/atdepartment/en/" target="_blank">
			<?php }?>
				<div class="top13-more-btn" id="moreButton">
				<p class="top13-text-btn"><?php echo $common_lang_text["VIEW MORE"];?>E</p>
				<img loading="lazy" class="top13-arrow-icon" src="/assets/sp/common/img/icons/arrow_right.png" />
				</div>
			</a>
		</div>
		<div class="top13-right-container">
			<div class="top13-right-text-container">
				<a href="<?php echo lang_link( '/' , $sp_lang ,$sp_lang);?>">
					<img loading="lazy" class="top13-right-img" src="/assets/sp/top/img/top13_img2.jpg" />
					<p class="top13-title"><?php echo $top_copy['top13'][1];?></p>
					<p class="top13-sub-title"><?php echo home_url().lang_link( '/' , $sp_lang ,$sp_lang);?></p>
				</a>
				<p class="top13-text"><?php echo $top_copy['top13'][2];?></p>
			</div>
			<a href="<?php echo lang_link( '/' , $sp_lang ,$sp_lang);?>">
				<div class="top13-more-btn" id="moreButton">
					<p class="top13-text-btn"><?php echo $common_lang_text["VIEW MORE"];?></p>
					<img loading="lazy" class="top13-arrow-icon" src="/assets/sp/common/img/icons/arrow_right.png" />
				</div>
			</a>
		</div>
	</div>
	<!-- スライド13枚目 --> 
	<!-- スライド13枚目 --> 
	
	<!-- スライド14枚目 --> 
	<!-- スライド14枚目 -->
	<div class="top14-main-container scrollify">
		<div class="top14-left-container">
			<p class="top14-title"><?php echo $top_copy['top14'][0];?></p>
			<p class="top14-text"><?php echo $top_copy['top14'][1];?></p>
			<div class="top14-sns-container"> <a href="https://www.facebook.com/akan.adventure" target="_blank">
				<div class="top14-facebook-btn"><img loading="lazy" class="top14-facebook-icon" src="/assets/sp/top/img/facebook_icon.png" alt="facebook_icon" />FACEBOOK</div>
				</a> <a href="https://www.instagram.com/kamuy_lumina/" target="_blank">
				<div class="top14-instagram-btn"><img loading="lazy" class="top14-instagram-icon" src="/assets/sp/top/img/instagram_icon.png" alt="instagram_icon" />INSTAGRAM</div>
				</a> </div>
		</div>
		<div class="top14-right-container"> </div>
	</div>
	<!-- スライド14枚目 --> 
	<!-- スライド14枚目 --> 
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/footer.php');?>
<script>
      document.addEventListener('DOMContentLoaded', function () {
        const details = document.querySelectorAll('.detail');
        details[0].classList.add('selected');
        details.forEach((detail) => {
          detail.addEventListener('click', function () {
            details.forEach((d) => d.classList.remove('selected'));

            this.classList.add('selected');
          });
        });
      });
    </script> 
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script> 
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"
      integrity="sha512-UyX8JsMsNRW1cYl8BoxpcamonpwU2y7mSTsN0Z52plp7oKo1u92Xqfpv6lOlTyH3yiMXK+gU1jw0DVCsPTfKew=="
      crossorigin="anonymous"
    ></script> 
<script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-8/js/5-1-8.js"></script> 

<!-- CDN読み込み --> 
<!--
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    --> 
<!-- JSファイル読み込み --> 
</body></html>