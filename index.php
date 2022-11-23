<?php
    include('partials/header.php');
?>
    <div class="main">
      <div class="image-con">
        <img src="icons/angle-left-solid.svg" class="slider-buttons previous" style="width:15px; height:25.72 px" alt="" />
        <img
          class="image-slides"
          data-title="flowers in the city"
          data-number="1"
          src="images/flowers-in-the-city_web_1500_6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="bible study"
          data-number="2"
          src="images/bible study-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="bird lady"
          data-number="3"
          src="images/bird-lady-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="birthday boy"
          data-number="4"
          src="images/birthday-boy-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="dancing queen"
          data-number="5"
          src="images/Dancing-queen-in-venice-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="father and daughter"
          data-number="6"
          src="images/father-and-daughter-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="girls love a man in uniform"
          data-number="7"
          src="images/Girls-love-a-man-in-uniform-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="hapiness in venice"
          data-number="8"
          src="images/happiness-in-venice-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="inside the venice beach drum circle"
          data-number="9"
          src="images/inside-the-venice-beach-drum-circle-6-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="the red dress"
          data-number="10"
          src="images/The-red-dress-in-the-circle-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="trance in venice"
          data-number="11"
          src="images/Trance-in-venice-2-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="love behind bars"
          data-number="12"
          src="images/love-behind bars-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="more than a game"
          data-number="13"
          src="images/more-than-a game-2-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="pre kiss faces"
          data-number="14"
          src="images/pre-kiss-faces-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="the kiss"
          data-number="15"
          src="images/the-kiss-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="spring st dtla"
          data-number="16"
          src="images/spring-st-dtla-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="street games"
          data-number="17"
          src="images/street-games-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="the dice game"
          data-number="18"
          src="images/the-dice-game_web_1500_6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"
          data-title="the flag"
          data-number="19"
          src="images/the-flag-web-1500-6x4.jpg"
          alt=""
        />
        <img
          class="image-slides"  
          data-title="the geisha"
          data-number="20"
          src="images/the-geisha_web_1500_6x4.jpg"
          alt=""
        />
        <img src="icons/angle-right-solid.svg" class='slider-buttons previous' style='width:15px; height:25.72px' alt="" />

      </div>
      <div class="caption">
        <p class="image-title"></p>
        <div class="image-counter">
          <span class="image-num"></span>/<span class="image-total"></span>
        </div>
      </div>
      <script>
        const imageContainer = document.querySelector(".image-con");
const images = document.querySelectorAll(".image-slides");
const caption = document.querySelector(".caption");
console.log("indie js file");
const captionTitle = caption.querySelector(".image-title");
const numberOfImages = images.length;
const imageNum = document.querySelector(".image-num");
const imageTotal = document.querySelector(".image-total");
imageTotal.innerHTML = numberOfImages;

const firstImage = images[0];
captionTitle.innerHTML = firstImage.dataset.title;
imageNum.innerHTML = firstImage.dataset.number;
imageContainer.addEventListener("touchend", (e) => {
  setTimeout(() => {
    images.forEach((image) => {
      if (
        image.getBoundingClientRect().left >= 14 &&
        image.getBoundingClientRect().left <= 16
      ) {
        captionTitle.innerHTML = image.dataset.title;
        imageNum.innerHTML = image.dataset.number;
      }
    });
  }, 800);
});

const widthOfContainer = imageContainer.getBoundingClientRect().width;
let changeInMouse = 0;

let isDown = false;
let startX;
let scrollLeft;

imageContainer.addEventListener("mousedown", (e) => {
  isDown = true;
  // get the x position of the mouse when the mouse is clicked
  startX = e.pageX;
  // get the current scroll position of the image container
  scrollLeft = imageContainer.scrollLeft;
});

imageContainer.addEventListener("mouseleave", () => {
  isDown = false;
  // imageContainer.classList.remove('active');
});

imageContainer.addEventListener("mouseup", () => {
  isDown = false;
  // if mouse was dragged to the right then images move back else images move forward
  if (changeInMouse > 0) {
    imageContainer.scrollLeft = scrollLeft - widthOfContainer;
  } else {
    imageContainer.scrollLeft = scrollLeft + widthOfContainer;
  }
});

imageContainer.addEventListener("mousemove", (e) => {
  if (!isDown) return; // stop the fn from running
  e.preventDefault();
  // get the change in mouse position
  changeInMouse = e.movementX;
  // scroll the image container by the current scroll position minus the change in mouse position
  console.log(e.pageX);
  imageContainer.scrollLeft = scrollLeft - (e.pageX - startX);
});

      </script>
      <?php
        include('partials/footer.php');
      ?>
    

    
