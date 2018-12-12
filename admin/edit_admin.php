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
        Edit Admin Information
    </h3>
</div>
<!-- page heading end-->

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Put your New Information and Update it!
                </header>
				
                <div class="panel-body">
                <?php
                   if (isset($_POST['update_admin']))
                   {
                        $updateAdmin = $control->update_admin(@$_POST['admin_name'], @$_POST['admin_user'], @$_POST['admin_status'], @$_POST['admin_type'], @$_REQUEST['editadmin']);
                        if ($updateAdmin['status'] == true) 
                        {
                            echo '<meta http-equiv="refresh" content="0; URL=list-admin?s=y" />';
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
                                <p>The Admin Data is not Updated! Please check or contact the admin!</p>
                            </div>
                            ';
                        }
                    } 
                ?>

				          <!--Select Data From Admin Table-->
					<?php
						$adminData = $control->get_data("admin", "id", @$_REQUEST['editadmin']);
					?>
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Admin Name (required)</label>
                                <div class="col-lg-10">
                                    <input value="<?php echo @$adminData['data'][0]['admin_name'];?>" placeholder="Enter A Correct Name" class=" form-control" id="cname" name="admin_name" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Email Address(required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" value="<?php echo @$adminData['data'][0]['admin_user'];?>" placeholder=" Enter Admin Email Address" class="form-control " id="cemail" type="email" name="admin_user" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Admin Status (required)</label>
                                <div class="col-lg-10">
                                    <select name="admin_status" class="form-control m-bot15">
                                        <option <?php if($adminData['data'][0]['admin_status'] == "Active") echo "selected"; ?> value="Active">Active</option>
                                        <option <?php if($adminData['data'][0]['admin_status'] == "Inactive") echo "selected"; ?> value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Admin Status (required)</label>
                                <div class="col-lg-10">
                                    <select name="admin_type" class="form-control m-bot15">
                                        <option <?php if($adminData['data'][0]['admin_type'] == "Superadmin") echo "selected"; ?> value="Superadmin">Superadmin</option>
                                        <option <?php if($adminData['data'][0]['admin_type'] == "Operator") echo "selected"; ?> value="Operator">Operator</option>
                                        <option <?php if($adminData['data'][0]['admin_type'] == "Sales") echo "selected"; ?> value="Sales">Sales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button name="update_admin" class="btn btn-primary" type="submit">Update</button>
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