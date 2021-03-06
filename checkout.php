<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<?php include("SSLCZ_php_class\SSLCommerz.php");?>
<?php include("view/header.php"); ?>
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
							<li><a href="cart.html">Shopping Cart</a></li>
							<li class="active"><a href="checkout.html">Checkout</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
						<?php include("view/category-menu.php"); ?>
						<!-- END CATEGORY-MENU-LIST -->
						<!-- START SMALL-PRODUCT-AREA -->
						<div class="small-product-area carosel-navigation hidden-sm hidden-xs">
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
												<h5><a href="#">Various Versions</a></h5>
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
												<h5><a href="#">Various Versions</a></h5>
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
						<!-- Start checkout-area -->
						<div class="checkout-area">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-title">
										<h2 class="entry-title">Checkout</h2>
									</div>
									<!-- Accordion start -->
									<!--<div class="panel-group" id="accordion">-->
										<!-- Start 1 Checkout-options -->
										<!--<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#checkout-options">Step 1: Checkout Options  <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="checkout-options" class="collapse in">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6 col-xs-12">
															<div class="checkout-collapse">
																<h3 class="title-group-3 gfont-1">New Customer</h3>
																<p>Checkout Options</p>
																<div class="radio">
																	<label>
																		<input type="radio" value="register" name="account" checked/>
																		Register Account
																	</label>
																</div>
																<div class="radio">
																	<label>
																		<input type="radio" value="guest" name="account"/>
																		Guest Checkout
																	</label>
																</div>
																<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
																<input type="submit" class="btn btn-primary" value="Continue"/>
															</div>
														</div>
														<div class="col-md-6 col-xs-12">
															<div class="checkout-collapse">
																<h3 class="title-group-3 gfont-1">Returning Customer</h3>
																<p>I am a returning customer</p>
																<div class="form-group">
																	<label>E-mail</label>
																	<input type="email" class="form-control" name="email" />
																</div>
																<div class="form-group">
																	<label>Password</label>
																	<input type="password" class="form-control" />
																	<a href="#">Forgotten Password</a>
																</div>
																<input type="submit" class="btn btn-primary" value="Login"/>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Checkout-options -->
										<!-- Start 2 Payment-Address -->
										<!--<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger  collapsed" data-toggle="collapse" data-parent="#accordion" href="#payment-address">Step 2: Account & Billing Details <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="payment-address" class="collapse">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6 col-xs-12">
															<fieldset id="account">
																<legend>Your Personal Details</legend>
																<div class="form-group">
																	<label><sup>*</sup>First Name</label>
																	<input type="text" class="form-control" placeholder="First Name" name="firstname" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Last Name</label>
																	<input type="text" class="form-control" placeholder="Last Name" name="lastname" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>E-mail</label>
																	<input type="email" class="form-control" placeholder="E-mail" name="email" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Telephone</label>
																	<input type="text" class="form-control" placeholder="Telephone" name="telephone" />
																</div>
																<div class="form-group">
																	<label>Fax</label>
																	<input type="text" class="form-control" placeholder="Fax" name="fax" />
																</div>
															</fieldset>
															<fieldset>
																<legend>Your Password</legend>
																<div class="form-group">
																	<label><sup>*</sup>Password</label>
																	<input type="password" class="form-control" placeholder="Password" name="password" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Password Confirm</label>
																	<input type="password" class="form-control" placeholder="Password Confirm" name="confirm" />
																</div>
															</fieldset>
														</div>
														<div class="col-md-6 col-xs-12">
															<fieldset id="address">
																<legend>Your Address</legend>
																<div class="form-group">
																	<label>Company</label>
																	<input type="text" class="form-control" placeholder="Company" name="company" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Address 1</label>
																	<input type="text" class="form-control" placeholder="Address 1" name="Address_1" />
																</div>
																<div class="form-group">
																	<label>Address 2</label>
																	<input type="text" class="form-control" placeholder="Address 2" name="Address_2" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>City</label>
																	<input type="text" class="form-control" placeholder="City" name="city" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Post Code</label>
																	<input type="text" class="form-control" placeholder="Post Code" name="postcode" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Country</label>
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
																<div class="form-group">
																	<label><sup>*</sup>Region / State</label>
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
															</fieldset>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="newsletter" />
																	 I wish to subscribe to the Malias1 newsletter.
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input type="checkbox" name="shipping_address" checked/>
																	 My delivery and billing addresses are the same.
																</label>
															</div>
															<div class="buttons clearfix">
																<div class="pull-right">
																	I have read and agree to the 
																	<a href="#"><b>Privacy Policy</b></a>
																	<input type="checkbox" name="agree" />
																	<input type="button" class="btn btn-primary" value="Continue" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Payment-Address -->
										<!-- Start 3 shipping-Address -->
										<!--<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping-address">Step 3: Delivery Details <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="shipping-address" class="collapse">
												<div class="panel-body">
													<div class="form-horizontal">
														<div class="form-group">
															<label class="col-sm-2 control-label"><sup>*</sup>First Name</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="First Name" name="firstname" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label"><sup>*</sup>Last Name</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="Last Name" name="lastname" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label">Company</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="Company" name="company" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label"><sup>*</sup>Address 1</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="Address 1" name="address_1" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label">Address 2</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="Address 2" name="address_2" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label"><sup>*</sup>City</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="City" name="city" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label"><sup>*</sup>Post Code</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" placeholder="Post Code" name="postcode" />
															</div>
														</div>
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
																	<option> Dhaka </option>
																	<option> New York </option>
																	<option> London </option>
																	<option> Canada </option>
																	<option> Malaysia </option>
																	<option> United Arab Emirates </option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End shipping-Address -->
										<!-- Start 4 shipping-Method -->
										<!--<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping-method">Step 4: Delivery Method <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="shipping-method" class="collapse">
												<div class="panel-body">
													<p>Please select the preferred shipping method to use on this order.</p>
													<p><strong>Flat Rate</strong></p>
													<div class="radio">
														<label>
															<input type="radio" name="shipping_method" checked/>
															Flat Shipping Rate - $5.00
														</label>
													</div>
													<p><strong>Add Comments About Your Order</strong></p>
													<p>
														<textarea class="form-control" name="comment" rows="8"></textarea>
													</p>
													<div class="buttons pull-right">
														<input type="button" class="btn btn-primary" value="Continue" />
													</div>
												</div>
											</div>
										</div>
										<!-- End shipping-Method -->
										<!-- Start 5 Payment-Method -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-parent="#accordion"> Payment Method</a>
												</h4>
											</div>
											<div id="payment-method">
												<div class="panel-body">
													<p>Please select the preferred payment method to use on this order.</p>
													
													
													<!--<p><strong>Add Comments About Your Order</strong></p>
													<p>
														<textarea class="form-control" name="comment" rows="8"></textarea>
													</p>-->
													<div>
