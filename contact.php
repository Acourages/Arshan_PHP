<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="icon" href="assets/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your_fontawesome_kit.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
        </header>
        <main class="contact-page">
            <section class="contact-form-container">
                <h2 class="contact-heading">Let's Connect</h2>
                <p class="contact-intro">Feel free to reach out with any questions, collaboration ideas, or just to say hello!</p>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Sanitize input data
                    $name = htmlspecialchars($_POST['name']); // Sanitize input
                    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize email
                    $message = htmlspecialchars($_POST['message']); // Sanitize input
                    $to = 'arshan.hosseinlar.workmail@gmail.com'; // Replace with your actual email address
                    $subject = 'New Message from Your Website Contact Form';
                    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
                    $headers = "From: $email";

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate email
                        if (mail($to, $subject, $body, $headers)) {
                            echo '<p class="contact-message success">Thank you for your message! I will get back to you as soon as possible.</p>';
                        } else {
                            echo '<p class="contact-message error">Oops! Something went wrong. Please try again later.</p>';
                        }
                    } else {
                        echo '<p class="contact-message error">Invalid email address.</p>';
                    }
                }
                ?>

                <form action="" method="post" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="submit-button">Send Message</button>
                </form>
            </section>
            <div class="home-emoji-container">
                <a href="index.php" class="home-emoji">🏠</a>
            </div>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Arshan Hosseinlar. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
