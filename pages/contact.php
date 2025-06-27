<?php
$message_sent = false;
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($subject) || empty($message)) {
        $error_message = 'Please fill out all fields correctly.';
    } else {
        $to = 'jamesjnrairdrop@gmail.com';
        $email_subject = "New Contact Form Submission: $subject";
        $email_body = "You have received a new message from your website contact form.\n\n".
                      "Here are the details:\n".
                      "Name: $name\n".
                      "Email: $email\n".
                      "Message:\n$message";
        $headers = "From: noreply@yourdomain.com\n"; // Replace with a valid sender email on your domain
        $headers .= "Reply-To: $email";

        if (mail($to, $email_subject, $email_body, $headers)) {
            $message_sent = true;
        } else {
            $error_message = 'Sorry, there was an error sending your message. Please try again later.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <?php include '../includes/head.php'; ?>
    <title>Contact Us - NACOS</title>
    <link rel="stylesheet" href="../assets/css/contact_page.css?v=1.0">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <div class="contact-hero">
        <div class="contact-hero-content">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you. Get in touch with us.</p>
        </div>
    </div>

    <main class="contact-container">
        <div class="contact-grid">
            <div class="contact-form-container">
                <h2>Send us a Message</h2>
                <?php if ($message_sent): ?>
                    <div class="alert alert-success">Thank you for your message! We will get back to you shortly.</div>
                <?php else: ?>
                    <?php if ($error_message): ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <form action="contact.php" method="POST" class="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Send Message</button>
                    </form>
                <?php endif; ?>
            </div>
            <div class="contact-info-container">
                <h2>Contact Information</h2>
                <div class="contact-info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Our Address</h3>
                        <p>Computer Science Department, Nasarawa State University, Keffi.</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p><a href="mailto:nacosnsuk@gmail.com">nacosnsuk@gmail.com</a></p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p><a href="tel:+2348122661713">+234 812 266 1713</a></p>
                    </div>
                </div>
                <div class="contact-map">
                    <h3>Our Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.2003334225435!2d7.905493176792197!3d8.842237182132543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1051e53273e3949b%3A0x9375d39cf98e7363!2sFaculty%20of%20natural%20and%20applied%20sciences%2CNsuk!5e0!3m2!1sen!2sng!4v1750337497432!5m2!1sen!2sng" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>