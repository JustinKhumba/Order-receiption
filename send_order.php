 <?php
// Replace with your own WhatsApp number
$whatsappNumber = 'whatsapp:+919378011408';

// Get the form data and format the message
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$product = $_POST['product'];
$order = $_POST['order'];
$message = "New order received:\nName: $name\nEmail: $email\nAddress: $address\nProduct: $product\nOrder: $order";

// Encode the message and prepare the URL
$encodedMessage = urlencode($message);
$url = "https://api.whatsapp.com/send?phone=$whatsappNumber&text=$encodedMessage";

// Redirect the user to the WhatsApp web interface
header("Location: $url");
exit();
?>
