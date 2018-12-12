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
        Add Product
    </h3>
</div>
<!-- page heading end-->

<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Put your Product Information and Save it!
                </header>
                <div class="panel-body">
                    <?php
                    $categoryList = $control->get_data("category");
                    $subCategoryList = $control->get_data("subcategory");
                    if (isset($_POST['save_product'])) { 

                       $productAddResult = $control->add_product($_POST, $_FILES);

                       if ($productAddResult['status'] == true)
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
                                <p>Product add successfully!</p>
                            </div>
                             ';
                       }
                       else if(@$productAddResult['data'] == "IMAGE_ERROR")
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
                                <p>Please upload correct Image Format!</p>
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
                                <p>Product is not added!</p>
                            </div>
                            ';
                       }
                    }
                ?>
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Product Name (required)</label>
                                <div class="col-lg-10">
                                    <input placeholder="Enter product name" class=" form-control" id="cname" name="prod_name" minlength="2" type="text"  required/>
                                </div>
                            </div>
                             <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Product Category (required)</label>
                                <div class="col-lg-10">
                                    <select id="ajax_cat_id" name="prod_cat_id" class="form-control m-bot15">
                                        <?php
                                            foreach($categoryList['data'] AS $categoryData)
                                            {
                                                echo "<option value='" .$categoryData['cat_id']. "'>" . $categoryData['cat_name'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Product Sub Category (required)</label>
                                <div class="col-lg-10">
                                    <select id="ajax_subcat_id" name="prod_subcat_id" class="form-control m-bot15">

                                    </select>
                                </div>
                            </div>
							<div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Product Price (required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" placeholder="Must be a number" class="form-control " id="cemail" type="number" name=" prod_price"  required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-2">Product Short Description (required)</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea placeholder="Enter Product Short Description" name="prod_short_desc" readonly class="tinymce form-control" rows="9"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group ">
                                <label for="ccomment" class="control-label col-lg-2">Product Details (required)</label>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea placeholder="Enter Product Details" name="prod_details" readonly  class="tinymce form-control" rows="9"></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Product Stock (required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" placeholder="Enter Product stock" class="form-control " id="cemail" type="number" name="prod_stock"  required/>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Product Picture One (required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" name="prod_pic_1"  id="exampleInputFile" type="file">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Product Picture Two (required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" name="prod_pic_2"  id="exampleInputFile" type="file">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Product Picture Three (required)</label>
                                <div class="col-lg-10">
                                    <input autocomplete="off" name="prod_pic_3"  id="exampleInputFile" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button name="save_product" class="btn btn-primary" type="submit">Save</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        $('#ajax_cat_id').change(function(){
            $('#ajax_subcat_id').load('load-ajax.php?ajax_cat_id='+this.value);
        });
    });
</script>
<?php include("view/footer.php"); ?>