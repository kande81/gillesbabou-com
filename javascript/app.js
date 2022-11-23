// const imageContainer = document.querySelector(".image-con");

//// start of code for slider capabilites in desktop view ////

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
