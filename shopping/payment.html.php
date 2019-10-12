<?php
@session_start();

if(!isset($pageTitle))
{
header('Location: /BookStore/bookstore/shopping/checkout.html.php');
}

/*
	Author: TN WILLIAM
	Date: 21 August 2019
	Description: Payment with Stripe API
	Special notes:
*/

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
      <title><?php htmlout($pageTitle); ?></title>
      <link rel="stylesheet" type="text/css" href="../css/style.css" />
   </head>
   <body>
   <center>
   <h1> US BOOKSTORE TNW- CHECKOUT </h1>

   <h2> PAY WITH CARD BELOW  </h2>
   
   <br>


   <form action="/charge.php" method="POST">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key=""
        data-amount="1000"
        data-name="BookOrder"
        data-description="Purchase of Books on US BOOKSTORE"
        data-image=""
        data-locale="auto"
        data-zip-code="false"
        data-currency="usd">

        </script>

        </form>

        <br>

        <center> <h3> <p><font face="romantimes" color="Gray"> Copyright 2019 - USBOOKS-TNW </font></p>


        <!-- SOCIAL SHARE KIT CSS -->