<?php
//@$shopcart = $control->get_cartdata($_SESSION['SSC_cust_id']);
//echo"<pre>";
//print_r($shopcart);
//echo $_SESSION['TOTAL_PRICE'];

$post_data = array(); # Req
$post_data['total_amount'] = $_SESSION['TOTAL_PRICE']; # Req
$post_data['currency'] = "BDT"; # Req
$post_data['tran_id'] = $_SESSION['SSC_trx_id'] = "SS_" . rand(1000,9999) . uniqid(); # Req
$post_data['success_url'] = "http://localhost/www.superstore.com/success"; # Req
$post_data['fail_url'] = "http://localhost/www.superstore.com/success"; # Req
$post_data['cancel_url'] = "http://localhost/www.superstore.com/success"; # Req

# CUSTOMER INFORMATION
$post_data['cus_name'] = $_SESSION['SSC_cust_name']; # Req
$post_data['cus_email'] = $_SESSION['SSC_cust_email']; # Req
$post_data['cus_add1'] = "Dhaka";
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh"; # Req
$post_data['cus_phone'] = $_SESSION['SSC_cust_phone']; # Req
$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION
$post_data['ship_name'] = "Customer Name";
$post_data['ship_add1 '] = "Dhaka";
$post_data['ship_add2'] = "Dhaka";
$post_data['ship_city'] = "Dhaka";
$post_data['ship_state'] = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
/*
$post_data['value_a'] = "ref001";
$post_data['value_b'] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004"; 
*/

# SSLCommerz(STORE ID,STORE PASSWORD, SANDBOX MODE)
# Ex. SSLCommerz(STORE ID,STORE PASSWORD, 1), 1= Means to check in Sandbox and 0=Means to Check in Live
$sslc = new SSLCommerz();

# initiate(Transaction Data , Whether redirect or Display in Page)
$options = $sslc->initiate($post_data, true);
// echo "<pre>";
// print_r($options);
// die;

echo "<h4>Bank Cards</h4>";
foreach($options['cards'] AS $option)
{
	echo '
	<span>'.$option['link'].'</span>
	';
}
echo "<br /><h4>Other Bank Payment</h4>";
foreach($options['others'] AS $option)
{
	echo '
	<span>'.$option['link'].'</span>
	';
}
echo "<br /><h4>Internet Banking</h4>";
foreach($options['internet'] AS $option)
{
	echo '
	<span>'.$option['link'].'</span>
	';
}
echo "<br /><h4>Mobile Banking Options</h4>";
foreach($options['mobile'] AS $option)
{
	echo '
	<span>'.$option['link'].'</span>
	';
}
?>
													</div>
													<br>
													<!--<p><strong>OR You Can Choose:</p>
													<div class="checkbox">
														<label>
															<input type="checkbox" name="payment_method" checked/>
															Cash On Delivery      
														</label>
													</div>-->
													
													<!--<div class="buttons pull-right">
														I have read and agree to the 
														<a href="#"><b>Terms & Conditions</b></a>
														<input type="checkbox" name="agree" />
														<input type="button" class="btn btn-primary" value="Continue" />
													</div>-->
												</div>
											</div>
										</div>
										<!-- End Payment-Method -->
										<!-- Start 6 Checkout-Confirm -->
										<!--<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#checkout-confirm"> Order Details<i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="checkout-confirm" class="collapse">
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-bordered table-hover">
															<thead>
																<tr>
																	<td class="text-left">Product Name</td>
																	<!--<td class="text-left">Model</td>-->
																	<!--<td class="text-left">Quantity</td>
																	<td class="text-left">Unit Price</td>
																	<td class="text-left">Total</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-left">
																		<a href="#">More-Or-Less</a>
																	</td>
																	<td class="text-left">Product 14</td>
																	<td class="text-left">2</td>
																	<td class="text-left">$100.00</td>
																	<td class="text-left">$200.00</td>
																</tr>
																<tr>
																	<td class="text-left">
																		<a href="#">Aliquam Consequat</a>
																	</td>
																	<td class="text-left">Product 21</td>
																	<td class="text-left">2</td>
																	<td class="text-left">$45.00</td>
																	<td class="text-left">$90.00</td>
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Sub-Total:</strong>
																	</td>
																	<td class="text-right">$290.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="4">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
															</tfoot>
														</table>
													</div>
													<div class="buttons pull-right">
														<!--<input type="button" class="btn btn-primary" value="Confirm Order" />
													</div>
												</div>
											</div>
										</div>-->
										<!-- End Checkout-Confirm -->
									</div>
									<!-- Accordion end -->
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
