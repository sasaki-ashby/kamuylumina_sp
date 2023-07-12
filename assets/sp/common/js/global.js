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

/*ハンバーガーメニュー*/
var hamburger = document.querySelector('.hamburger');
var slideMenu = document.querySelector('.slide-menu');

hamburger.addEventListener('click', function () {
  this.classList.toggle('active');
  slideMenu.classList.toggle('active');

  // ハンバーガーメニューが展開されている場合はスクロールを無効化
  if (this.classList.contains('active')) {
    document.body.style.overflow = 'hidden';
  } else {
    document.body.style.overflow = 'auto';
  }
});

const review = document.querySelector('.review');
const access = document.querySelector('.access');
const gallery = document.querySelector('.gallery');

const closeSideMenu = function () {
  slideMenu.classList.toggle('active');

  // ハンバーガーメニューが展開されている場合はスクロールを無効化
  if (this.classList.contains('active')) {
    document.body.style.overflow = 'hidden';
  } else {
    document.body.style.overflow = 'auto';
  }
};
review.addEventListener('click', closeSideMenu);
access.addEventListener('click', closeSideMenu);
gallery.addEventListener('click', closeSideMenu);
