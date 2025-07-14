<?php

// Simulate inserting the product into the database (you would have your logic here)
// In a real-world scenario, you would use a database connection and an INSERT query

$product = array(
    'name' => 'Example Product',
    'price' => 20.00,
);

// Add the product to the session cart (simulating a cart)
$_SESSION['cart'][] = $product;

// Insert the product into the database (simulating database insertion)
insertProductIntoDatabase($product);

// Display the updated cart content
echo renderCart();
exit;

// Function to render the cart HTML
function renderCart() {
    $output = "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        $output .= "<li>{$item['name']} - \${$item['price']}</li>";
    }
    $output .= "</ul>";
    return $output;
}

// Function to simulate inserting a product into the database
function insertProductIntoDatabase($product) {
    // In a real-world scenario, you would use a database connection and perform an INSERT query
    // For demonstration purposes, let's just display the inserted product information
    echo "Product inserted into database: {$product['name']} - \${$product['price']}<br>";
}
?>


