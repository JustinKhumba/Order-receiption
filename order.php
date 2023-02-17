<?php

// Replace with your own phone number
$phone_number = "+919378011408";

// Get the order details from the form
$product_image = $_POST["product-image"];
$name = $_POST["name"];
$ml_id = $_POST["ml-id"];
$server_id = $_POST["server-id"];
$quantity = $_POST["quantity"];

// Construct the message
$message = "Order Details:\n";
$message .= "Product Image: " . $product_image . "\n";
$message .= "Name: " . $name . "\n";
$message .= "Mobile Legends ID: " . $ml_id . "\n";
$message .= "Mobile Legends Server ID: " . $server_id . "\n";
$message .= "Quantity: " . $quantity;

// Send the message using WhatsApp
$url = "https://api.whatsapp.com/send?phone=" . $phone_number . "&text=" . urlencode($message);
header("Location: " . $url);
exit();

?>

