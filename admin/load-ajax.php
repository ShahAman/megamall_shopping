<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<?php
 	$subCategoryList = $control->get_data("subcategory", "cat_id", $_REQUEST['ajax_cat_id']);

 	# For Add Product 
	foreach($subCategoryList['data'] AS $subCategoryData)
    {
        echo "<option value='" .$subCategoryData['subcat_id']. "'>" . $subCategoryData['subcat_name'] . "</option>";
    }

   /* #For Update Product
   foreach($subCategoryList['data'] AS $subCategoryData)
    {
        echo "<option";
       echo "value='" .$subCategoryData['subcat_id']. "'>" . $subCategoryData['subcat_name'] . "</option>";
    }
    */
?>


