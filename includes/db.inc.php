<?php

/*
	Author: TN William Based on Template by Ahmed
	Date:27 Aug 19
	Description: Setup the database connection here
	Special notes:
*/

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=tshirtshop', 'root','rootpassword');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$error = 'A connection with the database failed.'.$e;
	include 'error.html.php';
	exit();
}
?>