<?php
include_once '../includes/helpers.inc.php';
include '../includes/db.inc.php';
include '../includes/magicquotes.inc.php';
include_once '../includes/cart.inc.php';

/*
	Author: TCHOUNWHI William form template by Noha Salem
	Date: 03-September-2019
	Description: Display the details of a particular T-Shirt
	Special notes:
*/

if (!isset($_GET['itemCode']))
{
$error = 'Could not find requested item!';
$pageTitle = 'Error';
include 'error.html.php';
exit();
}
$itemCode = $_GET['itemCode'];
try
{
	$sql = "SELECT product_id , product.name as productName, product.description as productDescription, price, discounted_price, image, image_2, thumbnail, display FROM product WHERE product_id = '$itemCode'";
    $result = $pdo->query($sql);

    $pageTitle = "TSHIRT Specific Details";
    

}
catch (PDOException $e)
{
	$error = 'Error fetching item from item table!';
	$pageTitle = 'Error';
	include 'error.html.php';
	exit();
}
while ($row = $result->fetch())
{

/*
$items[] = array('itemCode' => $row['itemCode'],
'itemName' => $row['itemName'],
'description' => $row['description'],
'category' => $row['category'],
'qtyOnHand' => $row['qtyOnHand'],
'unitPrice' => $row['unitPrice'],
'photo1' => $row['photo1'],
'photo2' => $row['photo2'],
'photo3' => $row['photo3'],
'thumbNail' => $row['thumbNail'],
'featured' => $row['featured']);
$pageTitle = $row['itemName'];

*/

$items[] = array('product_id' => $row['product_id'],
'productName' => $row['productName'],
'description' => $row['productDescription'],
'unitPrice' => $row['price'],
'discountedPrice' => $row['discounted_price'],
'image' => $row['image'],
'image_2' => $row['image_2'],
'thumbnail' => $row['thumbnail'],
'display' => $row['display']);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php htmlout($pageTitle); ?></title>
<link rel="shortcut icon" type="image/x-icon" href="../images/logo2.ico" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/lightbox.js"></script>
<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />

</head>
<body>
<div id="wrap">

      <?php include_once '../includes/header.inc.php'; ?>


       <div class="center_content">
       	<div class="left_content">


			<?php if (isset($items)): ?>
        	<?php foreach ($items as $item): ?>


            <div class="title"><span class="title_icon"><img src="../images/bullet1.gif" alt="" title="" /></span><?php echo $item['productName'];?></div>

        	<div class="feat_prod_box_details">

            	<div class="prod_img"><a href="details.html.php?itemCode=<?php echo $item['product_id'];?>"><img src="../images/product_images/<?php echo $item['thumbnail'];?>" alt="" title="" border="0" width="66" height="100" /></a>
                <br /><br />

                <a href="smallimage.php?imagename=<?php echo $item['photo1'];?>" rel="lightbox[booksimages]"> <img src="../images/zoom.gif" alt="" title="" border="0" /></a>
                <?php
                	if(isset($item['image_2']) && $item['image_2']!='')
                	{
                ?>
                <a href="smallimage.php?imagename=<?php echo $item['photo2'];?>" rel="lightbox[booksimages]"></a>
                <?php
                	}
                ?>
                <?php
                	if(isset($item['photo3']) && $item['photo3']!='')
                	{
                ?>
                <a href="smallimage.php?imagename=<?php echo $item['photo3'];?>" rel="lightbox[booksimages]"></a>
                <?php
                	}
                ?>


                </div>

                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><strong>Description</strong></div>
                    <p class="details"><?php echo $item['description'];?></p>
                    <div class="price"><strong>PRICE:</strong> <span class="red">$ <?php echo $item['unitPrice'];?></span></div>
					<div class="stock"> <?php if($item['display']>=0){ ?>
					<span class="green">In Stock</span><?php } else{ ?>
					<span class="red">Not In Stock</span><?php }  ?>
					</div>
					<a href="index.php?addtocart=yes&itemcode=<?php echo $item['product_id']?>" class="more"><img src="../images/order_now.gif" alt="" title="" border="0" /></a>

                    <div class="clear"></div>
                    </div>

                    <div class="box_bottom"></div>
                </div>
            <div class="clear"></div>
            </div>

			<?php endforeach; ?>

			<?php endif; ?>



        <div class="clear"></div>
        </div><!--end of left content-->
         <div class="right_content">

		                 <?php include_once '../includes/cartdisplay.inc.php'; ?>

       <div class="right_box">
					<?php require_once '../includes/categories.inc.php'; ?>
		</div><!--end of right content-->



       <div class="clear"></div>
       </div><!--end of center content-->


      <?php include_once '../includes/footer.inc.php'; ?>


</div>

</body>
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>