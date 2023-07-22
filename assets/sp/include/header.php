<?php require_once($_SERVER['DOCUMENT_ROOT']."/klwp/wp-content/themes/staffTemplate/inc/lang_$sp_lang"."_common.php");?>
<!DOCTYPE html>
<?php if($sp_lang == "ni"){?>
<html lang="ja">
<?php }elseif($sp_lang == "tc"){?>
<html lang="zh-cmn-Hant">
<?php }else{?>
<html lang="en">
<?php }?>
<head>
<meta charset="UTF-8" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon_sp.ico" />
<link rel="icon" type="image/x-icon" href="/favicon_sp.ico" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://www.kamuylumina.jp/assets/sp/common/img/ogp.png" />
<meta name="twitter:image:src" content="https://www.kamuylumina.jp/assets/sp/common/img/ogp.png">
<meta name="twitter:card" content="summary_large_image">
<?php if($sp_lang == "ni"){?>
<?php $title = tdk_title();?>
<meta property="og:locale" content="ja_JP" />
<meta property="og:site_name" content="<?php echo $common_lang_text["カムイルミナ スペシャルサイト"];?>" />
<link rel="canonical" href="https://www.kamuylumina.jp/sp/" />
<meta property="og:url" content="https://www.kamuylumina.jp/sp/" />
<meta name="twitter:description" content="">
<meta property="og:description" content="" />
<meta name="description" content="" />
<meta property="og:title" content="<?php echo $title;?>" />
<meta name="twitter:title" content="<?php echo $title;?>">
<title><?php echo $title;?></title>
<?php }elseif($sp_lang == "tc"){?>
<?php $title = tdk_title();?>
<meta property="og:locale" content="zh_TW" />
<meta property="og:site_name" content="<?php echo $common_lang_text["カムイルミナ スペシャルサイト"];?>" />
<link rel="canonical" href="https://www.kamuylumina.jp/tc/sp/" />
<meta property="og:url" content="https://www.kamuylumina.jp/tc/sp/" />
<meta name="twitter:description" content="">
<meta property="og:description" content="" />
<meta name="description" content="" />
<meta property="og:title" content="<?php echo $title;?>" />
<meta name="twitter:title" content="<?php echo $title;?>">
<title><?php echo $title;?></title>
<?php }else{?>
<?php $title = tdk_title();?>
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="<?php echo $common_lang_text["カムイルミナ スペシャルサイト"];?>" />
<link rel="canonical" href="https://www.kamuylumina.jp/en/sp/" />
<meta property="og:url" content="https://www.kamuylumina.jp/en/sp/" />
<meta name="twitter:description" content="">
<meta property="og:description" content="" />
<meta name="description" content="" />
<meta property="og:title" content="<?php echo $title;?>" />
<meta name="twitter:title" content="<?php echo $title;?>">
<title><?php echo $title;?></title>
<?php }?>
<link rel="stylesheet" href="/assets/sp/common/css/reset.css" />
<link rel="stylesheet" href="/assets/sp/common/css/style.css" />
<link rel="stylesheet" href="/assets/sp/common/css/footer.css" />
<?php if( !is_page_template( 'page-sp_index.php' )){?>
<link rel="stylesheet" href="/assets/sp/common/css/header.css" />
<?php }?>
<!-- googlewebfont読み込み ここから-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnlect" href="https://fonts.gstatic.com" crossorigin>
<!-- 日本語フォント読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
<!-- 英字 繁体字 簡体字 ハングル読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<!-- googlewebfont読み込み ここまで-->
<?php wp_head(); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/head_tag.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/include/body_tag.php'); ?>
<header id="header">
	<?php if( is_page_template( 'page-sp_index.php' ) ){ echo '<h1>';}?>
	<a href="<?php echo lang_link( '/sp/' ,$sp_lang ,$sp_lang);?>" class="header-title">KAMUY&nbsp;LUMINA&nbsp;SPECIAL&nbsp;SITE</a>
	<?php if( is_page_template( 'page-sp_index.php' ) ){ echo '</h1>';}?>
	<?php if( is_page_template( 'page-sp_index.php' ) ){?>
	<div class="header-pc">
		<ul class="detail-container" id="g-navi">
			<li class="detail" data-detail="REVIEW"><a href="#review"><?php echo $common_lang_text["REVIEW"];?></a></li>
			<li class="detail" data-detail="ACCESS"><a href="#access"><?php echo $common_lang_text["ACCESS"];?></a></li>
			<li class="detail" data-detail="GALLERY"><a href="#gallery"><?php echo $common_lang_text["GALLERY"];?></a></li>
		</ul>
	</div>
	<?php }?>
	<div class="right-side-btn">
		<ul class="lang-btns-container">
			<li><a href="<?php echo lang_link( '/sp/' , "ni" ,$sp_lang);?>" class="lang-btn1 <?php if($sp_lang=='ni'){echo 'selected';}?>" data-btn="langBtn1">日本語</a></li>
			<li><a href="<?php echo lang_link( '/sp/' , "en" ,$sp_lang);?>" class="lang-btn2 <?php if($sp_lang=='en'){echo 'selected';}?>" data-btn="langBtn2">ENGLISH</a></li>
			<li><a href="<?php echo lang_link( '/sp/' , "tc" ,$sp_lang);?>" class="lang-btn3 <?php if($sp_lang=='tc'){echo 'selected';}?>" data-btn="langBtn3">繁体字</a></li>
		</ul>
		<a href="<?php echo lang_link( '/' , "ni" ,$sp_lang);?>" target="_blank">
		<div class="official-btn"><?php echo $common_lang_text["オフィシャルサイト"];?><img loading="lazy" src="/assets/sp/common/img/icons/arrow_right_wihte.png" class="arrow-image" /></div>
		</a>
		<a href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank">
		<div class="ticket-btn"><?php echo $common_lang_text["チケット購入はコチラ"];?><img  loading="lazy" src="/assets/sp/common/img/icons/arrow_right.png" alt="arrow right" class="arrow-image" /></div>
		</a>
	</div>
	<div class="hamburger"> 
		<!-- ハンバーガーメニューの線 --> 
		<span></span><span></span><span></span> 
		<!-- /ハンバーガーメニューの線 --> 
	</div>
