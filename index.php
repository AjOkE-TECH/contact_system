<?php session_start(); ?>
<?php include "includes/header.php"; ?>

<?php if (isset($_SESSION['error'])): ?>
    <p style="color:red;">
        <?= $_SESSION['error']; ?>
    </p>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
    <p style="color:green;">
        <?= $_SESSION['success']; ?>
    </p>
<?php endif; ?>

<?php
unset($_SESSION['error']);
unset($_SESSION['success']);
?>

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