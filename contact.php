<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Let's Connect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="contact.css"> <!-- external CSS -->
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2>Let's <span class="text-info">Connect</span></h2>
        <p>Ready to bring your vision to life? I'd love to hear about your project and discuss how we can create something amazing together.</p>
    </div>

    <div class="row g-4">
        <!-- Left Column -->
        <div class="col-md-4">
            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <h6>Email</h6>
                <p>lucykuria005@gmail.com</p>
                <small>Send me an email anytime</small>
            </div>

            <div class="contact-card">
                <i class="fas fa-phone-alt"></i>
                <h6>Phone</h6>
                <p>+254794352980</p>
                <small>Mon-Fri from 9am to 6pm</small>
            </div>

            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <h6>Location</h6>
                <p>Nairobi, Kenya</p>
                <small>Available for remote work</small>
            </div>

            <div class="contact-card">
                <i class="fas fa-clock"></i>
                <h6>Response Time</h6>
                <p>I typically respond to all inquiries within 24 hours during business days.</p>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-8">
            <div class="contact-form p-4 shadow-sm">
                <form id="contactForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subject *</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Message *</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-info text-white px-4">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </div>
                    </div>
                </form>
                <div id="formResponse" class="mt-3"></div>
            </div>
        </div>
    </div>
</div>

<script src="contact.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>
