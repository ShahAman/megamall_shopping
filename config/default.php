<?php 

session_start();

/*
if( basename($_SERVER['PHP_SELF']) != "index.php" )
{
	# Checking Whether User is in Session or Not
	if(empty($_SESSION['SSA_USERNAME']))
		header("Location: index");
	
	
	}
} */
# Logout
	if(@$_REQUEST['exit'] == "yes")
	{
		session_destroy();
		header("Location: index");
	}
# My Application's Timezone

date_default_timezone_set('Asia/Dhaka');
define("DATA_SHIPPING_CHARGE", "120");
define("DATA_CURRENCY_SYMBOL", "৳");
define("URL_PRODUCT_IMAGE", "admin/gallery/products/");


?>