const documentsEl = document.querySelector('.js_documents_gallery');

if (documentsEl) {
const photos = document.querySelectorAll('.js_documents_gallery .document-item');
const buttonEl = document.querySelector('[data-action="close-lightbox2"]');
const overlayEl = document.querySelector('.lightbox2__overlay');
const lightboxEl = document.querySelector(".lightbox2");
const sliderControllLeft = document.querySelector('.slider__control_left');
const sliderControllRight = document.querySelector('.slider__control_right');
// const body = document.querySelector('body');

let index = 0;

documentsEl.addEventListener("click", onImageClick);
buttonEl.addEventListener("click", onButtonCloseModalClick);


function onImageClick(event) {
//  console.log(event.target.nodeName)
  if (event.target.nodeName !== "IMG") {
    return;
    }
  
    const currentImage = event.target.parentElement.parentElement.children[0]
    // console.log(currentImage)
    document.querySelector('.lightbox2__content').innerHTML = currentImage.innerHTML


  openModal();
    index = +event.target.parentElement.parentElement.dataset.index;
}

//Открытие модального окна по клику на элементе галереи.
function openModal() {
  window.addEventListener("keydown", onKeyDown);
  overlayEl.addEventListener("click", onOverlayClick);
  sliderControllLeft.addEventListener('click', prev);
  sliderControllRight.addEventListener('click', next);
  lightboxEl.classList.add("is-open");
//   body.classList.add('scroll-hidden');

}


//Закрытие модального окна по клику на кнопку button[data-action="close-lightbox2"]
function closeModal() {
  window.removeEventListener("keydown", onKeyDown);
  overlayEl.removeEventListener("click", onOverlayClick);
  sliderControllLeft.removeEventListener('click', prev);
  sliderControllRight.removeEventListener('click', next);
  lightboxEl.classList.remove("is-open");
//   body.classList.remove('scroll-hidden');
}

function onButtonCloseModalClick(event) {
  if (event.target.nodeName !== "BUTTON") {
    return;
  }
  closeModal();
}

function onOverlayClick(event) {
  if (event.currentTarget === event.target) {
    closeModal();
  }
}

function onKeyDown(event) {
  if (event.code === "Escape") {
    closeModal();
  }
  if (event.code === 'ArrowRight') next();
  if (event.code === 'ArrowLeft') prev();
}

function next() {
  
  const nextIndex = ++index;
//   console.log(nextIndex)
  if (photos[nextIndex]) {
   document.querySelector('.lightbox2__content').innerHTML = photos[nextIndex].children[0].innerHTML
  }
  else {
    index = 0, document.querySelector('.lightbox2__content').innerHTML = photos[index].children[0].innerHTML
  }
}

function prev() {
  
  const prevIndex = --index;
    console.log(prevIndex)
  if (photos[prevIndex]) {
  document.querySelector('.lightbox2__content').innerHTML = photos[prevIndex].children[0].innerHTML
  } else {
    index = photos.length - 1,  document.querySelector('.lightbox2__content').innerHTML = photos[index].children[0].innerHTML
  }
}
}