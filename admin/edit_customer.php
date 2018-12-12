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
        Edit Customer
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
                   if (isset($_POST['update_cust']))
                   {
                        $updateCustomer= $control->update_customer(@$_POST['cust_name'], @$_POST['cust_email'], @$_POST['cust_phone'], @$_POST['cust_gender'], @$_REQUEST['edit_cust']);
                        if ($updateCustomer['status'] == true)
                        {
                            echo '<meta http-equiv="refresh" content="0; URL=list-customer?s=y" />';
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
                                <p>The Customer Data is not Updated! Please check or contact the admin!</p>
                            </div>
                            ';
                        }
                    }

                    $customerData = $control->get_data("customer", "cust_id", @$_REQUEST['edit_cust']);
                ?>

				          
				
						
					
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Customer Name (required)</label>
                                <div class="col-lg-10">
                                    <input value="<?php echo @$customerData['data'][0]['cust_name'];?>" placeholder="Enter Customer Name" class=" form-control" id="cname" name="cust_name" minlength="2" type="text" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Customer Email Address(required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" value="<?php echo @$customerData['data'][0]['cust_email'];?>" placeholder=" Enter Customer Email Address" class="form-control " id="cemail" type="email" name="cust_email" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Customer Phone Address(required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" value="<?php echo @$customerData['data'][0]['cust_phone'];?>" placeholder=" Enter Customer Phone Number" class="form-control " id="cemail" type="number" name="cust_phone" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Status (required)</label>
                                <div class="col-lg-10">
                                    <div class="radio">
                                        <label>
                                            <input <?php if (@$customerData['data'][0]['cust_gender'] == "Male") {echo "checked";}?> type="radio" name="cust_gender" id="optionsRadios1" value="Male" checked>
                                            Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input <?php if (@$customerData['data'][0]['cust_gender'] == "Female") {echo "checked";}?> type="radio" name="cust_gender" id="optionsRadios2" value="Female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button name="update_cust" class="btn btn-primary" type="submit">Update</button>
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