<?php include 'includes/header.php'; ?>

<?php

$services = [
    [
        "title" => "Brand Identity",
        "description" => "Complete brand identity solutions including logo design, color palettes, and brand guidelines.",
        "features" => ["Logo Design", "Brand Guidelines", "Color Schemes", "Typography"],
        "price" => "KES 65,000",
        "icon" => "fas fa-palette", // Font Awesome icon
        "link" => "service-details.php?service=brand-identity"
    ],
    [
        "title" => "Web Design",
        "description" => "Modern, responsive website designs that convert visitors into customers.",
        "features" => ["UI/UX Design", "Responsive Design", "Prototyping", "User Testing"],
        "price" => "KES 104,000",
        "icon" => "fas fa-desktop",
        "link" => "service-details.php?service=web-design"
    ],
    [
        "title" => "Print Design",
        "description" => "Professional print materials that make lasting impressions.",
        "features" => ["Business Cards", "Brochures", "Posters", "Packaging"],
        "price" => "KES 26,000",
        "icon" => "fas fa-print",
        "link" => "service-details.php?service=print-design"
    ],
    [
        "title" => "Digital Marketing",
        "description" => "Strategies to boost your online visibility and engagement.",
        "features" => ["SEO", "Social Media", "Email Campaigns", "PPC Ads"],
        "price" => "KES 48,000",
        "icon" => "fas fa-bullhorn",
        "link" => "service-details.php?service=digital-marketing"
    ],
    [
        "title" => "App Development",
        "description" => "Custom mobile and web applications to scale your business.",
        "features" => ["iOS Apps", "Android Apps", "Cross-platform", "API Integration"],
        "price" => "KES 120,000",
        "icon" => "fas fa-mobile-alt",
        "link" => "service-details.php?service=app-development"
    ],
    [
        "title" => "Consulting",
        "description" => "Expert advice to streamline your design and tech projects.",
        "features" => ["Project Planning", "Brand Strategy", "Design Audits", "Workshops"],
        "price" => "KES 35,000",
        "icon" => "fas fa-user-tie",
        "link" => "service-details.php?service=consulting"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Services</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="services.css"> <!-- External CSS -->
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2>My <span class="text-info">Services</span></h2>
        <p>I offer comprehensive design and development services to help your brand stand out and make a lasting impact in today's competitive market.</p>
    </div>

    <div class="row g-4">
        <?php foreach($services as $service): ?>
        <div class="col-md-4">
            <div class="service-card shadow-sm">
                <div class="icon-box">
                    <i class="<?= $service['icon'] ?>"></i>
                </div>
                <h5><?= $service['title'] ?></h5>
                <p><?= $service['description'] ?></p>
                <ul>
                    <?php foreach($service['features'] as $feature): ?>
                        <li><?= $feature ?></li>
                    <?php endforeach; ?>
                </ul>
                <hr>
                <p class="price">Starting at <?= $service['price'] ?></p>
                <a href="<?= $service['link'] ?>" class="btn btn-info text-white w-100">Get Started</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
