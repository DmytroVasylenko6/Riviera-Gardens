const menuHeader = document.querySelector('.site-header')
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
   if (window.screen.width <= 1024 ) {
    return
  }
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ) {
    menuHeader.classList.add('compact')
  } else {
    menuHeader.classList.remove('compact')
  }
}
