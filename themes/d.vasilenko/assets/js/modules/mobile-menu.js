(() => {
  const menuBtnRef = document.querySelector('[data-menu-button]');
  const mobileMenuRef = document.querySelector('[data-menu-inner]');
  const mobileBackdropRef = document.querySelector('[data-backdrop]');
  const body = document.querySelector('body');

  const toggleMenu = () => {
    const expanded = menuBtnRef.getAttribute('aria-expanded') === 'true' || false;
    menuBtnRef.classList.toggle('is-open');
    body.classList.toggle('scroll-hidden');
    menuBtnRef.setAttribute('aria-expanded', !expanded);
    mobileBackdropRef.classList.toggle('is-visible');
  
  };

  menuBtnRef.addEventListener('click', () => {
    if (window.innerWidth <= 1024) {
        toggleMenu();
  }
  });

  mobileMenuRef.addEventListener('click', (e) => {
       if (window.innerWidth < 1024) {
        toggleMenu();
  }
  })
})();