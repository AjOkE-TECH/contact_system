<?php include "includes/header.php"; ?>

<div class="form-container">
    <h2>Contact Us</h2>

    <form method="POST" action="submit.php">
        <input type="text" name="name" placeholder="Your Name" required>
        
        <input type="email" name="email" placeholder="Your Email" required>
        
        <input type="text" name="phone" placeholder="Your Phone">
        
        <textarea name="message" placeholder="Your Message"></textarea>
        
        <button type="submit">Send Message</button>
    </form>
</div>
<?php include "includes/footer.php"; ?>