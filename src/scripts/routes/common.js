export default {
    init() {
      // JavaScript to be fired on all pages
  
      this.toggleMobileMenu()
    },
  
    toggleMobileMenu() {
      const iconMobileBurguer = document.querySelector('#menu-toggle')
      const menuMobile = document.getElementById('menu-mobile')
      
      iconMobileBurguer.addEventListener('click', function() {
        menuMobile.classList.toggle('active');
        this.classList.toggle('active');
      })
    },
  
    finalize() {
      // JavaScript to be fired on all pages, after page specific JS is fired
    },
  };