<?php require_once($_SERVER['DOCUMENT_ROOT']."/klwp/wp-content/themes/staffTemplate/inc/lang_$sp_lang"."_common.php");?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>article</title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/sp/include/head_link.php'); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="/assets/sp/article/css/style.css" />
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/head_tag.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/body_tag.php'); ?>
<header class="fixed-header">
	<div class="header-container">
		<a href="<?php echo lang_link( '/sp/' ,$sp_lang ,$sp_lang);?>" class="header-title">KAMUY&nbsp;LUMINA&nbsp;SPECIAL&nbsp;SITE</a>
		<div class="right-side-btn">
			<div class="lang-btns-container">
				<a href="<?php echo lang_link( '/sp/' , "ni" ,$sp_lang);?>" class="lang-btn1" data-btn="langBtn1">日本語</a>
				<a href="<?php echo lang_link( '/sp/' , "en" ,$sp_lang);?>" class="lang-btn2" data-btn="langBtn2">ENGLISH</a>
				<a href="<?php echo lang_link( '/sp/' , "tc" ,$sp_lang);?>" class="lang-btn3" data-btn="langBtn3">繁体字</a>
			</div>
			<a href="<?php echo lang_link( '/' , "ni" ,$sp_lang);?>" target="_blank">
				<div class="official-btn"><?php echo $common_lang_text["オフィシャルサイト"];?>
					<img src="/assets/sp/common/img/icons/arrow_right_wihte.png" alt="arrow right white" class="arrow-image" />
				</div>
			</a>
			<a href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank">
				<div class="ticket-btn"><?php echo $common_lang_text["チケット購入はコチラ"];?>
					<img src="/assets/sp/common/img/icons/arrow_right.png" alt="arrow right" class="arrow-image" />
				</div>
			</a>
		</div>
		<div class="hamburger"> 
			<!-- ハンバーガーメニューの線 --> 
			<span></span> <span></span> <span></span> 
			<!-- /ハンバーガーメニューの線 --> 
		</div>
	</div>
	<div class="slide-menu">
		<div class="lang-btns-container">
			<a href="<?php echo lang_link( '/sp/' , "ni" ,$sp_lang);?>" class="lang-btn1" data-btn="langBtn1">日本語</a>
			<a href="<?php echo lang_link( '/sp/' , "en" ,$sp_lang);?>" class="lang-btn2" data-btn="langBtn2">ENGLISH</a>
			<a href="<?php echo lang_link( '/sp/' , "tc" ,$sp_lang);?>" class="lang-btn3" data-btn="langBtn3">繁体字</a>
		</div>
		<a href="/" target="_blank">
			<div class="official-btn"><?php echo $common_lang_text["オフィシャルサイト"];?>
			<img src="/assets/sp/common/img/icons/arrow_right_wihte.png" alt="arrow right white" class="arrow-image" />
			</div>
		</a>
		<a href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank">
			<div class="ticket-btn">
			<?php echo $common_lang_text["チケット購入はコチラ"];?>
			<img src="/assets/sp/common/img/icons/arrow_right.png" alt="arrow right" class="arrow-image" />
			</div>
		</a>
	</div>
</header>
