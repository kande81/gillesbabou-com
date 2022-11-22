<?php include('partials/header.php'); ?>
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
        PRINTS
    </h2>
    <div class="main-text">
All the images are printed on the Epson Exhibition Fiber fine art paper using archival ink, making the prints last longer than a lifetime.  The images are printed at the world famous Bayphoto photo lab in Scotts Valley, California. The prints come 
in one size, 20x14".
</div>
<div class="faq-container">
    <div class="faq" id="shipping">
        <div class="faq-title" id="shipping-title">
            <h3>SHIPPING</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="15.166" viewBox="0 0 26 15.166">
  <path id="angle-down-solid" d="M13,175.166a2.157,2.157,0,0,1-1.531-.635L.64,163.7A2.166,2.166,0,1,1,3.7,160.635l9.3,9.3,9.3-9.3A2.166,2.166,0,0,1,25.37,163.7L14.538,174.533A2.16,2.16,0,0,1,13,175.166Z" transform="translate(-0.005 -160)"/>
</svg>
</div>
    <div class="faq-text" id="shipping-text">
        <p>
        When you order a print from this site, the order is actually fulfilled by FotoMoto which is a Bayphoto company. Prints will generally ship in 3-4 business days. After you've placed your order, you should receive an email confirmation with a link to check the status of your order. Once your order has shipped , you should receive a shipping confirmation email. If you're having any problems receiving your order, please first contact Fotomoto support with your order number. You can also contact me and I will investigate the matter and get back to you promptly.

Shipping is done via UPS, USPS, and FedEx to anywhere in the world those companies ship.
        </p>
    </div>
    </div>
    <div class="faq" id="returns">
        <div class="faq-title" id="returns-title">
            <h3>RETURNS</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="15.166" viewBox="0 0 26 15.166">
  <path id="angle-down-solid" d="M13,175.166a2.157,2.157,0,0,1-1.531-.635L.64,163.7A2.166,2.166,0,1,1,3.7,160.635l9.3,9.3,9.3-9.3A2.166,2.166,0,0,1,25.37,163.7L14.538,174.533A2.16,2.16,0,0,1,13,175.166Z" transform="translate(-0.005 -160)"/>
</svg>
        </div>
    <div class="faq-text" id="returns-text">
        <p>
        Due to the nature of print art, we can't accept returns on the prints once you have received them. However, if there is an issue with the quality of the prints or if the prints are damaged then please contact Fotomoto support and they will gladly offer you a reprint. If you are having problems getting in touch with FotoMoto you can also contact me and I will get back to you promptly.
        </p>
    </div>


    </div>
</div>
<script>
    const faqs = document.querySelectorAll(".faq");
faqs.forEach((faq) => {
  faq.addEventListener("click", () => {
    faq.classList.toggle("active");
  });
});
</script>
<?php include('partials/footer.php'); ?>
