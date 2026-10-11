<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoleStyle — Shoe Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>👟 SoleStyle Shoe Store</h1>
            <p>Find your perfect pair — Quality brands at great prices</p>
        </div>
    </header>

    <main class="container">
        <h2>✨ Available Shoes</h2>
        <div class="products-grid">
            <?php
            include 'db.php';
            $stmt = $conn->query("SELECT * FROM products ORDER BY brand");
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($products as $item) {
                echo "<div class='product-card'>";
                echo "<h3>{$item['brand']}</h3>";
                echo "<h4>{$item['name']}</h4>";
                echo "<p class='price'>\${$item['price']}</p>";
                echo "<p class='desc'>{$item['description']}</p>";
                echo "<p class='durability'>Durability: {$item['durability']}</p>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 SoleStyle Shoe Store. All rights reserved.</p>
    </footer>
</body>
</html>
