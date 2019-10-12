<?php include_once 'includes/helpers.inc.php';

/*
	Author: TN WIlliam from template by Ahmed Alshamisi
	Date: 27 August 2019
	Description: Display the home page for online Tshirts Shop
	Special notes:
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php htmlout($pageTitle); ?></title>
<!-- Inserting FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="images/logo2.ico" />
<!-- Inserting syslesheet -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
<div id="wrap">

     <?php include_once 'includes/header.inc.php'; ?>

       <div class="center_content">
       	<div class="left_content">

            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Featured T-SHIRTS</div>

			<?php if (isset($items)): ?>
        	<?php foreach ($items as $item): ?>

        	<div class="feat_prod_box">

            	<div class="prod_img"><a href="books/details.html.php?itemCode=<?php echo $item['product_id'];?>"><img src="images/product_images/<?php echo $item['thumbnail'];?>" alt="" title="" border="0" width="66" height="100"/></a></div>

                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><strong><?php echo $item['productName'];?></strong></div>
                   <!-- <div class="prod_title"><strong><?php // echo $product['category_id'];?></strong></div>  -->
                    <div class="prod_title"><strong><?php echo $item['product_id'];?></strong></div>
                    <p class="details"><?php echo $item['description'];?></p>
                    <a href="/tshirtShop/books/details.html.php?itemCode=<?php echo $item['product_id'];?>" class="more">- more details -</a>
                    <div class="clear"></div>
                    </div>

                    <div class="box_bottom"></div>
                </div>
            <div class="clear"></div>
            </div>
			<?php endforeach; ?>

			<?php endif; ?>




        </div><!--end of left content-->
         <div class="right_content">

		                 <?php include_once 'includes/cartdisplay.inc.php'; ?>

      <div class="right_box">
				<?php include_once 'includes/categories.inc.php'; ?>
		</div><!--end of right content-->

       <div class="clear"></div>
       
       </div><!--end of center content-->


      <?php include_once 'includes/footer.inc.php'; ?>


</div>

</body>
</html>