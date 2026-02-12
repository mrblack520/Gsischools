document.querySelectorAll('.home-dropdown-menu').forEach(dropdownMenu => {
  const selectBtn = dropdownMenu.querySelector('.dropdown-btn');
  const options = dropdownMenu.querySelectorAll('.option');
  const btnText = dropdownMenu.querySelector('.dropdown-btn-text');

  selectBtn.addEventListener('click', () => {
    document.querySelectorAll('.home-dropdown-menu').forEach(menu => {
      if (menu !== dropdownMenu) {
        menu.classList.remove('active');
      }
    });
    dropdownMenu.classList.toggle('active');
  });

  options.forEach(option => {
    option.addEventListener('click', () => {
      const selectedOption = option.querySelector('.option-text').innerText;
      btnText.innerText = selectedOption;
      dropdownMenu.classList.remove('active');
    });
  });

  document.addEventListener('click', (event) => {
    if (!dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.remove('active');
    }
  });
});

window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const scrollPosition = window.scrollY;
  const headerHeight = header.offsetHeight;

  if (scrollPosition > headerHeight) {
    header.classList.add('fixed');
  } else {
    header.classList.remove('fixed');
  }
});

// const disclaimerLink = document.getElementById('disclaimer-link');
// const disclaimerModal = document.getElementById('disclaimer-modal');
// const closeDisclaimer = document.getElementById('close-disclaimer');

// disclaimerLink.addEventListener('click', () => {
//   disclaimerModal.classList.add('active');
// });

// closeDisclaimer.addEventListener('click', () => {
//   disclaimerModal.classList.remove('active');
// });

// disclaimerModal.addEventListener('click', (event) => {
//   if (event.target === disclaimerModal) {
//     disclaimerModal.classList.remove('active');
//   }
// });

const filters = document.querySelectorAll(".filter-con");
const sections = document.querySelectorAll(".filter-toggle-sec > .container");

function showSection(index) {
  sections.forEach((section, i) => {
    if (i === index) {
      section.style.display = "block";
      setTimeout(() => {
        section.classList.add("active");
      }, 50);
    } else {
      section.classList.remove("active");
      setTimeout(() => {
        section.style.display = "none";
      }, 300);
    }
  });

  filters.forEach((filter, i) => {
    filter.classList.toggle("active", i === index);
  });
}

filters.forEach((filter, i) => {
  filter.addEventListener("click", () => showSection(i));
});

showSection(0);


document.querySelector('body').addEventListener('click', () => {
  window.dispatchEvent(new Event('outsideMenuClose'));
})

