tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary_blue: "#72ACC5",
        primary_grey: "#4E5558",
        primary_black: "222222",
      },
      screens: {},
    },
  },
};

// Cards
const cards = document.querySelectorAll(".card");

cards.forEach(card => {
    card.addEventListener("mouseover", function () {
        this.querySelector("#card-front").classList.add('opacity');
        this.querySelector("#card-back").classList.remove('opacity')
    })

    card.addEventListener("mouseout", function () {
        this.querySelector("#card-front").classList.remove('opacity');
        this.querySelector("#card-back").classList.add('opacity')
    })
});

// Header

const header = document.querySelector('header');
window.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });


  const menuTrigger = document.querySelector('[data-ic-class="button-trigger"]');
    const menuOverlay = document.querySelector('[data-ic-class="overlay"]');
    const menuItem = document.querySelector('.menu-item');
    const activeClass = 'active';

menuTrigger.addEventListener("click", function(){
  menuTrigger.classList.toggle(activeClass);
  document.querySelector('.burger-menu').classList.toggle('open');
  document.querySelector('header').classList.toggle('open');
});