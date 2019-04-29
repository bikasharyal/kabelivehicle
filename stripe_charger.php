<?php
require_once('includes/payment_config.php');

$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];
$vehicle_id = $_POST['vehicle_id'];
$rate = $_POST['rate'];
$customer = \Stripe\Customer::create([
    'email' => $email,
    'source'  => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => $rate,
    'currency' => 'usd',
]);

echo "<h1>Successfully charged!</h1>";

$chargeID = $charge->id;
$amount = ($charge->amount)/100;
$status = $charge->status;
$bill_url = $charge->receipt_url;

echo "Transaction Id: {$chargeID}</br>";
echo "Vehicle Id: {$vehicle_id}</br>";
echo "Transaction Amount: $ {$amount}</br>";
echo "Transaction Status: {$status}</br>";
echo "Recipt url: <a href='{$bill_url}'>Click here for receipt</a></br></br>";
//var_dump($charge);
echo "Thank you for doing transaction with us!";


$charge_array = $charge->__toArray(true);

//echo "<pre>";
//print_r($charge_array);
//echo "<pre>";
?>