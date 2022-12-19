<?php
    include('partials/header.php');
?>

    <div class="main" id="prints">
      <h2 class="page-title">PRINTS</h2>
      <div class="main-text">
        All the images are printed on the Epson Exhibition Fiber fine art paper
        using archival ink, making the prints last longer than a lifetime. The
        images are printed at the world famous Bayphoto photo lab in Scotts
        Valley, California. The prints come in various sizes:
        <ul id='print-prices'>
          <li>8x12 and 8x10.7: &nbsp;$600</li>
          <li>10x15 and 10x13.3:  &nbsp;$750</li>
          <li>12x18 and 12x16:  &nbsp;$900</li>
          <li>16x24 and 16x21.3:  &nbsp;$1,200</li>
        </ul>
      </div>
      <div class="faq-container">
        <div class="faq" id="shipping">
          <div class="faq-title" id="shipping-title">
            <h3>SHIPPING</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 15.166">
              <path
                id="angle-down-solid"
                d="M13,175.166a2.157,2.157,0,0,1-1.531-.635L.64,163.7A2.166,2.166,0,1,1,3.7,160.635l9.3,9.3,9.3-9.3A2.166,2.166,0,0,1,25.37,163.7L14.538,174.533A2.16,2.16,0,0,1,13,175.166Z"
                transform="translate(-0.005 -160)"
              />
            </svg>
          </div>
          <div class="faq-text" id="shipping-text">
            <p>
              When you order a print from this site, the order is actually
              fulfilled by FotoMoto which is a Bayphoto company. Prints will
              generally ship in 3-4 business days. After you've placed your
              order, you should receive an email confirmation with a link to
              check the status of your order. Once your order has shipped , you
              should receive a shipping confirmation email. If you're having any
              problems receiving your order, please first  contact <a href='https://support.fotomoto.com/s/contactsupport'>Fotomoto</a>
              support with your order number. You can also <a href='contact.php'>contact me</a> and I will
              investigate the matter and get back to you promptly. Shipping is
              done via UPS, USPS, and FedEx to anywhere in the world those
              companies ship.
            </p>
          </div>
        </div>
        <div class="faq" id="returns">
          <div class="faq-title" id="returns-title">
            <h3>RETURNS</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 15.166">
              <path
                id="angle-down-solid"
                d="M13,175.166a2.157,2.157,0,0,1-1.531-.635L.64,163.7A2.166,2.166,0,1,1,3.7,160.635l9.3,9.3,9.3-9.3A2.166,2.166,0,0,1,25.37,163.7L14.538,174.533A2.16,2.16,0,0,1,13,175.166Z"
                transform="translate(-0.005 -160)"
              />
            </svg>
          </div>
          <div class="faq-text" id="returns-text">
            <p>
              Due to the nature of print art, we can't accept returns on the
              prints once you have received them. However, if there is an issue
              with the quality of the prints or if the prints are damaged then
              please contact <a href='https://support.fotomoto.com/s/contactsupport'>Fotomoto</a> support and they will gladly offer you a
              reprint. If you are having problems getting in touch with FotoMoto
              you can also  <a href='contact.php'>contact me</a> and I will get back to you promptly.
            </p>
          </div>
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
