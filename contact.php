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
    <form action="send_mail.php" method="get" class="contact-form">
        <input type="text" placeholder="Name*" class="contact-form__input" name="name" required>
        <input type="text" placeholder="E-mail*" class="contact-form__input" name="email" required>
        <textarea id="" placeholder="Your message*" class="contact-form__message" name="body" required></textarea>
        <button class="contact-form__button">SEND</button>
    </form>
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
</script>
<?php include('partials/footer.php'); ?>

