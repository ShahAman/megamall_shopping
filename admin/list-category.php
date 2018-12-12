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
                View Category
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						List of Categories
						<span class="tools pull-right">
						<a href="javascript:;" class="fa fa-chevron-down"></a>
						<a href="javascript:;" class="fa fa-times"></a>
					 </span>
					</header>
					<div class="panel-body">
						
						<?php 
						
							if(isset($_REQUEST['delcat']))
							{
								$deleteResult = $control->delete_data("category", "cat_id", @$_REQUEST['delcat']);
								if ($deleteResult['status'] == true)
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
											<p>The Category is deleted successfully!</p>
										</div>
									';
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
										<p>You Cannot delete category! Please check or contact the admin!</p>
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
							<table class="display table table-bordered table-striped" id="dynamic-table">
								<thead>
									<tr>
										<th>No</th>
										<th>Category Name</th>
										<th>Status</th>
										<th>Serial</th>
										<th class="hidden-phone">Edit</th>
										<th class="hidden-phone">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$categoryList = $control->get_data("category");
										$n = 1;
										
										foreach($categoryList['data'] AS $categoryData)
										{
											echo '
											<tr class="gradeA">
												<td>' . $n . '</td>
												<td>' . $categoryData['cat_name'] . '</td>
												<td>' . $categoryData['cat_status'] . '</td>
												<td>' . $categoryData['cat_serial'] . '</td>
												<td><a href="edit_category?edit_cat='.$categoryData['cat_id'].'"><span class="center hidden-phone label label-primary">Edit</span></a>
												</td>
												<td><a href="?delcat='.$categoryData['cat_id'].'"><span class="label label-danger">Delete</span></a></td>
											</tr>
											';
											$n++;
										}
									?>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Category Name</th>
										<th>Status</th>
										<th>Serial</th>
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