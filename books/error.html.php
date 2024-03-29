<?php
include_once '../includes/helpers.inc.php';
if(!isset($pageTitle))
{
header('Location: /assignment/');
}
if(!isset($error))
{
header('Location: /assignment/books/');
exit();
}

/*
	Author: TNWilliam from template by Faisal Bin Ghimlas
	Date: 27-August-2019
	Description: Error page when the user tries to access a Tshirt that does not exist
	Special notes: The most common situation will be when the user tries to edit the product code directly in the URL of the page
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php htmlout($pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />

	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
</head>
<body>
<div id="wrap">

      <?php include_once '../includes/header.inc.php'; ?>


       <div class="center_content">
       	<div class="left_content">

       <div class="title"><span class="title_icon"><img src="../images/bullet1.gif" alt="" title="" /></span>Error</div>
		<p><?php htmlout($error); ?></p>

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