////////////////CAROUSEL HOME PAGE START //////////////////////////
const slide = document.querySelectorAll('.cont-img');
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

////////////////CAROUSEL HOME PAGE END //////////////////////////

////////////////CAROUSEL GAME PAGE START //////////////////////////

(function changeImg() {

  const iframe = document.getElementsByTagName('iframe');
  const img = document.getElementsByClassName('img-game');
  const imgMin1 = document.getElementsByClassName('img-game-mini1');
  const imgMin2 = document.getElementsByClassName('img-game-mini2');
  const imgMin3 = document.getElementsByClassName('img-game-mini3');
  const imgMin4 = document.getElementsByClassName('img-game-mini4');
  const imgMin5 = document.getElementsByClassName('img-game-mini5');

      imgMin1[0].addEventListener('click', function() {
        iframe[0].classList.remove('disable');
        iframe[0].classList.add('active');

        img[0].classList.remove('active');
        img[0].classList.add('disable');
      })

      imgMin2[0].addEventListener('click', function () {
        iframe[0].classList.remove('active');
        iframe[0].classList.add('disable');

        img[0].classList.remove('disable');
        img[0].classList.add('active');

        img[0].src = imgMin2[0].src;
      })

      imgMin3[0].addEventListener('click', function () {
        iframe[0].classList.remove('active');
        iframe[0].classList.add('disable');

        img[0].classList.remove('disable');
        img[0].classList.add('active');

        img[0].src = imgMin3[0].src;
      })

      imgMin4[0].addEventListener('click', function () {
        iframe[0].classList.remove('active');
        iframe[0].classList.add('disable');

        img[0].classList.remove('disable');
        img[0].classList.add('active');

        img[0].src = imgMin4[0].src;
      })

      imgMin5[0].addEventListener('click', function () {
        iframe[0].classList.remove('active');
        iframe[0].classList.add('disable');

        img[0].classList.remove('disable');
        img[0].classList.add('active');

        img[0].src = imgMin5[0].src;
      })
})();

////////////////CAROUSEL GAME PAGE END //////////////////////////

////////////////COLLAPSE GAME PAGE START //////////////////////////

(function showCollapse() {

  const button = document.getElementsByClassName('collapsible');
  const content = document.getElementsByClassName('content');

  console.log(button[0]);
  console.log(content[0]);

  button[0].addEventListener('click', function () {
    if (content[0].style.display === 'block') {
      content[0].style.display = 'none';
      button[0].innerHTML = 'Voir plus';
    } else {
      content[0].style.display = 'block';
      button[0].innerHTML = 'Voir moins';
    }
  });
})();

////////////////COLLAPSE GAME PAGE END //////////////////////////
