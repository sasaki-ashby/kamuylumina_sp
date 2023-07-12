<footer class="footer-container">
	<img class="title-image" src="/assets/sp/common/img/logo.svg" alt="" />
	<p class="footer_text">KAMUY LUMINA SPECIAL SITE</p>
	<div class="btn-container">
		<a href="<?php echo lang_link( '/' , "ni" ,$sp_lang);?>" target="_blank">
		<div class="official-btn"><?php echo $common_lang_text["オフィシャルサイト"];?><img class="arrow-image" src="/assets/sp/common/img/icons/arrow_right_wihte.png" alt="" /> </div>
		</a>
		<a href="https://webket.jp/pc/ticket/index?fc=52386&ac=9000" target="_blank">
		<div class="ticket-btn"><?php echo $common_lang_text["チケット購入はコチラ"];?><img class="arrow-image" src="/assets/sp/common/img/icons/arrow_right.png" alt="" /> </div>
		</a>
	</div>
	<p class="under-text">&copy;KAMUY&nbsp;LUMINA</p>
	<div class="page-top-btn scroll-to-top-button" onclick="scrollToTop()"><img class="arrow-top-icon" src="/assets/sp/common/img/icons/arrow_top.png" alt="" />PAGE<br/>TOP</div>
</footer>
<?php wp_footer(); ?>