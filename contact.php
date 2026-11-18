

<?php include 'header.php'; ?>

<h2>Contact Us</h2>
<p>Please fill the form below:</p>

<form name="contact" onsubmit="return validate() " method="post">
    <label>Email:</label>
    <input type="email" name="email">
    
    <label>Message:</label>
    <textarea name="message"></textarea>
    
    <button type="submit">Send</button>
</form>

<?php include 'footer.php'; ?>