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

<!-- ========== sp_top/ ========== -->
<main class="sp_top">
	<article class="sp_top_article">
		<section class="sp_top1" id="mainimage">
			<div class="section_detail">
				<div class="sp_top1_detail">
					<div class="top1_hgroup">
						<h1><img src="/assets/sp/top/img/top1_logo.svg" width="166" height="129" alt="KAMUY LUMINA"></h1>
						<h2><?php echo $top_copy['top1'][0]?></h2>
					</div>
					<div class="top1_information"> 
						<!--<h3><?php echo $top_copy['top1'][1]?></h3>-->
						<p><?php echo $top_copy['top1'][2]?></p>
					</div>
					<div class="top1_column"> <a href="https://www.kamuylumina.jp/" target="_blank">
						<figure><img src="/assets/sp/top/img/top1_img01.jpg" width="180" height="100" alt=""></figure>
						<div class="top1_column_read">
							<h4>KAMUY LUMINA</h4>
							<p><?php echo $top_copy['top1'][3]?></p>
						</div>
						</a> </div>
				</div>
				<!-- /.sp_top1_detail --> 
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top1 -->
		
		<section class="sp_top2 sp_comingup" id="apps">
			<div class="section_detail">
				<div class="sp_top2_detail1">
					<figure><img src="/assets/sp/top/img/top2_img01.jpg" alt=""></figure>
					<div class="sp_top2_read">
						<h2><?php echo $top_copy['top2'][0];?></h2>
						<p><?php echo $top_copy['top2'][1];?></p>
					</div>
				</div>
				<div class="sp_top2_detail2">
					<figure><img src="/assets/sp/top/img/top2_img02.png" alt=""></figure>
					<div class="sp_top2_read">
						<h3><span>MOBILE APPS</span></h3>
						<p><?php echo $top_copy['top2'][2];?></p>
						<p class="sp_top2_caption"><?php echo $top_copy['top2'][3];?></em></p>
					</div>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top2 -->
		
		<section class="sp_top3" id="nightwalk">
			<div class="section_detail">
				<div class="sp_top3_detail">
					<div class="sp_top3_read animebox">
						<h2><?php echo $top_copy['top3'][0];?></h2>
						<p>2019-LAKE AKAN, JAPAN</p>
					</div>
					<figure><img src="/assets/sp/top/img/top3_img01.svg" width="544" height="507" alt=""></figure>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top3 -->
		
		<section class="sp_top4" id="about">
			<div class="section_detail">
				<div class="sp_top4_detail">
					<div class="sp_top4_read">
						<div class="sp_top4_hgroup section_hgroup">
							<h2 class="section_title"><?php echo $top_copy['top4'][0];?><em class="section_ruby">ABOUT KAMUY LUMINA</em></h2>
						</div>
						<div class="sp_top4_column">
							<p><?php echo $top_copy['top4'][1];?></p>
						</div>
					</div>
					<figure class="animebox"><img src="/assets/sp/top/img/top4_img01.jpg" width="650" height="650" alt=""></figure>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top4 -->
		
		<section class="sp_top5" id="zone">
			<div class="section_detail">
				<div class="sp_top5_detail">
					<figure class="animebox"><img src="/assets/sp/top/img/top5_img01.jpg" width="768" height="768" alt=""></figure>
					<div class="sp_top5_read">
						<p><?php echo $top_copy['top5'][0];?></p>
					</div>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top5 -->
		
		<section class="sp_top6" id="keyitem">
			<div class="section_detail">
				<div class="sp_top6_detail">
					<figure class="animebox">
						<picture>
							<source media="(min-width: 769px)" srcset="/assets/sp/top/img/top6_img01_pc.jpg">
							<img src="/assets/sp/top/img/top6_img01_sp.jpg" alt=""> </picture>
					</figure>
					<div class="sp_top6_read">
						<p><?php echo $top_copy['top6'][0];?></p>
					</div>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top6 -->
		
		<section class="sp_top7" id="arts">
			<div class="section_detail">
				<div class="sp_top7_detail">
					<div class="sp_top7_read animebox">
						<div class="sp_top7_read_catch animebox">
							<p><?php echo $top_copy['top7'][0];?></p>
						</div>
					</div>
				</div>
				<div class="sp_top7_columm">
					<p><?php echo $top_copy['top7'][1];?></p>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top7 -->
		
		<section class="sp_top8" id="enjoy">
			<div class="section_detail">
				<div class="sp_top8_detail">
					<figure> <a href="<?php echo lang_link( '/sp/enjoy/' , $sp_lang ,$sp_lang);?>"> <img src="/assets/sp/top/img/top8_img01.jpg" width="930" height="460" alt=""> 
						<!--<figcaption>
							<p><?php echo $top_copy['top8'][0];?></p>
						</figcaption>--> 
						</a> </figure>
					<div class="sp_top8_read">
						<div class="sp_top8_hgroup section_hgroup">
							<h2 class="section_title"><?php echo $top_copy['top8'][1];?><em class="section_ruby">ENJOY AKAN</em></h2>
						</div>
						<p><?php echo $top_copy['top8'][2];?></p>
						<div class="sp_top8_read_nav"> <a href="<?php echo lang_link( '/sp/enjoy/' , $sp_lang ,$sp_lang);?>" class="sp_top_btn_more" title="<?php echo $top_copy['top8'][1];?>"><span><?php echo $common_lang_text["VIEW MORE"];?></span></a> </div>
					</div>
				</div>
				<div class="sp_top8_column">
					<ul class="sp_top8_slide">
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
						<li> <a href="<?php echo lang_link( url_domain_del( get_permalink() ) , $sp_lang , $sp_lang);?>"> <span><img class="top8-img" src="<?php the_field('head_img_thum');?>" width="200" height="120" alt=""></span> <em><?php echo the_field("head_title_$sp_lang");?></em> </a> </li>
						<?php
						}
						}
						wp_reset_postdata();
						?>
					</ul>
				</div>
				<!-- /.sp_top8_column --> 
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top8 -->
		<section class="sp_top9" id="review">
			<div class="section_detail">
				<div class="sp_top9_detail">
					<div class="sp_top9_hgroup">
						<h2><?php echo $top_copy['top9'][0];?></h2>
						<p><em>KAMUY LUMINA REVIEWS</em></p>
					</div>
					<p class="sp_top9_read"><?php echo $top_copy['top9'][1];?></p>
				</div>
				<div class="sp_top9_column">
					<div class="sp_top9_column_slide"> 
						<!--
						<div class="sp_top9_column_data">
							<h3>Robyn W.</h3>
							<ul class="sp_top9_column_score">
								<li><img src="/assets/sp/top/img/icn_star.svg" width="20" height="20" alt=""></li>
								<li><img src="/assets/sp/top/img/icn_star.svg" width="20" height="20" alt=""></li>
								<li><img src="/assets/sp/top/img/icn_star.svg" width="20" height="20" alt=""></li>
								<li><img src="/assets/sp/top/img/icn_star.svg" width="20" height="20" alt=""></li>
								<li><img src="/assets/sp/top/img/icn_star.svg" width="20" height="20" alt=""></li>
							</ul>
							<div class="sp_top9_column_read">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qu</p>
							</div>
						</div>
						<!-- /.sp_top9_column_data -->
						<div class="sp_top9_column_data">
							<p><?php echo $common_lang_text["Coming soon"];?></p>
						</div>
						<div class="sp_top9_column_data">
							<p><?php echo $common_lang_text["Coming soon"];?></p>
						</div>
						<!-- /.sp_top9_column_data -->
						
						<div class="sp_top9_column_data">
							<p><?php echo $common_lang_text["Coming soon"];?></p>
						</div>
						<!-- /.sp_top9_column_data --> 
						
					</div>
					<!-- /.sp_top9_column_slide --> 
				</div>
				<!-- /.sp_top9_column --> 
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top9 -->
		
		<section class="sp_top10" id="visual">
			<div class="section_detail animebox">
				<p><strong>KAMUY LUMINA</strong></p>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top10 -->
		
		<section class="sp_top11" id="access">
			<div class="section_detail">
				<div class="sp_top11_detail">
					<div class="sp_top11_read">
						<div class="sp_top11_hgroup section_hgroup">
							<h2 class="section_title"><?php echo $top_copy['top11'][0];?><em class="section_ruby">ACCESS</em></h2>
						</div>
						<div class="sp_top11_column">
							<h3><?php echo $top_copy['top11'][1];?></h3>
							<p><?php echo $top_copy['top11'][2];?></p>
							<h3><?php echo $top_copy['top11'][3];?></h3>
							<p><?php echo $top_copy['top11'][4];?></p>
							<h3><?php echo $top_copy['top11'][5];?></h3>
							<p><?php echo $top_copy['top11'][6];?></p>
						</div>
					</div>
					<div class="sp_top11_figure">
						<figure><img src="/assets/sp/top/img/top11_map01.png" alt="KAMUY LUMINA <?php echo $top_copy['top11'][0];?>"></figure>
						<div class="sp_top11_figure_map">
							<iframe src="<?php echo $top_copy['top11'][7];?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top11 -->
		
		<section class="sp_top12" id="gallery">
			<div class="section_detail">
				<div class="sp_top12_detail">
					<div class="sp_top12_read">
						<div class="sp_top12_hgroup section_hgroup">
							<h2 class="section_title"><?php echo $common_lang_text["ギャラリー"];?><em class="section_ruby"><?php echo $common_lang_text["GALLERY"];?></em></h2>
						</div>
						<div class="sp_top12_read_nav"><a href="https://www.instagram.com/kamuy_lumina/" class="sp_top_btn_more" target="_blank"><span>INSTAGRAM</span></a></div>
					</div>
					<div class="sp_top12_figure animebox">
						<ul class="sp_gallery">
						</ul>
					</div>
				</div>
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top12 -->
		
		<section class="sp_top13" id="links">
			<div class="section_detail">
				<div class="sp_top13_detail">
					<div class="sp_top13_column">
						<?php if($sp_lang == "ni"){?>
						<a href="http://akanat.co.jp/atdepartment/" target="_blank">
						<figure> <img src="/assets/sp/top/img/top13_img01.jpg" width="570" height="290" alt="Akan Adventure Tourism"> </figure>
						<div class="sp_top13_hgroup">
							<h2>Akan Adventure Tourism</h2>
							<p>http://akanat.co.jp/atdepartment/</p>
						</div>
						</a>
						<?php }else{?>
						<a href="http://akanat.co.jp/atdepartment/en/" target="_blank">
						<figure> <img src="/assets/sp/top/img/top13_img01.jpg" width="570" height="290" alt="Akan Adventure Tourism"> </figure>
						<div class="sp_top13_hgroup">
							<h2>Akan Adventure Tourism</h2>
							<p>http://akanat.co.jp/atdepartment/en/</p>
						</div>
						</a>
						<?php }?>
						<div class="sp_top13_read">
							<p><?php echo $top_copy['top13'][0];?></p>
						</div>
						<div class="sp_top13_read_nav">
							<?php if($sp_lang == "ni"){?>
							<a href="http://akanat.co.jp/atdepartment/" class="sp_top_btn_more" target="_blank" title="Akan Adventure Tourism"><span><?php echo $common_lang_text["VIEW MORE"];?></span></a>
							<?php }else{?>
							<a href="http://akanat.co.jp/atdepartment/en/" class="sp_top_btn_more" target="_blank" title="Akan Adventure Tourism"><span><?php echo $common_lang_text["VIEW MORE"];?></span></a>
							<?php }?>
						</div>
					</div>
					<div class="sp_top13_column"> <a href="<?php echo lang_link( '/' , $sp_lang ,$sp_lang);?>">
						<figure> <img src="/assets/sp/top/img/top13_img02.jpg" width="570" height="290" alt="<?php echo $top_copy['top13'][1];?>"> </figure>
						<div class="sp_top13_hgroup">
							<h2><?php echo $top_copy['top13'][1];?></h2>
							<p><?php echo home_url().lang_link( '/' , $sp_lang ,$sp_lang);?></p>
						</div>
						</a>
						<div class="sp_top13_read">
							<p><?php echo $top_copy['top13'][2];?></p>
						</div>
						<div class="sp_top13_read_nav"> <a href="<?php echo lang_link( '/' , $sp_lang ,$sp_lang);?>" class="sp_top_btn_more" target="_blank" title="<?php echo $top_copy['top13'][1];?>"> <span><?php echo $common_lang_text["VIEW MORE"];?></span> </a> </div>
					</div>
				</div>
				<!-- /.sp_top13_detail --> 
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top13 -->
		
		<section class="sp_top14" id="sns">
			<div class="section_detail">
				<div class="sp_top14_detail">
					<div class="sp_top14_read">
						<h2><?php echo $top_copy['top14'][0];?></h2>
						<p><?php echo $top_copy['top14'][1];?></p>
						<div class="sp_top14_read_nav">
							<ul>
								<li><a href="https://www.facebook.com/akan.adventure" target="_blank" class="sp_link_fb"><span>Facebook</span></a></li>
								<li><a href="https://www.instagram.com/kamuy_lumina/" target="_blank" class="sp_link_ig"><span>Instagram</span></a></li>
							</ul>
						</div>
					</div>
					<div class="sp_top14_figure">
						<ul class="sp_gallery">
						</ul>
					</div>
				</div>
				<!-- /.sp_top14_column --> 
			</div>
			<!-- /.section_detail --> 
		</section>
		<!-- /.sp_top14 --> 
		
	</article>
	<!-- /.sp_top_article --> 
