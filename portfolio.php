<?php include 'includes/header.php'; ?>

<?php
// Portfolio items (later you can fetch these from DB)
$portfolioItems = [
    [
        "title" => "Modern Tech Brand",
        "category" => "Branding",
        "description" => "Complete brand identity for a tech startup",
        "image" => "images/branding1.jpg",
        "link"  => "#"
    ],
    [
        "title" => "E-commerce App Design",
        "category" => "UI/UX",
        "description" => "Mobile app interface for shopping platform",
        "image" => "images/uiux1.jpg",
        "link"  => "#"
    ],
    [
        "title" => "Character Illustration",
        "category" => "Illustrations",
        "description" => "Custom character design for animation",
        "image" => "images/illustration1.jpg",
        "link"  => "#"
    ],
    [
        "title" => "Creative Flyer Design",
        "category" => "Print Design",
        "description" => "Flyer design for marketing campaign",
        "image" => "images/print1.jpg",
        "link"  => "#"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="portfolio.css"> <!-- External CSS -->
</head>
<body>
<div class="container py-5">

    <!-- Section Title -->
    <div class="text-center mb-5">
        <h2>My <span class="text-info">Portfolio</span></h2>
        <p>Explore my latest projects and creative solutions that have helped brands stand out and connect with their audiences.</p>
        
        <!-- Filter Buttons -->
        <div class="mb-4">
            <button class="btn btn-info text-white filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-dark filter-btn" data-filter="branding">Branding</button>
            <button class="btn btn-outline-dark filter-btn" data-filter="ui/ux">UI/UX</button>
            <button class="btn btn-outline-dark filter-btn" data-filter="illustrations">Illustrations</button>
            <button class="btn btn-outline-dark filter-btn" data-filter="print design">Print Design</button>
        </div>
    </div>

    <!-- Portfolio Grid (2 columns) -->
    <div class="row" id="portfolio-container">
        <?php foreach($portfolioItems as $item): ?>
        <div class="col-md-6 mb-4 portfolio-item" data-category="<?= strtolower($item['category']) ?>">
            <div class="portfolio-card shadow-sm">
                <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
                <div class="portfolio-overlay">
                    <a href="<?= $item['link'] ?>" class="view-btn">View Project</a>
                </div>
            </div>
            <h5 class="mt-2"><?= $item['title'] ?></h5>
            <p class="text-muted"><?= $item['category'] ?></p>
            <p><?= $item['description'] ?></p>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- View All Projects Button -->
    <div class="text-center mt-4">
        <a href="portfolio.php" class="btn btn-info text-white px-4 py-2">View All Projects</a>
    </div>
</div>

<script>
// JS Filter Function
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', () => {
        let filter = button.getAttribute('data-filter');
        document.querySelectorAll('.portfolio-item').forEach(item => {
            if(filter === "all" || item.getAttribute('data-category') === filter) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});
</script>
</body>
</html>

<?php include 'includes/footer.php'; ?>
