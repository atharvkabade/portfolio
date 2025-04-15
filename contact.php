<?php include 'includes/header.php'; ?>

<h2>Contact Me</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<p>Thank you, <strong>$name</strong>. Your message has been received.</p>";

    // Optional: Save message to a file
    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name, \nEmail: $email, \nMessage: $message\n\n");
    fclose($file);
}
?>

<form method="post" action="contact.php" onsubmit="return validateForm()">
    <label>Name:</label>
    <input type="text" name="name" id="name"><br>
    <label>Email:</label>
    <input type="email" name="email" id="email"><br>
    <label>Message:</label><br>
    <textarea name="message" id="message"></textarea><br>
    <input type="submit" value="Send Message">
</form>

<?php include 'includes/footer.php'; ?>
