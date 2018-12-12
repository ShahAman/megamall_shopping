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
                Edit Sub-Category
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Put your Sub-Category Information and Update it!
                        </header>
                        <div class="panel-body">
						<?php 
							if(isset($_POST['update_subcat']))
							{
								$updateSubcat = $control->update_subcat($_REQUEST['editsubcat'], $_POST['cat_id'], $_POST['subcat_name'], $_POST['subcat_serial'], $_POST['subcat_status']);
								
								if($updateSubcat['status'] == true)
								{
									echo '<meta http-equiv="refresh" content="0; URL=list-subcat?s=y" />';
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
							
							$categoryList = $control->get_data("category");
							$subcatData = $control->get_data("subcategory", "subcat_id", $_REQUEST['editsubcat']);
						?>
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Choose a Category (required)</label>
                                        <div class="col-lg-10">
                                            <select name="cat_id" class="form-control m-bot15">
												<?php 
													foreach($categoryList['data'] AS $categoryData)
													{
														echo "<option ";
														if($categoryData['cat_id'] == $subcatData['data'][0]['cat_id'])
															echo "selected";
														echo " value='" .$categoryData['cat_id']. "'>" . $categoryData['cat_name'] . "</option>";
													}
												?>
											</select>
                                        </div>
                                    </div>
									
									<div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Sub-Category Name (required)</label>
                                        <div class="col-lg-10">
                                            <input value="<?php echo @$subcatData['data'][0]['subcat_name']; ?>" placeholder="A correct Sub-Category Name" class=" form-control" id="cname" name="subcat_name" minlength="2" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Sub-Category Serial (required)</label>
                                        <div class="col-lg-10">
                                            <input value="<?php echo @$subcatData['data'][0]['subcat_serial']; ?>" placeholder="Must be a number" class="form-control " id="cemail" type="number" name="subcat_serial" required />
                                        </div>
                                    </div>
									
									<div class="form-group ">
										<label for="cname" class="control-label col-lg-2">Status (required)</label>
                                        <div class="col-lg-10">
                                            <select name="subcat_status" class="form-control m-bot15">
												<option <?php if($subcatData['data'][0]['subcat_status'] == "Active") echo "selected"; ?> value="Active">Active</option>
												<option <?php if($subcatData['data'][0]['subcat_status'] == "Inactive") echo "selected"; ?> value="Inactive">Inactive</option>
											</select>
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="update_subcat" class="btn btn-primary" type="submit">Update</button>
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