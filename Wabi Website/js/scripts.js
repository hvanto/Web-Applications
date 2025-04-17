// Dimmed Background Overlay

const flipButtons = document.querySelectorAll('.card button');
const overlays = document.querySelectorAll('.overlay');

flipButtons.forEach((btn, index) => {
  btn.addEventListener('click', function() {
    const card = btn.closest('.card');
    const overlay = overlays[index];
    card.classList.toggle('flipped');
    overlay.classList.toggle('show');
  });
});

overlays.forEach((overlay, index) => {
  overlay.addEventListener('click', function() {
    const card = overlay.previousElementSibling;
    card.classList.remove('flipped');
    overlay.classList.remove('show');
  });
});



// Transition effect
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
      console.log(entry)
      if (entry.isIntersecting) {
          entry.target.classList.add('visible');
      } else {
          entry.target.classList.remove('visible');
      }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));



// ANIMATIONS HOMEPAGE

const element = document.querySelector('.animate-on-scroll');
const windowHeight = window.innerHeight;


function handleScroll() {
  const distanceFromTop = element.getBoundingClientRect().top;

  if (distanceFromTop - windowHeight <= 0) {
    element.classList.add('animate');
    window.removeEventListener('scroll', handleScroll);
  }
}

window.addEventListener('scroll', handleScroll);


// ANIMATIONS IMAGES

const images = document.querySelectorAll('.image');

function checkImagePosition() {
  images.forEach((image) => {
    const imagePosition = image.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    if (imagePosition - 50 <= windowHeight) {
      image.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', checkImagePosition);



// Button Scroll
function scrollToTables() {
  var tablesDiv = document.getElementById("tables");
  tablesDiv.scrollIntoView({ behavior: 'smooth' });
}



