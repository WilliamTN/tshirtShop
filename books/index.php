<?php
@session_start();

/*
	Author: TCHOUNWHI William from template by Faisal Bin Ghimlas
	Date: 02-September-2019
	Description: Home page displays just the specials
	Special notes:
*/


include '../includes/db.inc.php';
include '../includes/magicquotes.inc.php';
include '../includes/cart.inc.php';
$pageTitle = 'T-SHIRTS';
if (isset($_GET['addtocart']) && isset($_GET['itemcode']))
{
	$itemcode=$_GET['itemcode'];
	addtocart($itemcode,1);
	header('Location: /tshirtShop/shopping/index.php');
}
else if (isset($_GET['category']))
{
	try
	{
		
		
		//TO CHECK URGENTLY, ONLY SELCTED CATEGORY SHOULD BE GOTTEN
		
		$selectedCategory = $_GET['category'];


		/*
		SPECIAL MySQL Query to combine multiple relation tables and extract data,
		It is very important to observe how this query is structured.  
		JOIN is used to combine the tables and SELECT to extract data. WHERE specifies the joining criteria
		*/


		$sql = "SELECT product_category.product_id as ProductID, product_category.category_id as categoryID, category.name as categoryName, product.name as productName, product.description as productDescription, product.thumbnail FROM product_category
		JOIN product ON product_category.product_id = product.product_id
		JOIN category ON product_category.category_id = category.category_id
		WHERE category.category_id=$selectedCategory";


		$result = $pdo->query($sql);
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching items from item table2!';
		$pageTitle = 'Error';
		include 'error.html.php';
		exit();
	}
}
else{
	try
	{
		$sql = 'SELECT product_id as ProductID, product.name as productName, product.description as productDescription, product.thumbnail FROM product';
		$result = $pdo->query($sql);
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching data from item table!';
		$pageTitle = 'Error';
		include 'error.html.php';
		exit();
	}
}
$count=0;
while ($row = $result->fetch())
{
$items[] = array('product_id' => $row['ProductID'],

//'category_id' => $row['category_id'],

'productName' => $row['productName'],

'description' => $row['productDescription'],
//'category_id' => $row['category_id'],
//'qtyOnHand' => $row['qtyOnHand'],
'unitPrice' => $row['price'],
'discountedPrice' => $row['discounted_price'],
'image' => $row['image'],
'image_2' => $row['image_2'],
'thumbnail' => $row['thumbnail'],
//'featured' => $row['featured']);
'display' => $row['display']);

$count++;
}


if($count>=1)
	{
	include 'books.html.php';
	exit();
	}
else{
	$error = 'No Books Available to display!';
	$pageTitle = 'Error';
	include 'error.html.php';
	exit();
}
?>