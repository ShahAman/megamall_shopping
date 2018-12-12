<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<?php include("view/header.php"); ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

		<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
		<?php include("view/header-top.php"); ?>
			<!-- HEADER-TOP END -->
			<!-- HEADER-MIDDLE START -->
		<?php include("view/header-middle.php"); ?>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
		<?php include("view/main-menu.php"); ?>
			<!-- END MAIN-MENU-AREA -->
			<!-- Start Mobile-menu -->
		<?php include("view/mobile-menu.php"); ?>
			<!-- End Mobile-menu -->
		</header>
		<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="#">Shopping Cart</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                   <?php include("view/category-menu.php"); ?>
						<!-- END CATEGORY-MENU-LIST -->
						<!-- START SMALL-PRODUCT-AREA -->
						<div class="small-product-area carosel-navigation  hidden-sm hidden-xs">
							<div class="row">
								<div class="col-md-12">
									<div class="area-title">
										<h3 class="title-group gfont-1">Bestseller</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="active-bestseller sidebar">
									<div class="col-xs-12">
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/1.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Trid Palm</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/2.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/3.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Trid Palm</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/4.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
									<div class="col-xs-12">
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/5.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Trid Palm</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/6.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Various Versions</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/7.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Trid Palm</a></h5>
												<div class="price-box">
													<span class="price">$99.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
										<!-- Start Single-Product -->
										<div class="single-product">
											<div class="product-img">
												<a href="#">
													<img class="primary-img" src="img/product/small/8.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
												<div class="price-box">
													<span class="price">$90.00</span>
													<span class="old-price">$110.00</span>
												</div>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</div>
										</div>
										<!-- End Single-Product -->
									</div>
								</div>
							</div>
						</div>
						<!-- END SMALL-PRODUCT-AREA -->
					</div>
					<div class="col-md-9">
						<!-- START PRODUCT-BANNER -->
						<div class="product-banner">
							<div class="row">
								<div class="col-xs-12">
									<div class="banner">
										<a href="#"><img src="img/banner/12.jpg" alt="Product Banner"></a>
									</div>
								</div>
							</div>
						</div>
						<!-- END PRODUCT-BANNER -->
						<!-- Start Shopping-Cart -->
						<div class="shopping-cart">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-title">
										<h2 class="entry-title">Shopping Cart</h2>
									</div>
									<!-- Start Table -->
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<td class="text-left">Product ID</td>
													<td class="text-center">Image</td>
													<td class="text-left">Product Name</td>
													<!--<td class="text-left">Model</td>-->
													<td class="text-left">Quantity</td>
													<td class="text-right">Unit Price</td>
													<td class="text-right">Total</td>
												</tr>
											</thead>
											<tbody>
<?php 
	@$shopcart = $control->get_cartdata($_SESSION['SSC_cust_id']);
	//echo "<pre>";
	//print_r($shopcart);
	$subTotal = 0;

	if($shopcart['status'] == false)
	{ 
		echo "Your Cart is Empty! Shop now!"; 
	}
	else
		foreach($shopcart['data'] AS $eachProduct)
		{
			echo '
			<tr>
			<form method="post" action="">
				<td class="text-left"><input name="prod_id" value="'.$eachProduct['prod_id'].'" style="border: none;" readonly></td>
				<td class="text-center">
					<a href="details?id='.$eachProduct['prod_id'].'"><img style="height:100px; width: 100px;" class="img-thumbnail" src="'.URL_PRODUCT_IMAGE . $eachProduct['prod_pic_1'].'" alt="#" /></a>
				</td>
				<td class="text-left">
					<a href="details?id='.$eachProduct['prod_id'].'">'.$eachProduct['prod_name'].'</a>
				</td>
				<!--<td class="text-left">'.$eachProduct['prod_name'].'</td>-->
				
				<td class="text-left">
					<div class="btn-block cart-put">
						<input name="prod_qty" class="form-control" type="number" value="'.$eachProduct['prod_qty'].'" />
						<div class="input-group-btn cart-buttons">
							<button name="update_cart" class="btn btn-primary" type="submit" title="Update">
								<i class="fa fa-refresh"></i>
							</button>
							<button class="btn btn-danger" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times-circle"></i>
							</button>
						</div>
					</div>
				</td>
			</form>
				<td class="text-right">'.$eachProduct['prod_price'].'</td>
				<td class="text-right">'.($eachProduct['prod_qty']* $eachProduct['prod_price']).'</td>
			</tr>
			';
			if(isset($_POST["update_cart"])) {
				@$updateCart = $control->update_cart($eachProduct["cart_id"], $_POST["prod_qty"]);
				if ($updateCart['status'] == true)
					{
						echo '<meta http-equiv="refresh" content="0; URL=cart" />';
					}
            //	updateCart
			}
			$rowTotal = $eachProduct['prod_qty']* $eachProduct['prod_price'];
			$subTotal = $subTotal + $rowTotal;
			
		}
		$_SESSION['prod_qty'] = count($shopcart['data']);
