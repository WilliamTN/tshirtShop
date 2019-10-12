<?php

	include_once 'cart.inc.php';

	/*
		Author: TCHOUNWHI William from Template by Noha Salem
		Date: 09 September 2019
		Description: Setup the contents of the cart so that they can be rendered
		Special notes:
	*/

	if(isset($_SESSION['cart']))
	{
		$max=count($_SESSION['cart']);
		$totalcartvalue=0;
		$totalqty=0;

		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['product_id'];
			$q=$_SESSION['cart'][$i]['qty'];
			$amount=get_price($pid,$link)*$q;
			$totalqty=$totalqty+$q;
			$totalcartvalue=$totalcartvalue+$amount;
		}
	}
	else
	{

		$amount=0;
		$totalqty=0;
		$totalcartvalue=0;
	}
?>

<div class="cart">
	<div class="title"><span class="title_icon"><img src="/tshirtShop/images/cart.gif" alt="" title="" /></span>My cart</div>
	<div class="home_cart_content">
		<?php echo $totalqty;?> x items | <span class="red">TOTAL: <?php echo $totalcartvalue;?>$</span>
	</div>
	<a href="/tshirtShop/shopping/index.php" class="view_cart">view cart</a>
</div>