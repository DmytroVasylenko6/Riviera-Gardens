import './modules/slik-slider';
import './modules/svgxuse';
import './modules/header-compact';
import './modules/mobile-menu';
import './modules/modal-call-and-layouts';
import './modules/accordion';
import './modules/inputMask';
import './modules/hero-section-swiper';
import './modules/documents-gallery';
import './modules/tabs';
import './modules/parallaxScroll';
import './modules/map';

//open Call
const openCall = document.querySelector('[data-open-call]');
const containerCall = document.querySelector('.call-fixed');
const textContainer = document.querySelector('[data-text-call]');

openCall.onmouseover = openCall.onmouseout = handler;
containerCall.onmouseover = containerCall.onmouseout = handler;

function handler(event) {

  if (event.type == 'mouseover') {
    containerCall.classList.add('is-active');
    textContainer.classList.add('is-active');
    openCall.classList.add('is-active');
  }
  if (event.type == 'mouseout') {
    containerCall.classList.remove('is-active');
    textContainer.classList.remove('is-active');
    openCall.classList.remove('is-active');
  }
}

//click nav-item location
const locationButton = document.querySelector('.menu-item a[href="#tab-location"]')
const tabLocation = document.querySelector('a[href="#tab-3"]')
  locationButton.addEventListener('click', (e) => {
   tabLocation.click()
  })










