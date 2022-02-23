////////////////CAROUSEL HOME PAGE START //////////////////////////

function nextSlide() {

  const slide = document.querySelectorAll('.cont-img');
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

  console.log(iframe);
  console.log(img);
  console.log(imgMin1);
  console.log(imgMin2);
  console.log(imgMin3);
  console.log(imgMin4);
  console.log(imgMin5);

  /* setInterval(function () {
    if (iframe.length === 1) { */
      imgMin1.addEventListener('click', function() {
        iframe.classList.remove('disable');
        iframe.classList.add('active');

        img.classList.remove('active');
        img.classList.add('disable');
      })
      /* imgMin1.addEventListener('click', function () {
        
      }) */

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
    /* }
  }, 100) */
})();

////////////////CAROUSEL GAME PAGE END //////////////////////////

////////////////COLLAPSE GAME PAGE START //////////////////////////

(function showCollapse() {

  const button = document.getElementsByClassName('collapsible');
  const content = document.getElementsByClassName('content');

  console.log(button);
  console.log(content);

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

////////////////COLLAPSE GAME PAGE END //////////////////////////
