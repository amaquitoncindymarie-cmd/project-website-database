<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Shoe Store</h1>
    <p>Welcome to my website!</p>

    <h2>Product List</h2>
    <?php
    $result = $conn->query("SELECT * FROM products");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='item'>";
            echo "<strong>" . $row['name'] . "</strong><br>";
            echo "Price: ₱" . number_format($row['price'], 2);
            echo "</div>";
        }
    } else {
        echo "<p>No products available.</p>";
    }
    ?>
</body>
</html>
