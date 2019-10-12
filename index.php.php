<?php
include 'includes/db.inc.php';
include 'includes/magicquotes.inc.php';

/*
	Author: Tchounwhi William based on template by Ahmed Alshamisi
	Date: 27 August 2019
	Description: Display the home page for Tshirt SHOP 2
	Special notes:
*/

$pageTitle = 'Tshirt SHOP 2';
try
{
	$sql = "SELECT * FROM product WHERE display != 0";
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching featured products from product table!';
	$pageTitle = 'Error';
	include 'books/error.html.php';
	exit();
}
while ($row = $result->fetch())
{
$items[] = array('product_id' => $row['product_id'],
'productName' => $row['name'],
'description' => $row['description'],
//'category_id' => $row['category_id'],
//'qtyOnHand' => $row['qtyOnHand'],
'unitPrice' => $row['price'],
'discountedPrice' => $row['discounted_price'],
'image' => $row['image'],
'image_2' => $row['image_2'],
'thumbnail' => $row['thumbnail'],
//'featured' => $row['featured']);
'display' => $row['display']);
}

include 'index.html.php.php';
?>