?>
												
												<!--<tr>
													<td class="text-center">
														<a href="#"><img class="img-thumbnail" src="img/product/cart/2.jpg" alt="#" /></a>
													</td>
													<td class="text-left">
														<a href="#">More-Or-Less</a>
													</td>
													<td class="text-left">Product 14</td>
													<td class="text-left">
														<div class="btn-block cart-put">
															<input class="form-control" type="number" placeholder="1" />
															<div class="input-group-btn cart-buttons">
																<button class="btn btn-primary" data-toggle="tooltip" title="Update" >
																	<i class="fa fa-refresh"></i>
																</button>
																<button class="btn btn-danger" data-toggle="tooltip" title="Remove">
																	<i class="fa fa-times-circle"></i>
																</button>
															</div>
														</div>
													</td>
													<td class="text-right">$100.00</td>
													<td class="text-right">$100.00</td>
												</tr>-->
											</tbody>
										</table>
									</div>
									<!-- End Table -->
									<!--<h3 class="title-group-3 gfont-1">What would you like to do next?</h3>
									<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
									
									<div class="accordion-cart">
										<div class="panel-group" id="accordion">
										
											<div class="panel panel_default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#coupon">Use Coupon Code<i class="fa fa-caret-down"></i> </a>
													</h4>
												</div>
												<div id="coupon" class="collapse in">
													<div class="panel-body">
														<div class="col-sm-2">
															<p>Enter your coupon here</p>
														</div>
														<div class="input-group">
															<input class="form-control" type="text" placeholder="Enter your coupon here" />
															<button type="submit" class="btn btn-primary">Apply Coupon</button>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel_default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#voucher">Use Gift Voucher <i class="fa fa-caret-down"></i> </a>
													</h4>
												</div>
												<div id="voucher" class="collapse">
													<div class="panel-body">
														<div class="col-sm-2">
															<p>Enter your gift voucher code here</p>
														</div>
														<div class="input-group">
															<input class="form-control" type="text" placeholder="Enter your gift voucher code here" />
															<button type="submit" class="btn btn-primary">Apply Voucher</button>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel_default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping">Estimate Shipping & Taxes <i class="fa fa-caret-down"></i> </a>
													</h4>
												</div>
												<div id="shipping" class="collapse">
													<div class="panel-body">
														<div class="col-sm-12">
															<p>Enter your destination to get a shipping estimate.</p>
														</div>
														<div class="form-horizontal">
															<div class="form-group">
																<label class="col-sm-2 control-label"><sup>*</sup>Country</label>
																<div class="col-sm-10">
																	<select class="form-control">
																		<option> --- Please Select --- </option>
																		<option> Bangladesh </option>
																		<option> United States </option>
																		<option> United Kingdom </option>
																		<option> Canada </option>
																		<option> Malaysia </option>
																		<option> United Arab Emirates </option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-2 control-label"><sup>*</sup>Region / State</label>
																<div class="col-sm-10">
																	<select class="form-control">
																		<option> --- Please Select --- </option>
																		<option> Aberdeen </option>
																		<option> Bedfordshire </option>
																		<option> Caerphilly </option>
																		<option> Denbighshire </option>
																		<option> East Ayrshire </option>
																		<option> Falkirk </option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-2 control-label"><sup>*</sup>Post Code</label>
																<div class="col-sm-10">
																	<input type="text" class="form-control" placeholder="Post Code" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>-->
									<!-- Accordion end -->
									<div class="row">
										<div class="col-sm-4 col-sm-offset-8">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td class="text-right">
															<strong>Update Cart:</strong>
														</td>
														<td class="text-right">
															<button name="update_cart_now" class="btn btn-primary">Update Now</button>
														</td>
													</tr>
													<tr>
														<td class="text-right">
															<strong>Shipping Charge:</strong>
														</td>
														<td class="text-right"><?php echo DATA_CURRENCY_SYMBOL . " " . DATA_SHIPPING_CHARGE; ?></td>
													</tr>
													<tr>
														<td class="text-right">
															<strong>Sub-Total:</strong>
														</td>
														<td class="text-right"><?php echo DATA_CURRENCY_SYMBOL . " " . $subTotal; ?></td>
													</tr>
													<tr>
														<td class="text-right">
															<strong>Total:</strong>
														</td>
														<td class="text-right"><?php echo DATA_CURRENCY_SYMBOL . " " . (DATA_SHIPPING_CHARGE + $subTotal);
														$_SESSION['TOTAL_PRICE']=(DATA_SHIPPING_CHARGE + $subTotal);?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="shopping-checkout">
										<a href="index" class="btn btn-default pull-left">Continue Shopping</a>
										<!--<button name= type="submit" class="btn btn-primary">Checkout</button>-->
										<a href="checkout" class="btn btn-primary pull-right">Checkout</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->
					</div>
				</div>
			</div>
			<!-- START BRAND-LOGO-AREA -->
		<?php include("view/brand-logo.php"); ?>	
			<!-- END BRAND-LOGO-AREA -->
			<!-- START SUBSCRIBE-AREA -->
		<?php include("view/subscribe.php"); ?>
			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END PAGE-CONTENT -->
		<?php include("view/footer.php"); ?>	