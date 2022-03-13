////////////////CAROUSEL HOME PAGE START //////////////////////////
const slide = document.querySelectorAll('.cont-img');

if (typeof slide[0] !== 'undefined') {
  slide[0].classList.add('active');

  function nextSlide() {

    const nbSlides = slide.length;
    let count = 0;
  
    slide[count].classList.remove('active');
    if (count < nbSlides - 1) {
      count++;
    } else {
      count = 0;
    }
    slide[count].classList.add('active');
  }
  
  setInterval(nextSlide, 6000);
}

////////////////CAROUSEL HOME PAGE END //////////////////////////

////////////////CAROUSEL GAME PAGE START //////////////////////////
const iframe = document.getElementById('iframe');
const img = document.querySelector('.img-game');
const imgMin1 = document.getElementById('img-game-mini1');
const imgMin2 = document.getElementById('img-game-mini2');
const imgMin3 = document.getElementById('img-game-mini3');
const imgMin4 = document.getElementById('img-game-mini4');
const imgMin5 = document.getElementById('img-game-mini5');

if (typeof slide[0] === 'undefined') {

  
  (function changeImg() {
  
        imgMin1.addEventListener('click', function() {
          iframe.classList.remove('disable');
          iframe.classList.add('active');
  
          img.classList.remove('active');
          img.classList.add('disable');
        })
  
        imgMin2.addEventListener('click', function () {
          iframe.classList.remove('active');
          iframe.classList.add('disable');
  
          img.classList.remove('disable');
          img.classList.add('active');
  
          img.src = imgMin2.src;
        })
  
        imgMin3.addEventListener('click', function () {
          iframe.classList.remove('active');
          iframe.classList.add('disable');
  
          img.classList.remove('disable');
          img.classList.add('active');
  
          img.src = imgMin3.src;
        })
  
        imgMin4.addEventListener('click', function () {
          iframe.classList.remove('active');
          iframe.classList.add('disable');
  
          img.classList.remove('disable');
          img.classList.add('active');
  
          img.src = imgMin4.src;
        })
  
        imgMin5.addEventListener('click', function () {
          iframe.classList.remove('active');
          iframe.classList.add('disable');
  
          img.classList.remove('disable');
          img.classList.add('active');
  
          img.src = imgMin5.src;
        })
  })();
  
  ////////////////CAROUSEL GAME PAGE END //////////////////////////
  
  ////////////////COLLAPSE GAME PAGE START //////////////////////////
  const button = document.getElementById('buttonCollapse');
  const content = document.getElementById('content');
  
  (function showCollapse() {
  

  
    button.addEventListener('click', function () {
      if (content.style.display === 'block') {
        content.style.display = 'none';
        button.innerHTML = 'Voir plus';
      } else {
        content.style.display = 'block';
        button.innerHTML = 'Voir moins';
      }
    });
  })();

}

////////////////COLLAPSE GAME PAGE END //////////////////////////
