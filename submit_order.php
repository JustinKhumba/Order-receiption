<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$productImage = $_POST["product-image"];
	$name = $_POST["name"];
	$mlId = $_POST["ml_id"];
	$serverId = $_POST["server_id"];
	$quantity = $_POST["quantity"];

	$message = "Order Details:\n";
	$message .= "Product Image: $productImage\n";
	$message .= "Name: $name\n";
	$message .= "Mobile Legends ID: $mlId\n";
	$message .= "Mobile Legends Server ID: $serverId\n";
	$message .= "Quantity: $quantity\n";

	$phone = "+919378011408";
	$url = "https://api.whatsapp.com/send?phone=$phone&text=".urlencode($message);

	header("Location: $url");
	exit();
}
?>
