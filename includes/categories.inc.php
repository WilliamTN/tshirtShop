<?php
include_once 'db.inc.php';
include_once 'magicquotes.inc.php';

/*
	Author: TCHOUNWHI WIlliam from template by Noha Salem
	Date: 27 August 19
	Description: Setup the data for the categories
	Special notes:
*/



try
{
	$result = $pdo->query('SELECT * FROM category');
}
catch (PDOException $e)
{
	$error = 'Error fetching categories from the database!';
	include '../books/error.html.php';
}

/*

foreach ($result as $row)
{
	$categories[] = $row[0];
}

*/

while ($row = $result->fetch())
{
$categories[] = array('category_id' => $row['category_id'],
'name' => $row['name'],
'department_id' => $row['department_id'],

'description' => $row['description']);
}

?>

<div class="title"><span class="title_icon"><img src="/tshirtShop/images/bullet5.gif" alt="" title="" /></span>Categories</div>
<ul class="list">
<?php foreach ($categories as $categoryItem) { ?>
<li><a href="/tshirtShop/books/index.php?category=<?php echo $categoryItem['category_id']; ?>"><?php echo $categoryItem['category_id'];echo"  --"; echo $categoryItem['name'];?></a></li>
 <?php } ?>

</ul>
</div>


<!--<li><a href="/tshirtShop/books/index.php"><?php htmlout($category); ?></a></li> -->