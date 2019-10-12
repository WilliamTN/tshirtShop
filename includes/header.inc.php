<?php
@session_start();

/*
	Author: TCHOUNWHI William from Template by Ahmed
	Date: 04 September 2019
	Description: Page header
	Special notes:
*/
?>
<div class="header">
	<div class="logo"><a href="/tshirtShop/index.php.php"><img src="/tshirtShop/images/logo2.png" alt="" title="" border="0" /></a></div>
	<div id="menu">
	   <ul>
	    <?php
	   if(isset($_SESSION['adminloggedin'])&& ($_SESSION['name']!= NULL)) { ?>

		<li><a href="/tshirtShop/admin/">Home</a></li>
		<li><a href="/tshirtShop/admin/logout.php">Logout</a></li>
	   </ul>
	    <p> <?php htmlout($_SESSION['name']) ?> </p>
	   <?php
	   }
	   else
	   {
	   ?>
	   <!-- A <strong> Tag was inserted in the first line to change the general features of the page -->

	  

		  <li><a href="/tshirtShop/index.php.php"><strong>Home</strong></a></li>
		  <li><a href="/tshirtShop/about/index.php"><strong>About Us</strong></a></li>
		  <li><a href="/tshirtShop/books/index.php"><strong>T-SHIRTS</strong></a></li>
		  <li><a href="/tshirtShop/myaccount/index.php"><strong>My Account</strong></a></li>
		  <li><a href="/tshirtShop/contact/index.php"><strong>Contact</strong></a></li>
		  <?php

		  // Displaying either Logout or Register according to SESSION variable


		  if(isset($_SESSION['loggedin'])&& ($_SESSION['name']!= NULL)) { ?>
		  <li><a href="/tshirtShop/myaccount/logout.php"><strong>LogOut</strong></a></li>
		  </ul>

		  </div>

		  <p> <?php htmlout($_SESSION['name']) ?> </p>
		  <?php } else{?>
		  <li><a href="/tshirtShop/register/index.php"><strong>Register</strong></a></li>
		  </ul>
		  <?php }
		  }?>
	</div>
 </div>