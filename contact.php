<?php include('partials/header.php'); ?>

    <div class="main" id="contact">
      <h2 class="page-title">CONTACT</h2>
      <div class="main-text">
        If you have any questions, you can reach me at (213) 792-2109 or you can
        fill out the form below and I will get back at you promptly.
      </div>
      <form  class="contact-form">
        <input
          type="text"
          placeholder="Name*"
          class="contact-form__input"
          name="name"
          required
          id="name1"
        />
        <input
          type="text"
          placeholder="E-mail*"
          class="contact-form__input"
          name="email"
          required
          id="email1"
        />
        <textarea
          id="body1"
          placeholder="Your message*"
          class="contact-form__message"
          name="body"
          required
        ></textarea>
        <button
          class="contact-form__button"
          
        >
          <p id="button-text">SEND</p>
          <div class="contact-form__circle"></div>
        </button>
      </form>
      <div id="responsetext"></div>
    </div>
    <script>
      const message = document.querySelector(".contact-form__message");
      console.log("scrollheight", message.scrollHeight);
      message.addEventListener("input", () => {
        message.style.height = "inherit";
        console.log(message.style.height);
        console.log("scrollheight", message.scrollHeight);

        const computed = window.getComputedStyle(message);
        const height =
          parseInt(computed.getPropertyValue("border-top-width"), 10) +
          parseInt(computed.getPropertyValue("padding-top"), 10) +
          parseInt(computed.getPropertyValue("padding-bottom"), 10) +
          message.scrollHeight +
          parseInt(computed.getPropertyValue("border-bottom-width"), 10);

        message.style.height = height + "px";
      });

  
        const buttonText = document.querySelector("#button-text");
        const buttonCircle = document.querySelector(".contact-form__circle");
        const contactForm = document.querySelector(".contact-form");
        const btn = document.querySelector(".contact-form__button");

        contactForm.addEventListener("submit", (e) => {
          e.preventDefault();
          n = name1.value;
        e = email1.value;
        b = body1.value;

          btn.style.background = "white";
                    buttonText.style.display = "none";
                    buttonCircle.style.display = "block";
                    setTimeout(() => {
                      btn.style.background = "black";
        buttonText.style.display = "block";
        buttonCircle.style.display = "";
        console.log("hello");
        responsetext.innerHTML = 'Thank you, we\'ve received your message!';
      }, 1500)

axios.get("send_mail.php?name=" + n + "&email=" + e + "&body=" + b).then((response) => {
                      console.log(response);
         })
          
        });


      
    </script>
<?php include('partials/footer.php'); ?>
