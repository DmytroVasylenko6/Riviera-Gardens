const documentsList = document.querySelector('.documents-list');
const accordionButton = document.querySelector('.button-documents');


accordionButton.addEventListener('click', function () {
  this.classList.toggle("active");
  const open = this.children[0]
  const close = this.children[1]

  if (this.classList.contains("active")) {
    open.classList.add('is-hidden');
    close.classList.remove('is-hidden');
  } else {
    open.classList.remove('is-hidden');
    close.classList.add('is-hidden');
  }
  
  
   if (documentsList.style.maxHeight) {
    documentsList.style.maxHeight = null;
    } else {
    documentsList.style.maxHeight = documentsList.scrollHeight + "px";
    }
})