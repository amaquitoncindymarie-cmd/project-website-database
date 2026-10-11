<?php
// Database Connection Settings
$host = "localhost";
$dbname = "shoe_store";
$username = "root";
$password = "";

// Connect to database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "✅ Connected successfully!";
} catch(PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}
?>
