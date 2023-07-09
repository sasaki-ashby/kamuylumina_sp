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
