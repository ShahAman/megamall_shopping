<?php 

session_start();

if( basename($_SERVER['PHP_SELF']) != "index.php" )
{
	# Checking Whether User is in Session or Not
	if(empty($_SESSION['SSA_USERNAME']))
		header("Location: index");
	
	# Logout
	if(@$_REQUEST['exit'] == "yes")
	{
		session_destroy();
		header("Location: index");
	}
}

# My Application's Timezone
date_default_timezone_set('Asia/Dhaka');

# ACCESS CONTROL

	#Sales Control
if (@$_SESSION['SSA_TYPE'] == "Sales" 
		&& 
		(
		basename($_SERVER['PHP_SELF']) == "add-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "list-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "add-category.php"
		|| basename($_SERVER['PHP_SELF']) == "list-category.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-category.php"
		|| basename($_SERVER['PHP_SELF']) == "add-subcat.php"
		|| basename($_SERVER['PHP_SELF']) == "list-subcat.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-subcat.php"
		|| basename($_SERVER['PHP_SELF']) == "add-product.php"
		|| basename($_SERVER['PHP_SELF']) == "list-product.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-product.php"
		)
	) 
{
	header("Location: dashboard");
}
	#Operator Control
elseif(@$_SESSION['SSA_TYPE'] == "Operator" 
		&& 
		(
		basename($_SERVER['PHP_SELF']) == "add-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "list-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-admin.php"
		|| basename($_SERVER['PHP_SELF']) == "list-invoice.php"
		|| basename($_SERVER['PHP_SELF']) == "add-invoice.php"
		|| basename($_SERVER['PHP_SELF']) == "list-customer.php"
		|| basename($_SERVER['PHP_SELF']) == "edit-customer.php"
		)
	) 
{
	header("Location: dashboard");
}

?>