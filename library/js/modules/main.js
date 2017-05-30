// import {test} from './mod1-sample';
const $ = require('jquery');

$(document).ready(() => {
  // test();
  $('.mobile-hamburger-menu').click(() => {
    $('.access, .mobile-hamburger-menu').toggleClass('active');
  });

  const lmc = document.getElementById('lead-module-container');
  let carouselTimer;
  let carouselIndex = 0;
  const carouselItems = [...document.getElementsByClassName('lead-nav-item')].map((item) => item.dataset.name);

  function hoverOnLeadImage(name) {
    clearTimeout(carouselTimer);
    lmc.dataset.id = name;
  };

  function hoverOffLeadImage(name) {
    lmc.dataset.id = '';
    carousel();
  };

  function carousel() {
    lmc.dataset.id = carouselItems[carouselIndex];
    carouselIndex = (carouselIndex === 5) ? 0 : carouselIndex+1;
    carouselTimer = setTimeout(carousel, 4000);
  };

  $('.lead-nav-item').hover(
    (i) => hoverOnLeadImage(i.target.dataset.name),
    (i) => hoverOffLeadImage(i.target.dataset.name)
  );
  carousel();
});

