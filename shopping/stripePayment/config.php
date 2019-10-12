<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_2lf14QNxc2hezDEk5DKDAqXj",
  "publishable_key" => "pk_test_sbumBxOiqEEFsSE7Sk8dcTNJ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
