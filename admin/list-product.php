<?php 
require_once("config/default.php");
require_once("control/control.php");
?>

	<?php include("view/header.php"); ?>
    <?php include("view/left-sidebar.php"); ?>
    
    <!-- main content start-->
    <div class="main-content" >

	<?php include("view/header-bar.php"); ?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                View Product
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						List of Products
						<span class="tools pull-right">
						<a href="javascript:;" class="fa fa-chevron-down"></a>
						<a href="javascript:;" class="fa fa-times"></a>
					 </span>
					</header>
					<div class="panel-body">
						
						<?php 
							if(isset($_REQUEST['del_prod']))
							{
								$deleteProduct = $control->delete_product($_REQUEST['del_prod']);
								if ($deleteProduct['status'] == true)
								{
									echo '
										<div class="alert alert-success alert-block fade in">
											<button type="button" class="close close-sm" data-dismiss="alert">
												<i class="fa fa-times"></i>
											</button>
											<h4>
												<i class="icon-ok-sign"></i>
												Success!
											</h4>
											<p>Product deleted successfully!</p>
										</div>';
								}
								else
								{
									echo '
									<div class="alert alert-danger alert-block fade in">
										<button type="button" class="close close-sm" data-dismiss="alert">
											<i class="fa fa-times"></i>
										</button>
										<h4>
											<i class="icon-ok-sign"></i>
											Failed!
										</h4>
										<p>Product is not deleted! Please check or contact the admin!</p>
									</div>';
								}	
							}
							
						?>
						<!--Update Success Message-->
						<?php 
							if(isset($_REQUEST["s"]) && $_REQUEST["s"] == "y")
								{
									echo '
									<div class="alert alert-success alert-block fade in">
										<button type="button" class="close close-sm" data-dismiss="alert">
											<i class="fa fa-times"></i>
										</button>
										<h4>
											<i class="icon-ok-sign"></i>
											Success!
										</h4>
										<p>The sub-category is successfully updated!</p>
									</div>
									';
								}
						?>
						<div class="adv-table">
							<table class="table-responsive table-bordered table-striped" id="dynamic-table">
								<thead>
									<tr>
										<th>No</th>
										<th>Product Name</th>
										<th>Category</th>
										<th>Subcategory</th>
										<th>Price</th>
										<th>Short Description</th>
										<th>Details</th>
										<th>Status</th>
										<th>Stock</th>
										<th>Featured</th>
										<th>Latest Product</th>
										<th>Picture One</th>
										<th>Picture Two</th>
										<th>Picture Three</th>
										<th class="hidden-phone">Edit</th>
										<th class="hidden-phone">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$productList = $control->get_product();
										$n = 1;
										
										foreach(@$productList['data'] AS $productData)
										{
											echo '
											<tr class="gradeA">
												<td>' . $n . '</td>
												<td>' . $productData['prod_name'] . '</td>
												<td>' . $productData['cat_name'] . '</td>
												<td>' . $productData['subcat_name'] . '</td>
												<td>' . $productData['prod_price'] . '</td>
												<td>' . $control->text_shorten($productData['prod_short_desc'], 50). '</td>
												<td>' . $control->text_shorten($productData['prod_details'], 50). '</td>
												<td>' . $productData['prod_status'] . '</td>
												<td>' . $productData['prod_stock'] . '</td>
												<td>' . $productData['prod_is_featured'] . '</td>
												<td>' . $productData['prod_is_latest'] . '</td>
												<td><img src="gallery/products/'. $productData['prod_pic_1'] . '" height="40px" width="80px"></td>
												<td><img src="gallery/products/'. $productData['prod_pic_2'] . '" height="40px" width="80px"></td>
												<td><img src="gallery/products/'. $productData['prod_pic_3'] . '" height="40px" width="80px"></td>
												<td><a href="edit_product?edit_prod='.$productData['prod_id'].'"><span class="center hidden-phone label label-primary">Edit</span></a>
												</td>
												<td><a href="?del_prod='.$productData['prod_id'].'"><span class="label label-danger">Delete</span></a></td>
											</tr>
											';
											$n++;
										}
									?>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Product Name</th>
										<th>Category</th>
										<th>Subcategory</th>
										<th>Price</th>
										<th>Short Description</th>
										<th>Details</th>
										<th>Status</th>
										<th>Stock</th>
										<th>Featured</th>
										<th>Latest Product</th>
										<th>Picture One</th>
										<th>Picture Two</th>
										<th>Picture Three</th>
										<th class="hidden-phone">Edit</th>
										<th class="hidden-phone">Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
        </div>
        <!--body wrapper end-->

<?php include("view/footer.php"); ?>