
<!DOCTYPE html>
<header>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>TNW Designs - payment completed</title>
<html lang="en" class="no-js">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/social-share-kit.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
<title>TNW Designs - Payment Completed </title>
</head>
<body>
<center>
<h1>TNW Designs - Your Payment Completed, Thank You</h1>
<br>
<br>

<?php

//let's say each article costs 15.00 bucks

try {

	require_once('Stripe/lib/Stripe.php');
	Stripe::setApiKey("pk_test_sbumBxOiqEEFsSE7Sk8dcTNJ");

	$charge = Stripe_Charge::create(array(
  "amount" => 700,
  "currency" => "usd",
  "card" => $_POST['stripeToken'],
  "description" => "Logo and youtube background for Jakeplayshd"
));
	//send the file, this line will be reached if no error was thrown above
	echo "<h1>The project will be completed within 48 hours.</h1>";


  //you can send the file to this email:
  echo $_POST['stripeEmail'];
}

catch(Stripe_CardError $e) {

}

//catch the errors in any way you like

 catch (Stripe_InvalidRequestError $e) {
  // Invalid parameters were supplied to Stripe's API

} catch (Stripe_AuthenticationError $e) {
  // Authentication with Stripe's API failed
  // (maybe you changed API keys recently)

} catch (Stripe_ApiConnectionError $e) {
  // Network communication with Stripe failed
} catch (Stripe_Error $e) {

  // Display a very generic error to the user, and maybe send
  // yourself an email
} catch (Exception $e) {

  // Something else happened, completely unrelated to Stripe
}
?>
</center>
<!-- Social Share Kit CSS -->
<div class="ssk-group">
    <a href="https://www.facebook.com/tmtdesigns" class="ssk ssk-facebook"></a>
    <a href="https://twitter.com/TheTom_T" class="ssk ssk-twitter"></a>
    <a href="https://plus.google.com/u/2/108938748002271291626?hl=en-GB" class="ssk ssk-google-plus"></a>
    <a href="https://www.youtube.com/channel/UCIV2YgdHBeTaBMudWnETpjA" class="ssk ssk-youtube"></a>
    <link href='http://www.fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80137274-1', 'auto');
  ga('send', 'pageview');

</script>
