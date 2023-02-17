<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$account_sid = 'ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$auth_token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$twilio_number = 'whatsapp:+14155238886';
$my_number = 'whatsapp:+1234567890';

$client = new Client($account_sid, $auth_token);

$product = $_POST['product'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$user_id = $_POST['user-id'];
$server_id = $_POST['server-id'];
$order_id = uniqid();

$message = "New order received!\nOrder ID: $order_id\nProduct: $product\nName: $name\nQuantity: $quantity\nUser ID: $user_id\nServer ID: $server_id";

$message = $client->messages->create($my_number, array('from' => $twilio_number, 'body' => $message));
?>

