var hamburgerButton = document.getElementById("on");
var isScrollDisabled = false;
var scrollPosition = 0;

function disableScroll() {
  // スクロール位置を保存
  scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  // スクロールを禁止
  document.body.style.overflow = "hidden";
  document.body.style.position = "fixed";
  document.body.style.top = `-${scrollPosition}px`;
  isScrollDisabled = true;
}

function enableScroll() {
  // スクロールを有効にする
  document.body.style.overflow = "";
  document.body.style.position = "";
  document.body.style.top = "";
  window.scrollTo(0, scrollPosition); // 元のスクロール位置に戻す
  isScrollDisabled = false;
}

hamburgerButton.addEventListener("click", function () {
  if (isScrollDisabled) {
    enableScroll();
  } else {
    disableScroll();
  }
});
