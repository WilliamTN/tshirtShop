<?php
include_once '../includes/helpers.inc.php';
@session_start();
if(!isset($_SESSION['loggedin']))
{
	header('Location: /tshirtShop/myaccount/');
	exit();
}

if(!isset($pageTitle))
{
header('Location: /tshirtShop/myaccount/');
}

/*
	Author: TCHOUNWHI N.W from template by Ahmed
	Date: 5 January 2015
	Description: Display the my account home page
	Special notes:
*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title><?php htmlout($pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
<div id="wrap">

       <?php include_once '../includes/header.inc.php'; ?>

       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="../images/bullet1.gif" alt="" title="" /></span>My account</div>

		<div class="feat_prod_box_details">
			<a href="?orderhistory">Order History</a><br/><br/>
		    <a href="?updateprofile">Update Profile / Change Password</a>
		</div>

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
</html>