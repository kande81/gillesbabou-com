// const imageContainer = document.querySelector(".image-con");

//// start of code for slider capabilites in desktop view ////

//// end of code for slider capabilites in desktop view

// start of code for displaying the menu when the hamburger icon is clicked
const main = document.querySelector(".main");
const burger = document.querySelector(".burger");
const nav = document.querySelector(".nav-links");
const navLinks = document.querySelectorAll(".nav-links li");

burger.addEventListener("click", () => {
  // main.classList.toggle("bhidden");
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

// start of code for showing line under the active menu
const page = main.getAttribute("id");

navLinks.forEach((link) => {
  if (link.getAttribute("id") === page) {
    link.style.borderBottom = "2px solid #000";
    const style = window.getComputedStyle(link, "::after");
    console.log(style);
  }
});
