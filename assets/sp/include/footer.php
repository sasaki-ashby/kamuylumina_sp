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
<script>
const scrollToTop = () => {
	window.scrollTo({
		top: 0,
		behavior: "smooth",
	});
};
	
window.addEventListener("scroll", function () {
	var header = document.querySelector("header");
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	if (scrollTop > 0) {
		header.classList.add("fixed-header");
	} else {
		header.classList.remove("fixed-header");
	}
});
</script>

<script>	
document.querySelector(".hover-area").addEventListener("mouseover", function (event) {
	event.stopPropagation();
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
	const details = document.querySelectorAll(".detail");
	details[0].classList.add("selected");
	details.forEach((detail) => {
	detail.addEventListener("click", function () {
		details.forEach((d) => d.classList.remove("selected"));
			this.classList.add("selected");
		});
	});
});
</script> 
<script>
document.addEventListener("DOMContentLoaded", function () {
	const langButtons = document.querySelectorAll(
	".lang-btns-container button"
	);
	langButtons[0].classList.add("selected");
	langButtons.forEach((button) => {
		button.addEventListener("click", function () {
			langButtons.forEach((btn) => btn.classList.remove("selected"));
			this.classList.add("selected");
		});
	});
});
</script>
<script src="/assets/sp/common/js/hamburger_header.js"></script>
</body></html>