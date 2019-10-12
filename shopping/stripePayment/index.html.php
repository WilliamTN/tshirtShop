<!DOCTYPE html>
<header>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>TNW Designs - checkout</title>
<html lang="en" class="no-js">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/social-share-kit.css" type="text/css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
<title>TNW Designs - checkout </title>
</head>
<body>
<center>
<h1>TNW Designs - Checkout </h1>
<br>
<br>
<p>Pay with card below <br>

<br>
<?php $p=7000; ?>

<form action="/charge.php" method="POST">
  <script

    var num="300";

    var str_num = "<?php echo $p ?>";

    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_sbumBxOiqEEFsSE7Sk8dcTNJ"
    data-amount=300
    data-name="TMTDESIGNS"
    data-description="Logo & Youtube Banner"
    data-image=""
    data-locale="auto"
    data-zip-code="false"
    data-currency="usd">
  </script>
</form>
<br>
<center> <h3>  <p><font face="romantimes" color="Gray">Copyright 2018 - TNWDesigns</font></p>

<br>
<!-- Social Share Kit CSS -->
<div class="ssk-group">
    <a href="https://www.facebook.com/william.tchounwhi" class="ssk ssk-facebook"></a>
    <a href="https://twitter.com/williamtn30" class="ssk ssk-twitter"></a>

   
    
    <a href="https://www.youtube.com/channel/UCcC3wIift2STlCX8w2i_i3g" class="ssk ssk-youtube"></a>
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


</body>
</html>
