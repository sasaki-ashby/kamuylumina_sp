var scrollContainer = document.querySelector(".scroll-container");

scrollContainer.addEventListener("scroll", function () {
  var header = document.querySelector(".header-container");
  var scrollPosition = scrollContainer.scrollTop;

  if (scrollPosition > 100) {
    // スクロール位置が100pxを超えた場合
    header.classList.add("scrolled");
  } else {
    // スクロール位置が100px以下の場合
    header.classList.remove("scrolled");
  }
});
