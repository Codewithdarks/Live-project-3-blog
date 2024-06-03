<?php 
include 'partials/header.php'
?>
<section class="empty__page">
    <div class="contact-container" style="border:1px solid #6f6af8;padding:30px;border-radius:20px;background-color:#6f6af8;margin-top:10px;">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit" style="border:1px solid white;border-radius:5px;padding:10px">Send Message</button>
        </form>
    </div>
</section>

<?php
include './partials/footer.php';
?>