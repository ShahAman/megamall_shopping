<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<i class="fa fa-clock-o"></i>
										<div class="support-text">
											<h1 class="zero gfont-1">working time</h1>
											<p>Mon- Sun: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-truck"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Free shipping</h1>
										<p>On order over $199</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-money"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Money back 100%</h1>
										<p>Within 30 Days after delivery</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<i class="fa fa-phone-square"></i>
									<div class="support-text">
										<h1 class="zero gfont-1">Phone: 0123456789</h1>
										<p>Order Online Now !</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="index.php" title="Malias"><img src="img/logo.png" alt="Malias"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
		                    <div class="quick-access">
		                    	<div class="search-by-category">
		                    		<div class="search-container">
			                    		<select>
			                    			<option class="all-cate">All Categories</option>
											<optgroup  class="cate-item-head" label="Cameras & Photography">
												<option class="cate-item-title">Handbags</option>
												<option class="c-item">Blouses And Shirts</option>
												<option class="c-item">Clouthes</option>
											</optgroup>
											<optgroup  class="cate-item-head" label="Laptop & Computer">
												<option class="cate-item-title">Apple</option>
												<option class="c-item">Dell</option>
												<option class="c-item">Hp</option>
												<option class="c-item">Sony</option>
											</optgroup>
											<optgroup  class="cate-item-head" label="Electronic">
												<option class="c-item">Mobile</option>
												<option class="c-item">Speaker</option>
												<option class="c-item">Headphone</option>
											</optgroup>
			                    		</select>
		                    		</div>
		                    		<div class="header-search">
		                    			<!-- Search Area -->
										<form action="catalogs" method="get">
			                    			<input name="search" type="text" placeholder="Search">
			                    			<button type="submit"><i class="fa fa-search"></i></button>
		                    			</form>
		                    		</div>
		                    	</div>
		                    	<div class="top-cart">
		                    		<ul>
		                    			<li>
			                    			<a href="cart.php">
			                    				<span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
			                    				<span class="cart-total">
			                    					<span class="cart-title">shopping <br />cart</span>

			                    				</span>
			                    			</a>
											<div class="mini-cart-content">
												<!--<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Prod Aldults</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$180.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>
												<div class="clear"></div>
												<div class="cart-img-details">
													<div class="cart-img-photo">
														<a href="#"><img src="img/product/total-cart2.jpg" alt="#"></a>
													</div>
													<div class="cart-img-content">
														<a href="#"><h4>Fact Prone</h4></a>
														<span>
															<strong class="text-right">1 x</strong>
															<strong class="cart-price text-right">$185.00</strong>
														</span>
													</div>
													<div class="pro-del">
														<a href="#"><i class="fa fa-times"></i></a>
													</div>
												</div>-->
<div class="cart-inner-bottom">
	<span class="total">
		Total Item:
		<span class="amount">
		<?php @$total_qty = $control->get_cartcount($_SESSION['SSC_cust_id']); 
		echo ($total_qty['data'][0]['TOTAL_QTY']);
		?></span>
	</span>
	<span class="total">
		Total Amount:
		<span class="amount"><?php 
		@$total_amount = $control->get_cart_summary($_SESSION['SSC_cust_id']); 
		echo ($total_amount['data'][0]['TOTAL_PRICE'] + DATA_SHIPPING_CHARGE);
		?></span>
	</span>
	<span class="cart-button-top">
		<a href="cart.php">View Cart</a>
		<a href="checkout.php">Checkout</a>
	</span>
</div>
											</div>
		                    			</li>
		                    		</ul>
		                    	</div>
		                    </div>
		                </div>
					</div>
					<!-- End logo & Search Box -->
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->