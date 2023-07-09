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
		<p class="header-title" onclick="window.location.href = 'index.html';"> KAMUY&nbsp;LUMINA&nbsp;SPECIAL&nbsp;SITE </p>
		<div class="right-side-btn">
			<div class="lang-btns-container">
				<button
              class="lang-btn1"
              data-btn="langBtn1"
              onclick="selectButton(this)"
            > 日本語 </button>
				<button
              class="lang-btn2"
              data-btn="langBtn2"
              onclick="selectButton(this)"
            > ENGLISH </button>
				<button
              class="lang-btn3"
              data-btn="langBtn3"
              onclick="selectButton(this)"
            > 繁体字 </button>
			</div>
			<a href="#">
			<div class="official-btn"> オフィシャルサイト <img
                src="/assets/sp/common/img/icons/arrow_right_wihte.png"
                alt="arrow right white"
                class="arrow-image"
              /> </div>
			</a> <a href="#">
			<div class="ticket-btn"> チケット購入はコチラ <img
                src="/assets/sp/common/img/icons/arrow_right.png"
                alt="arrow right"
                class="arrow-image"
              /> </div>
			</a> </div>
		<div class="hamburger"> 
			<!-- ハンバーガーメニューの線 --> 
			<span></span> <span></span> <span></span> 
			<!-- /ハンバーガーメニューの線 --> 
		</div>
	</div>
	<div class="slide-menu">
		<div class="lang-btns-container">
			<button class="lang-btn1" data-btn="langBtn1">日本語</button>
			<button class="lang-btn2" data-btn="langBtn2">ENGLISH</button>
			<button class="lang-btn3" data-btn="langBtn3">繁体字</button>
		</div>
		<a href="/">
		<div class="official-btn"> オフィシャルサイト <img
              src="/assets/sp/common/img/icons/arrow_right_wihte.png"
              alt="arrow right white"
              class="arrow-image"
            /> </div>
		</a> <a href="#">
		<div class="ticket-btn"> チケット購入はコチラ <img
              src="/assets/sp/common/img/icons/arrow_right.png"
              alt="arrow right"
              class="arrow-image"
            /> </div>
		</a> </div>
</header>
