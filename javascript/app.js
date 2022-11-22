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
// const imageContainer = document.querySelector(".image-con");

//// start of code for slider capabilites in desktop view
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

//// end of code for slider capabilites in desktop view

// start of code for displaying the menu when the hamburger icon is clicked

const burger = document.querySelector(".burger");
const nav = document.querySelector(".nav-links");
const navLinks = document.querySelectorAll(".nav-links li");

burger.addEventListener("click", () => {
  nav.classList.toggle("nav-active");
  // animate the links
  navLinks.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = "";
    } else {
      link.style.animation = `navLinkFade 0.6s ease forwards ${
        index / 6 + 0.3
      }s`;
    }
  });
  // animate the burger icon
  burger.classList.toggle("toggle");
});

// end of code for displaying the menu when the hamburger icon is clicked

// start of code for animating
