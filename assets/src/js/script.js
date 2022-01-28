////////////////CAROUSEL HOME PAGE START //////////////////////////

const slide = document.querySelectorAll('.cont-img');
const nbSlides = slide.length;
let count = 0;

function nextSlide() {
  slide[count].classList.remove('active');
  if(count < nbSlides - 1){
    count++;
  } else {
    count = 0;
  }
  slide[count].classList.add('active');
}

setInterval(nextSlide, 6000)


////////////////CAROUSEL HOME PAGE END //////////////////////////

////////////////CAROUSEL GAME PAGE START //////////////////////////

const img = document.querySelector('.img-game');
const imgMin1 = document.querySelector('.img-game-mini1');
const imgMin2 = document.querySelector('.img-game-mini2');
const imgMin3 = document.querySelector('.img-game-mini3');
const imgMin4 = document.querySelector('.img-game-mini4');
const imgMin5 = document.querySelector('.img-game-mini5');

function changeImg() {
  imgMin1.addEventListener('click', function() {
    const imgSrc = document.querySelector('.img-game').src;
    img.src = imgMin1.src;
    imgMin1.src = imgSrc;
  })
  
  imgMin2.addEventListener('click', function() {
    const imgSrc = document.querySelector('.img-game').src;
    img.src = imgMin2.src;
    imgMin2.src = imgSrc;
  })

  imgMin3.addEventListener('click', function() {
    const imgSrc = document.querySelector('.img-game').src;
    img.src = imgMin3.src;
    imgMin3.src = imgSrc;
  })

  imgMin4.addEventListener('click', function() {
    const imgSrc = document.querySelector('.img-game').src;
    img.src = imgMin4.src;
    imgMin4.src = imgSrc;
  })

  imgMin5.addEventListener('click', function() {
    const imgSrc = document.querySelector('.img-game').src;
    img.src = imgMin5.src;
    imgMin5.src = imgSrc;
  })
}

changeImg();

////////////////CAROUSEL GAME PAGE END //////////////////////////