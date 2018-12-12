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
                Edit Category
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Put your Category New Information and Update it!
                        </header>
						
                        <div class="panel-body">
						
						<?php
							if(isset($_POST['update_cat']))
							{
								$updateCategory = $control->update_category(@$_POST['cat_name'], @$_POST['cat_status'], @$_POST['cat_serial'], @$_REQUEST['edit_cat']);
								
								if($updateCategory['status'] == true)
								{
									echo '<meta http-equiv="refresh" content="0; URL=list-category?s=y" />';
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
										<p>The Sub-category is not updated successfully! Please try correctly!</p>
									</div>
									';
								}
							}

							$categoryData = $control->get_data("category", "cat_id", @$_REQUEST['edit_cat']);
						?>
							
						
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Category Name (required)</label>
                                        <div class="col-lg-10">
                                            <input value="<?php echo @$categoryData['data'][0]['cat_name']; ?>" placeholder="Enter Category Name" class="form-control " id="cemail" type="text" name="cat_name" required />
                                        </div>
                                    </div>
									
									<div class="form-group ">
										<label for="cname" class="control-label col-lg-2">Category Status (required)</label>
                                        <div class="col-lg-10">
                                            <select name="cat_status" class="form-control m-bot15">
												<option <?php if($categoryData['data'][0]['cat_status'] == "Active") echo "selected"; ?> value="Active">Active</option>
												<option <?php if($categoryData['data'][0]['cat_status'] == "Inactive") echo "selected"; ?> value="Inactive">Inactive</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Category Serial (required)</label>
                                        <div class="col-lg-10">
                                            <input value="<?php echo @$categoryData['data'][0]['cat_serial']; ?>" placeholder="Enter Category Serial" class="form-control " id="cemail" type="number" name="cat_serial" required />
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="update_cat" class="btn btn-primary" type="submit">Update</button>
                                            <!--<button class="btn btn-default" type="button">Cancel</button>-->
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

<?php include("view/footer.php"); ?>