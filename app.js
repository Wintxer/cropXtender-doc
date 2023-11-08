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
        this.querySelector("#card-front").classList.add('hidden');
        this.querySelector("#card-back").classList.remove('hidden')
    })

    card.addEventListener("mouseout", function () {
        this.querySelector("#card-front").classList.remove('hidden');
        this.querySelector("#card-back").classList.add('hidden')
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