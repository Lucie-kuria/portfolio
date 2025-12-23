<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LK Designs - Portfolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* Example inline styles (better to keep in style.css) */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 60px;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #222;
    }

    .logo span {
      color: #ff6600; /* Accent color */
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 30px;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline-block;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #ff6600; /* Hover accent */
    }
  </style>
</head>
<body>
  <header>
   <div class="logo">
      Ms.K<span>Designs</span>
     
      <img src="log1.png" alt="Brand Logo">
    </div>
    <nav>
      <ul>
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="testimonials.php">Testimonials</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>
