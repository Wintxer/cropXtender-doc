tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: "var(--primary-color)",
        primary_2: "var(--primary-2-color)",
        text: "var(--text-color)",
        bg: "var(--bg-color)",
        gray: "var(--gray-color)",
        gray_2: "var(--gray-2-color)",
        gray_3: "var(--gray-3-color)",
        bg_code: "var(--bg-code)",
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

menuTrigger.addEventListener("click", function () {
  menuTrigger.classList.toggle(activeClass);
  document.querySelector('.burger-menu').classList.toggle('open');
  document.querySelector('header').classList.toggle('open');
});

// Docs menu

const docArrow = document.querySelectorAll('.doc-arrow');

docArrow.forEach(arrow => {
  arrow.addEventListener('click', function () {
    arrow.parentElement.nextElementSibling.classList.toggle('hidden')
    console.log(arrow.children[0])
    arrow.children[0].classList.toggle('rotate-90')
  })
})

const links = document.querySelectorAll('.doc-link');

links.forEach(link => {
  link.addEventListener('click', function () {
    console.log(link.id)
    const linkId = link.id;
    const linkDoc = document.getElementById(linkId + '-text');
    const linkDocPos = linkDoc.getBoundingClientRect();
    // console.log(linkDocPos);
    document.querySelector('.doc-text').scrollTo({
      top: linkDocPos.top - 140,
      left: linkDocPos.left,
      behavior: "smooth"
    });
    // linkDoc.scrollIntoView();
    // arrow.children[0].classList.toggle('rotate-90')
  })
})


// Copy text
const copyBtn = document.querySelectorAll(".copy-btn")

copyBtn.forEach(btn => {
  if (btn) {
    btn.addEventListener('click', docopy);
  }
})

function docopy() {

  let target = this.dataset.target;
  let fromElement = document.querySelector(target);
  if (!fromElement) return;

  let range = document.createRange();
  let selection = window.getSelection();
  range.selectNode(fromElement);
  selection.removeAllRanges();
  selection.addRange(range);

  try {
    let result = document.execCommand('copy');
    if (result) {
      this.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>';
      setTimeout(() => {
        this.innerHTML = '<img src="img/ic-copy.svg" alt="">';
      }, 2000)
    }
  } catch (err) {
    alert(err);
  }

  selection = window.getSelection();
  if (typeof selection.removeRange === 'function') {
    selection.removeRange(range);
  } else if (typeof selection.removeAllRanges === 'function') {
    selection.removeAllRanges();
  }
}


const docListIcon = document.getElementById('doc-list-icon');
const docMenu = document.getElementById('doc-menu');

if (docListIcon) {
  docListIcon.addEventListener('click', function () {
    docMenu.classList.remove('max-md:translate-x-[-250px]')
  })
}

const closeDocMenu = () => {
  docMenu.classList.add('max-md:translate-x-[-250px]')
}