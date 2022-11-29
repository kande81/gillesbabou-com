<?php
    include('partials/header.php');
?>

<div class="main">
<h2 class="page-title">
        CONTACT
    </h2>
    <div class="main-text">
    If you have any questions, you can reach me at (213) 792-2109 or you can fill out the form below and I will get back at you promptly.
    </div>
    <div class="contact-form">
    <input type="text" placeholder="Name*" class="contact-form__input" name="name" required id="name1">
    <input type="text" placeholder="E-mail*" class="contact-form__input" name="email" required id="email1">
    <textarea id="body1" placeholder="Your message*" class="contact-form__message" name="body" required ></textarea>
    <button class="contact-form__button" onclick="formSubmit(this,name1.value, email1.value, body1.value)"><p id="button-text">SEND</p>
    <div class="contact-form__circle"></div>
</button>
</div>
<div class="message-success">
    <p>Thank you we've received your message</p>
</div>
<div id="responsetext">

</div>
<script>
    const message = document.querySelector('.contact-form__message');
    console.log('scrollheight', message.scrollHeight);
    message.addEventListener('input', () => {
        message.style.height = 'inherit';
        console.log(message.style.height);
        console.log('scrollheight', message.scrollHeight);

       const computed = window.getComputedStyle(message);
         const height = parseInt(computed.getPropertyValue('border-top-width'), 10) + parseInt(computed.getPropertyValue('padding-top'), 10) + parseInt(computed.getPropertyValue('padding-bottom'), 10)  + message.scrollHeight + parseInt(computed.getPropertyValue('border-bottom-width'), 10);

        message.style.height = height + 'px';
            
    })

    function formSubmit(btn,n, e, b) {
        const buttonText = document.querySelector('#button-text');
        const buttonCircle = document.querySelector('.contact-form__circle');


const url = 'send_mail.php?name=' + n + '&email=' + e + '&body=' + b;
console.log(url);
const xhr = new XMLHttpRequest();
xhr.open('GET', url, false);
xhr.send();

let response;
while (!response) {
    btn.style.background = 'white';
    buttonText.style.display = 'none';
    buttonCircle.style.display = 'block';
    response = xhr.responseText;

}

btn.style.background = 'black';
    buttonText.style.display = 'block';
    buttonCircle.style.display = '';
    
console.log(response);
console.log('hello');
responsetext.innerHTML = response;
}

</script>
<?php include('partials/footer.php'); ?>

