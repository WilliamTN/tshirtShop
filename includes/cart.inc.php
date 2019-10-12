<?php error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);?>

<?php
	/*
		Author: TCHOUNWHI William from template by Yousef
		Date: 04 September 2019 
		Description: This page includes the code to setup the variatbles that will eventually render the shopping cart on cartdisplay.inc.php
		Special notes:
	*/

	$link=mysqli_connect("localhost","root","rootpassword","tshirtShop") or die("Unable to make a connection with the store database! sorry :(");
	mysqli_select_db($link,"tshirtShop") or die("Unable to make a connection with the store database! sorry :(");
	@session_start();

	function get_product_name($item_code,$link){
		$result=mysqli_query($link,"select name from product where product_id='$item_code'") or die("select name from product where product_id=$itemCode"."<br/><br/>".mysqli_error($link));
		$row=mysqli_fetch_array($result);
		return $row['name'];
	}
	function get_price($item_code,$link){
		$result=mysqli_query($link,"select price from product where product_id='$item_code'") or die("select price from product where product_id=$item_code"."<br/><br/>".mysqli_error($link));
		//Also think of including discounted price
		$row=mysqli_fetch_array($result);
		return $row['price'];
	}
	function remove_product($item_code){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($item_code==$_SESSION['cart'][$i]['product_id']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}

	function get_order_total($link){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['product_id'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid,$link);
			$sum+=$price*$q;
		}
		return $sum;
	}

	function addtocart($item_code,$q){

		if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
			//if(product_exists($item_code)) return;
			$max=count($_SESSION['cart']);

			$index=-1;
			$found=false;
			//find the index where the product is
			for($i=0;$i<$max;$i++){
				$pid=$_SESSION['cart'][$i]['product_id'];
				if($pid==$item_code) {
					$index=$i;
					$found=true;
					break;
				}
			}

			// if no index found then insert at the last location
			if($found==false)
			{
				$index=$max;
			}

			if($found==true)
			{
				$_SESSION['cart'][$index]['qty']=$_SESSION['cart'][$index]['qty']+$q;
			}
			else
			{
				$_SESSION['cart'][$index]['product_id']=$item_code;
				$_SESSION['cart'][$index]['qty']=1;
			}
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['product_id']=$item_code;
			$_SESSION['cart'][0]['qty']=$q;
		}
	}
	function product_exists($item_code){
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($item_code==$_SESSION['cart'][$i]['product_id']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>