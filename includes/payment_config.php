<?php
require_once('./lib/stripe/vendor/autoload.php');

$stripe = [
    "secret_key"      => "sk_test_RykfhaPgjlcRrWjNHYEhYYX50067w7i2an",
    "publishable_key" => "pk_test_kunkHI3U8rUxNBNqvG9cOiiL002UhOeW4g",
];
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>