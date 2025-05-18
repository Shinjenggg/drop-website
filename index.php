<?php
// DropCulturePh Home Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DropCulturePh</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <h1 class="logo">DropCulturePh</h1>
    <div class="socials">
      <a href="https://instagram.com/dropcultureph" target="_blank">Instagram</a>
      <a href="https://facebook.com/drop.cultureph2" target="_blank">Facebook</a>
    </div>
  </header>

  <main>
    <section class="hero">
      <h2>Handcrafted Boho Accessories</h2>
      <p>Embrace your culture with our unique handmade pieces — from bracelets to bags and more.</p>
    </section>

    <section class="products">
      <?php
        $products = [
          ["name" => "Boho Bracelet", "image" => "images/RANGERHAT.jpg", "link" => "https://shopee.ph/boho-bracelet"],
          ["name" => "BRACELET & BANGLE", "image" => "images/FISHTAIL.jpg", "link" => "https://shopee.ph/dropcultureph?originalCategoryId=11022102#product_list"],
          // Add more products as needed
        ];

        foreach ($products as $product) {
          echo '<div class="product">';
          echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
          echo '<h3>' . $product['name'] . '</h3>';
          echo '<a class="btn" href="' . $product['link'] . '" target="_blank">View on Shopee</a>';
          echo '</div>';
        }
      ?>
    </section>

    <section class="about">
      <h3>About DropCulturePh</h3>
      <p>At DropCulturePh, we bring culture to life through handcrafted fashion — wearable art that tells a story.</p>
    </section>
  </main>

  <footer class="footer">
    <p>© <?php echo date('Y'); ?> DropCulturePh. All rights reserved.</p>
  </footer>
</body>
</html>
