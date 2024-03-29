<?php
$host = 'localhost';     // Replace with your host
$db   = 'wishlist_db';   // Replace with your database name
$user = 'username';      // Replace with your database username
$pass = 'password';      // Replace with your database password

// Create a PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle database connection error
    die('Database connection failed: ' . $e->getMessage());
}



// Display wishlist items
if (count($wishlist_items) > 0) {
    foreach ($wishlist_items as $item) {
        $property_id = $item['property_id'];
        // Fetch property details based on $property_id and display them
        // You can implement this part based on your database structure and desired output format
        echo "Property ID: $property_id<br>";
    }
} else {
    echo "No items found in the wishlist.";
}
?>
