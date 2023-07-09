<footer class="footer-container"> <img class="title-image" src="/assets/sp/common/img/icons/site_name.png" alt="Site Name" />
	<p class="footer_text">KAMUY LUMINA SPECIAL SITE</p>
	<div class="btn-container"> <a href="/">
		<div class="official-btn"><?php echo $common_lang_text["オフィシャルサイト"];?><img class="arrow-image" src="/assets/sp/common/img/icons/arrow_right_wihte.png" alt="Arrow Right White" /> </div>
		</a> <a href="#">
		<div class="ticket-btn"><?php echo $common_lang_text["チケット購入はコチラ"];?><img class="arrow-image" src="/assets/sp/common/img/icons/arrow_right.png" alt="Arrow Right" /> </div>
		</a> </div>
	<p class="under-text">COPYRIGHT COPYRIGHT COPYRIGHT COPYRIGHT</p>
	<div class="page-top-btn scroll-to-top-button" onclick="scrollToTop()"><img class="arrow-top-icon" src="/assets/sp/common/img/icons/arrow_top.png" alt="Arrow Top" />PAGE<br/>TOP</div>
</footer>
<script src="/assets/sp/common/js/hamburger_header.js"></script> 
<!-- <script src="/assets/sp/article/js/spot_more.js"></script> --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
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
</body></html>