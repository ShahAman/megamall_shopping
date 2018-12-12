<?php 
require_once("config/default.php");
require_once("control/control.php");
include("view/header.php"); ?>
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
							<li class="active"><a href="my-account.html">My Account</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                 <?php include("view/account-menu.php"); ?>
						<!-- END CATEGORY-MENU-LIST -->
					</div>
					<div class="col-md-9">
						<!-- START PRODUCT-BANNER -->

						<!-- END PRODUCT-BANNER -->
						<!-- entry-header-area start -->
						<!--<div class="entry-header-area">
							<div class="row">
								<div class="col-md-12">
									<div class="entry-header">
										<h2 class="entry-title">My Account</h2>
									</div>
								</div>
							</div>
						</div>-->
						<!-- entry-header-area end -->
						<!-- Start checkout-area -->
						
						<div class="checkout-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Accordion start -->
									<div class="panel-group" id="accordion">
										<!-- Start My-First-Address -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#payment-address">My First Address <i class="fa fa-caret-down"></i> </a>
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
																	<input type="text" class="form-control" placeholder="Salim" name="firstname" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Last Name</label>
																	<input type="text" class="form-control" placeholder="Rana" name="lastname" />
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
																<legend>Additional information</legend>
																<textarea class="form-control"  rows="6"></textarea>
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
																	<label>Date of Birth</label>
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control">
																				<option>1</option>
																				<option>2</option>
																				<option>3</option>
																				<option>4</option>
																				<option>5</option>
																				<option>6</option>
																				<option>7</option>
																				<option>8</option>
																				<option>9</option>
																				<option>10</option>
																				<option>11</option>
																				<option>12</option>
																				<option>13</option>
																				<option>14</option>
																				<option>15</option>
																				<option>16</option>
																				<option>17</option>
																				<option>18</option>
																				<option>19</option>
																				<option>20</option>
																				<option>21</option>
																				<option>22</option>
																				<option>23</option>
																				<option>24</option>
																				<option>25</option>
																				<option>26</option>
																				<option>27</option>
																				<option>28</option>
																				<option>29</option>
																				<option>30</option>
																			</select>                 
																		</div>
																		<div class="col-xs-4">
																			<select class="form-control">
																				<option>January</option>
																				<option>February </option>
																				<option>March </option>
																				<option>April </option>
																				<option>May </option>
																				<option>June </option>
																				<option>July </option>
																				<option>August </option>
																				<option>September </option>
																				<option>October </option>
																				<option>November </option>
																				<option>December </option>
																			</select>                 
																		</div>
																		<div class="col-xs-4">
																			<select class="form-control">
																				<option>1990</option>
																				<option>1991</option>
																				<option>1992</option>
																				<option>1993</option>
																				<option>1994</option>
																				<option>1995</option>
																				<option>1996</option>
																				<option>1997</option>
																				<option>1998</option>
																				<option>1999</option>
																				<option>2000</option>
																				<option>2001</option>
																				<option>2002</option>
																				<option>2003</option>
																				<option>2004</option>
																				<option>2005</option>
																				<option>2006</option>
																				<option>2007</option>
																				<option>2008</option>
																				<option>2009</option>
																				<option>2010</option>
																				<option>2011</option>
																				<option>2012</option>
																				<option>2013</option>
																				<option>2014</option>
																				<option>2016</option>
																				<option>2016</option>
																				<option>2017</option>
																				<option>2018</option>
																				<option>2019</option>
																				<option>2020</option>
																			</select>                 
																		</div>
																	</div>          
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
																	<input type="checkbox" name="newsletter" checked />
																	 I wish to subscribe to the Malias newsletter.
																</label>
															</div>
															<div class="buttons clearfix">
																<div class="pull-right">
																	I have read and agree to the 
																	<a href="#"><b>Privacy Policy</b></a>
																	<input type="checkbox" name="agree" />
																	<input type="button" class="btn btn-primary" value="Save" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End My-First-Address -->
										<!-- Start Order History And Details -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#checkout-confirm">Order History And Details <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="checkout-confirm" class="collapse">
												<div class="panel-body">
													<!-- Start Table -->
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td class="text-center">Image</td>
																	<td class="text-left">Product Name</td>
																	<td class="text-left">Model</td>
																	<td class="text-left">Quantity</td>
																	<td class="text-right">Unit Price</td>
																	<td class="text-right">Total</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-center">
																		<a href="#"><img class="img-thumbnail" src="img/product/cart/1.jpg" alt="#" /></a>
																	</td>
																	<td class="text-left">
																		<a href="#">More-Or-Less</a>
																	</td>
																	<td class="text-left">Product 14</td>
																	<td class="text-left">
																		<div class="btn-block cart-put">
																			<input type="text" class="form-control" />
																			<div class="input-group-btn cart-buttons">
																				<button class="btn btn-primary" data-toggle="tooltip" title="Update">
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
																</tr>
																<tr>
																	<td class="text-center">
																		<a href="#"><img class="img-thumbnail" src="img/product/cart/2.jpg" alt="#" /></a>
																	</td>
																	<td class="text-left">
																		<a href="#">More-Or-Less</a>
																	</td>
																	<td class="text-left">Product 14</td>
																	<td class="text-left">
																		<div class="btn-block cart-put">
																			<input type="text" class="form-control" />
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
																</tr>
															</tbody>
															<tfoot>
																<tr>
																	<td class="text-right" colspan="5">
																		<strong>Sub-Total:</strong>
																	</td>
																	<td class="text-right">$200.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="5">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
																<tr>
																	<td class="text-right" colspan="5">
																		<strong>Flat Shipping Rate:</strong>
																	</td>
																	<td class="text-right">$5.00</td>
																</tr>
															</tfoot>
														</table>
													</div>
													<!-- End Table -->
													<div class="buttons pull-right">
														<input type="button" class="btn btn-primary" value="Confirm Order" />
													</div>
												</div>
											</div>
										</div>
										<!-- End Order History And Details -->
										<!-- Start My Address -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping-address">My Address <i class="fa fa-caret-down"></i> </a>
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
										<!-- End My Address -->
										<!-- Start My Wish List -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#payment-method">My Wish List <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="payment-method" class="collapse">
												<div class="panel-body">
													<div class="table-responsive">
														<table class="table table-bordered table-hover">
															<thead>
																<tr>
																	<td class="text-center">Image</td>
																	<td class="text-left">Product Name</td>
																	<td class="text-left">Model</td>
																	<td class="text-right">Stock</td>
																	<td class="text-right">Unit Price</td>
																	<td class="text-right">Action</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-center">
																		<a href="#"><img src="img/product/cart/3.jpg" alt="#" /></a>
																	</td>
																	<td class="text-left">
																		<a href="#">Prod Aldults</a>
																	</td>
																	<td class="text-left">Product 9</td>
																	<td class="text-right">In Stock</td>
																	<td class="text-right">
																		<div class="price-box">
																			<span class="price">$100.00</span>
																		</div>
																	</td>
																	<td class="text-right">
																		<button class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" type="button">
																			<i class="fa fa-shopping-cart"></i>
																		</button>
																		<a href="#" class="btn btn-danger" data-toggle="tooltip" title="Remove">
																			<i class="fa fa-times"></i>
																		</a>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">
																		<a href="#"><img src="img/product/cart/4.jpg" alt="#" /></a>
																	</td>
																	<td class="text-left">
																		<a href="#">Prod Aldults</a>
																	</td>
																	<td class="text-left">Product 9</td>
																	<td class="text-right">In Stock</td>
																	<td class="text-right">
																		<div class="price-box">
																			<span class="price">$45.00</span>
																			<span class="old-price">$100.00</span>
																		</div>
																	</td>
																	<td class="text-right">
																		<button class="btn btn-primary" data-toggle="tooltip" title="Add to Cart" type="button">
																			<i class="fa fa-shopping-cart"></i>
																		</button>
																		<a href="#" class="btn btn-danger" data-toggle="tooltip" title="Remove">
																			<i class="fa fa-times"></i>
																		</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="buttons clearfix pull-right">
														<a href="#" class="btn btn-primary">Save</a>
													</div>
												</div>
											</div>
										</div>
										<!-- End My Wish List -->
									</div>
									<!-- Accordion end -->
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->

						<!-- My-Account-Area start -->
						<div class="my-account-area">
							<div class="row">
								<div class="col-md-6">

								</div>
							</div>
						</div>
						<!-- My-Account-Area end -->
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