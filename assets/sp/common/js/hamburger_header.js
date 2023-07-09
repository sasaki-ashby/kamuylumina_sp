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

// document.querySelectorAll('.sp-link').forEach((link) => {
//   link.addEventListener('click', function () {
//     e.preventDefault();
//     slideMenu.classList.toggle('active');

//     // ハンバーガーメニューが展開されている場合はスクロールを無効化
//     if (this.classList.contains('active')) {
//       document.body.style.overflow = 'hidden';
//     } else {
//       document.body.style.overflow = 'auto';
//     }

//     const targetId = this.getAttribute('href');
//     const targetElement = document.querySelector(targetId);

//     window.scrollTo({
//       top: targetElement.offsetTop,
//       behavior: 'smooth',
//     });
//   });
// });

// document.querySelectorAll('.pc-link').forEach((link) => {
//   link.addEventListener('click', function (e) {
//     e.preventDefault();
//     const targetId = this.getAttribute('href');
//     console.log(targetId);
//     const targetElement = document.querySelector(`#${targetId}`);
//     console.log(targetElement);

//     window.scrollTo({
//       top: targetElement.offsetTop,
//       behavior: 'smooth',
//     });
//   });
// });
