// // var el = document.querySelector('.hamburger-menu');

document.querySelector('.hamburger-menu').addEventListener('click', () => {
  document.querySelector('.containers').classList.toggle('change');
});
document.querySelector('.hamburger-menu').addEventListener('click', () => {
  document.querySelector('.sidebars').classList.toggle('change');
});
document.querySelector('.hamburger-menu').addEventListener('click', () => {
  document.querySelector('.logo-bmi').classList.toggle('changes');
});

// nav scroleed
// var myNav = document.querySelector('.top-nav');
// window.onscroll = function () {
//   'use strict';
//   if (document.body.scrollTop >= 200) {
//     myNav.classList.add('nav-colored');
//     myNav.classList.remove('nav-transparent');
//   } else {
//     myNav.classList.add('nav-transparent');
//     myNav.classList.remove('nav-colored');
//   }
// };

function videoPopUp() {
  var trailer = document.querySelector('.trailer');
  var video = document.querySelector('video');
  trailer.classList.toggle('active');
  video.pause();
  video.currentTime = 0;
}

function formPopUp() {
  document.querySelector('.cover-form').classList.toggle('actived');
}
