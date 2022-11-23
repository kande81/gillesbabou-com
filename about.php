<?php
    include('partials/header.php');
?>
<script>
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


</script>

<div class="main">
    <h2 class="page-title">
        ABOUT
    </h2>
    <div class="about-portrait">
        <img class="about-portrait__img"src="images/place-holder-web-1500-6x4.jpg" alt="">
    </div>
    <div class="main-text">
    Hi, I'm Gilles Babou. First and foremost I would like to thank you for taking the time to visit my online photography gallery. 
    <p class='main-text__secondpara'>
    I was born in Cameroon and grew up in Germany, France, England, Israel and the United States. After living for 10 years in the east coast of the U.S, I moved to Los Angeles in 2010 where I discovered a love for  street-photography after stumbling upon the works of Henri Cartier Bresson and of Vivian Maier. Those two giants of street-photography were the inspiration that drove me to purchase my first camera in my early thirties and started exploring the streets of Los Angeles with my camera in hand seeking to capture those fleeting moments that give us an insight into the human condition. 
    </p>

    </div>
</div>
<?php
        include('partials/footer.php');
      ?>
