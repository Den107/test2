let slider = tns({
  container: '.my-slider',
  items: 3,
  responsive: {
    318: {
      items: 1
    },
    612: {
      items: 2
    },
    1200: {
      items: 3
    }
  }
});


//burger
const burgerBtn = document.querySelector('.navbar-toggler');
const burgerClose = document.querySelector('.burger-close');
const navBurger = document.querySelector('.nav-burger');

burgerBtn.addEventListener('click', () => {
  navBurger.classList.add('burger-active');
});
burgerClose.addEventListener('click', () => {
  navBurger.classList.remove('burger-active');
});