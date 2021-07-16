    
    const openCallButton = document.querySelectorAll('[data-open-form]');
    const buttonEl = document.querySelector('[data-action="close-lightbox"]');
    const overlayEl = document.querySelector(".lightbox__overlay");
    const lightboxEl = document.querySelector(".lightbox");
    const body = document.querySelector('body');
 
    Array.from(openCallButton).map((button) => {
        button.addEventListener("click", onButtonClick);
    })
    buttonEl.addEventListener("click", onButtonCloseModalClick);

   function onButtonClick(event) {

        openModal();
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

 
    function openModal() {
        window.addEventListener("keydown", onKeyDown);
        overlayEl.addEventListener("click", onOverlayClick);
        lightboxEl.classList.add("is-open");
        body.classList.add('scroll-hidden');

    }


    function closeModal() {
        window.removeEventListener("keydown", onKeyDown);
        overlayEl.removeEventListener("click", onOverlayClick);
        lightboxEl.classList.remove("is-open");
        body.classList.remove('scroll-hidden');
    }


    function onKeyDown(event) {
        // event.preventDefault();
        if (event.code === "Escape") {
            closeModal();
        }
    }

   
