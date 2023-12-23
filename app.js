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

// Index page > Cards
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

// Docs Page

// Add id to links
const docLinks = document.querySelectorAll('.doc-link');
const docSublinks = document.querySelectorAll('.doc-sublink');

let docLinksId = 1;

docLinks.forEach(link => {
  let docSubinksId = 1;

  link.setAttribute('id', 'link-' + docLinksId);
  if (link.hasAttribute('sublinks')) {
    const sublinks = link.parentElement.nextElementSibling.querySelectorAll('.doc-sublink');
    sublinks.forEach(sublink => {
      sublink.setAttribute('id', 'link-' + docLinksId + '-' + docSubinksId);
      docSubinksId++;
    })
  }
  docLinksId++;
})

// Add id to titles
const docTitles = document.querySelectorAll('.doc-text-title');

let docTitlesId = 1;
let docSubitlesId = 1;
docTitles.forEach(title => {
  if (!title.hasAttribute('subtitles')) {
    title.setAttribute('id', 'link-' + docTitlesId + '-text');
    docSubitlesId = 1;
    docTitlesId++;
  } else {
    const titleId = title.parentElement.firstElementChild.id.split('-');
    title.setAttribute('id', 'link-' + titleId[1] + '-' + docSubitlesId + '-text');
    docSubitlesId++;
  }
})

// Doc arrow
const docArrow = document.querySelectorAll('.doc-arrow');

docArrow.forEach(arrow => {
  arrow.addEventListener('click', function () {
    arrow.parentElement.nextElementSibling.classList.toggle('hidden');
    arrow.children[0].classList.toggle('rotate-90');
  })
})

// Doc text scroll

let DocMarginTop;

if (window.innerWidth < 640) {
  DocMarginTop = 140;
} else if (window.innerWidth < 768) {
  DocMarginTop = 150
} else {
  DocMarginTop = 100;
}

window.addEventListener("resize", () => {
  if (window.innerWidth < 640) {
    DocMarginTop = 140;
  } else if (window.innerWidth < 768) {
    DocMarginTop = 150
  } else {
    DocMarginTop = 100;
  }
});

const docTextScroll = (link) => {
  link.addEventListener('click', function () {
    const linkId = link.id;
    const linkDoc = document.getElementById(linkId + '-text');
    if (linkDoc) {
      const linkDocPos = linkDoc.offsetTop;

      document.querySelector('.doc-text').scrollTo({
        top: linkDocPos - DocMarginTop,
        left: linkDocPos.left,
        behavior: "smooth"
      });
    }
  })
}
console.log(DocMarginTop);

docLinks.forEach(link => {

  docTextScroll(link);

  if (link.hasAttribute('sublinks')) {
    link.addEventListener('click', function () {
      link.previousElementSibling.children[0].classList.add('rotate-90');
      link.parentElement.nextElementSibling.classList.remove('hidden');
    })
  }
})

docSublinks.forEach(sublink => {
  docTextScroll(sublink);
})

// Copy text
const copyBtn = document.querySelectorAll(".copy-btn")

copyBtn.forEach(btn => {
  if (btn) {
    btn.addEventListener('click', docopy);
  }
})

function docopy() {

  const target = this.previousElementSibling;
  if (!target) return;

  const range = document.createRange();
  let selection = window.getSelection();
  range.selectNode(target);
  selection.removeAllRanges();
  selection.addRange(range);

  try {
    const result = document.execCommand('copy');
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

// Doc menu
const docListIcon = document.getElementById('doc-list-icon');
const docMenu = document.getElementById('doc-menu');

if (docListIcon) {
  docListIcon.addEventListener('click', function () {
    docMenu.classList.remove('max-md:translate-x-[-250px]');
  })
}

const closeDocMenu = () => {
  docMenu.classList.add('max-md:translate-x-[-250px]');
}