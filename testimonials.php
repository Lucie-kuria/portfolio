<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Testimonials</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="testimonials.css"> <!-- external CSS -->
</head>
<body>

<?php
// ✅ Testimonials array (later can fetch from DB)
$testimonials = [
    [
        "name" => "Brian Wachira",
        "position" => "CEO, Briwnet Web",
        "image" => "images/clients/grace.jpg",
        "message" => "Lucy's design work completely transformed our brand identity. 
                      The logo and visual system he created perfectly captures our 
                      company's innovative spirit. Our customer engagement has increased 
                      by 40% since the rebrand."
    ],
    [
        "name" => "Mufasa Ndung'u",
        "position" => "Senior developer",
        "image" => "images/clients/michael.jpg",
        "message" => "Working with Lucy was an absolute pleasure. He understood our vision 
                      immediately and delivered designs that exceeded our expectations. 
                      The restaurant's new branding has helped us attract a completely 
                      new demographic."
    ],
    [
        "name" => "Stanley Machara",
        "position" => "Project Manager",
        "image" => "images/clients/faith.jpg",
        "message" => "Lucy's attention to detail and creative approach made our product 
                      packaging stand out on shelves. Sales have increased by 60% since 
                      implementing his designs. He's truly a design wizard!"
    ],
    [
        "name" => " Tracey Makena",
        "position" => "Product Manager, FinTech Hub",
        "image" => "images/clients/john.jpg",
        "message" => "The UI/UX design Lucy created for our mobile app is intuitive and 
                      beautiful. User retention has improved significantly, and we've 
                      received countless compliments about the app's design from our users."
    ]
];
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2>Client <span class="text-info">Testimonials</span></h2>
        <p>Don't just take my word for it. Here's what my clients say about working with me 
           and the results we've achieved together.</p>
    </div>

    <div class="row g-4">
        <?php foreach($testimonials as $t): ?>
        <div class="col-md-6">
            <div class="testimonial-card shadow-sm p-4">
                <!-- Rating Stars -->
                <div class="mb-2 text-warning">
                    <?php for($i=0; $i<5; $i++) echo '<i class="fas fa-star"></i>'; ?>
                </div>
                <!-- Message -->
                <p class="testimonial-text"><i class="fas fa-quote-left me-2"></i><?= $t['message'] ?><i class="fas fa-quote-right ms-2"></i></p>
                <!-- Client Info -->
                <div class="d-flex align-items-center mt-3">
                    <img src="<?= $t['image'] ?>" class="rounded-circle me-3" width="50" height="50" alt="<?= $t['name'] ?>">
                    <div>
                        <h6 class="mb-0 fw-bold"><?= $t['name'] ?></h6>
                        <small class="text-muted"><?= $t['position'] ?></small>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
