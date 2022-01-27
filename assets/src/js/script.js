const items = document.querySelectorAll('.cont-img');
const nbSlides = items.length;
let count = 0;

function nextSlide() {
  items[count].classList.remove('active');
  if(count < nbSlides - 1){
    count++;
  } else {
    count = 0;
  }
  items[count].classList.add('active');
}

setInterval(nextSlide, 10000)


