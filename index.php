<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
<?php
$page = $_GET['page'] ?? 'home';

$allowed = [
    'index',
    'about',
    'portfolio',
    'projects',
    'services',
    'testimonials',
    'contact'
];

if (in_array($page, $allowed)) {
    include "pages/$page.php";
} else {
    echo "<h2>Page not found</h2>";
}
?>
</main>

<?php include 'includes/footer.php'; ?>
