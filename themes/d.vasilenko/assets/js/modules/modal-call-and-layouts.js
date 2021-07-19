    
    const openCallButton = document.querySelectorAll('[data-open-form]');
    const formCall = document.querySelector('[data-form-call]');
    const formLayouts = document.querySelector('[data-form-layouts]');
    const buttonEl = document.querySelectorAll('[data-action="close-lightbox"]');
    const overlayEl = document.querySelector(".lightbox__overlay");
    const lightboxEl = document.querySelector(".lightbox");
    // const body = document.querySelector('body');
 
    Array.from(openCallButton).map((button) => {
        button.addEventListener("click", onButtonClick);
    })

   function onButtonClick(event) {

       openModal(event);
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

 
    function openModal(event) {
        window.addEventListener("keydown", onKeyDown);
        overlayEl.addEventListener("click", onOverlayClick);
        Array.from(buttonEl).map((button) => {
        button.addEventListener("click", onButtonCloseModalClick);
        })
        lightboxEl.classList.add("is-open");
        // body.classList.add('scroll-hidden');

        if (event.target.classList.contains('js-layouts')) {
           formLayouts.classList.add('is-visibility')
       } else {
           formCall.classList.add('is-visibility')
       }

    }


    function closeModal() {
        window.removeEventListener("keydown", onKeyDown);
        overlayEl.removeEventListener("click", onOverlayClick);
        Array.from(buttonEl).map((button) => {
        button.removeEventListener("click", onButtonCloseModalClick);
    })
        lightboxEl.classList.remove("is-open");
        // body.classList.remove('scroll-hidden');
        formLayouts.classList.remove('is-visibility')
        formCall.classList.remove('is-visibility')
       
    }


    function onKeyDown(event) {
        // event.preventDefault();
        if (event.code === "Escape") {
            closeModal();
        }
    }

   