</header>
<div class="slide-menu">
	<?php if ( is_page_template( 'page-sp_index.php' ) ) {?>
	<ul class="detail-container" id="g-navi">
		<li class="detail" data-detail="REVIEW"><a class="review" href="#review"><?php echo $common_lang_text["REVIEW"];?></a></li>
		<li class="detail" data-detail="ACCESS"><a class="access" href="#access"><?php echo $common_lang_text["ACCESS"];?></a></li>
		<li class="detail" data-detail="GALLERY"><a class="gallery" href="#gallery"><?php echo $common_lang_text["GALLERY"];?></a></li>
	</ul>
	<?php }?>
	<div class="lang-btns-container">
		<ul class="lang-btns-container">
			<li><a href="<?php echo lang_link( '/sp/' , "ni" ,$sp_lang);?>" class="lang-btn1 <?php if($sp_lang=='ni'){echo 'selected';}?>" data-btn="langBtn1">日本語</a></li>
			<li><a href="<?php echo lang_link( '/sp/' , "en" ,$sp_lang);?>" class="lang-btn2 <?php if($sp_lang=='en'){echo 'selected';}?>" data-btn="langBtn2">ENGLISH</a></li>
			<li><a href="<?php echo lang_link( '/sp/' , "tc" ,$sp_lang);?>" class="lang-btn3 <?php if($sp_lang=='tc'){echo 'selected';}?>" data-btn="langBtn3">繁体字</a></li>
		</ul>
	</div>
	<a href="/" target="_blank">
	<div class="official-btn"> <?php echo $common_lang_text["オフィシャルサイト"];?> <img src="/assets/sp/common/img/icons/arrow_right_wihte.png" alt="arrow right white" class="" /> </div>
	</a> <a href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank">
	<div class="ticket-btn"> <?php echo $common_lang_text["チケット購入はコチラ"];?><img src="/assets/sp/common/img/icons/arrow_right.png" alt="" class="" /> </div>
	</a> </div>