</main>
<!-- /.sp_top -->
<div class="sp_pagenation">
	<ul class="spscroll">
		<li><a href="#mainimage" class="pagenation_link"><span>1</span></a></li>
		<li><a href="#apps" class="pagenation_link"><span>2</span></a></li>
		<li><a href="#nightwalk" class="pagenation_link"><span>3</span></a></li>
		<li><a href="#about" class="pagenation_link"><span>4</span></a></li>
		<li><a href="#zone" class="pagenation_link"><span>5</span></a></li>
		<li><a href="#keyitem" class="pagenation_link"><span>6</span></a></li>
		<li><a href="#arts" class="pagenation_link"><span>7</span></a></li>
		<li><a href="#enjoy" class="pagenation_link"><span>8</span></a></li>
		<li><a href="#review" class="pagenation_link"><span>9</span></a></li>
		<li><a href="#visual" class="pagenation_link"><span>10</span></a></li>
		<li><a href="#access" class="pagenation_link"><span>11</span></a></li>
		<li><a href="#gallery" class="pagenation_link"><span>12</span></a></li>
		<li><a href="#links" class="pagenation_link"><span>13</span></a></li>
		<li><a href="#sns" class="pagenation_link"><span>14</span></a></li>
		<li><a href="#footer" class="pagenation_link"><span>15</span></a></li>
	</ul>
</div>
<!-- ========== /.sp_top ========== -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/footer.php');?>
