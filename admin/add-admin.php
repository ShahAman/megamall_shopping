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
                Add Admin
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Put your Admin Information and Save it!
                        </header>
						
                        <div class="panel-body">
						
							<?php 
							
							if(isset($_POST['save_admin']))
							{
								$adminSaveResult = $control->save_admin($_POST['admin_name'], $_POST['admin_user'], $_POST['admin_pass'], $_POST['admin_type']);
								
								if($adminSaveResult['status'] == true)
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
										<p>The admin is saved successfully!</p>
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
										<p>The admin is not saved! Please try correctly!</p>
									</div>
									';
								}
							}
							
							?>
							
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2">Admin Name (required)</label>
                                        <div class="col-lg-10">
                                            <input placeholder="Enter admin name" class=" form-control" id="cname" name="admin_name" minlength="2" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Email Address(required)</label>
                                        <div class="col-lg-10">
                                            <input autocomplete="off" placeholder="Enter admin email address" class="form-control " id="cemail" type="email" name="admin_user" required />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Password (required)</label>
                                        <div class="col-lg-10">
                                            <input autocomplete="off" placeholder="Enter admin password" class="form-control " id="cemail" type="password" name="admin_pass" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2">Admin type (required)</label>
                                        <div class="col-lg-10">
                                            <input autocomplete="off" placeholder="Enter admin type" class="form-control " id="cemail" type="text" name="admin_type" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="save_admin" class="btn btn-primary" type="submit">Save</button>
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