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
		
		<?php 
		if(@$_REQUEST['id'])
			$_SESSION['SSC_prod_id'] = $_REQUEST['id'];
		
		$products = $control->get_data("product", "prod_id", $_SESSION['SSC_prod_id']);

		?>
		
		<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">cameras & photography</a></li>
							<li class="active"><a href="#"><?php echo $products['data'][0]['prod_name']; ?></a></li>
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
													<img class="primary-img" src="img/product/small/2.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
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
													<img class="primary-img" src="img/product/small/3.jpg" alt="Product">
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
													<img class="primary-img" src="img/product/small/4.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
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
													<img class="primary-img" src="img/product/small/6.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
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
													<img class="primary-img" src="img/product/small/7.jpg" alt="Product">
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
													<img class="primary-img" src="img/product/small/8.jpg" alt="Product">
												</a>
											</div>
											<div class="product-description">
												<h5><a href="#">Established Fact</a></h5>
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
									</div>
								</div>
							</div>
						</div>
						<!-- END SMALL-PRODUCT-AREA -->
						<!-- START SIDEBAR-BANNER -->
	                    <div class="sidebar-banner hidden-sm hidden-xs">
	                    	<div class="active-sidebar-banner">
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="img/banner/1.jpg" alt="Product Banner"></a>
	                    		</div>
	                    		<div class="single-sidebar-banner">
	                    			<a href="#"><img src="img/banner/2.jpg" alt="Product Banner"></a>
	                    		</div>
	                    	</div>
	                    </div>
	                    <!-- END SIDEBAR-BANNER -->
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- Start Toch-Prond-Area -->
						<div class="toch-prond-area">
							<form action="" method="post">
							<?php 
							if(isset($_POST['add_to_cart']))
							{
								$addToCart = $control->add_to_cart($_SESSION['SSC_cust_id'], $_SESSION['SSC_prod_id'], $_POST['prod_qty']);
								
								if($addToCart['status'] == true)
									echo '<div class="alert alert-success">You have successfully added the Product to Cart!</div>';
							}
							
							?>
							<div class="row">
								<div class="col-md-5 col-sm-5 col-xs-12">
									<div class="clear"></div>
									<div class="tab-content">
										<!-- Product = display-1-1 -->
										<div role="tabpanel" class="tab-pane fade in active" id="display-1">
											<div class="row">
												<div class="col-xs-12">
													<div class="toch-photo">
														<a href="#"><img src="img/toch/1.jpg" data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Product = display-1-1 -->
										<!-- Start Product = display-1-2 -->
										<div role="tabpanel" class="tab-pane fade" id="display-2">
											<div class="row">
												<div class="col-xs-12">
													<div class="toch-photo">
														<a href="#"><img src="img/toch/2.jpg" data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Product = display-1-2 -->
										<!-- Start Product = di3play-1-3 -->
										<div role="tabpanel" class="tab-pane fade" id="display-3">
											<div class="row">
												<div class="col-xs-12">
													<div class="toch-photo">
														<a href="#"><img src="img/toch/3.jpg" data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Product = display-1-3 -->
										<!-- Start Product = di3play-1-4 -->
										<div role="tabpanel" class="tab-pane fade" id="display-4">
											<div class="row">
												<div class="col-xs-12">
													<div class="toch-photo">
														<a href="#"><img src="img/toch/4.jpg" data-imagezoom="true" alt="#" /></a>
													</div>
												</div>
											</div>
										</div>
										<!-- End Product = display-1-4 -->
									</div>
									<!-- Start Toch-prond-Menu -->
									<div class="toch-prond-menu">
										<ul role="tablist">
											<li role="presentation" class=" active"><a href="#display-1" role="tab" data-toggle="tab"><img src="img/toch/1.jpg" alt="#" /></a></li>
											<li role="presentation"><a href="#display-2" role="tab" data-toggle="tab"><img src="img/toch/2.jpg" alt="#" /></a></li>
											<li role="presentation"><a href="#display-3"  role="tab" data-toggle="tab"><img src="img/toch/3.jpg" alt="#" /></a></li>
											<li role="presentation"><a href="#display-4"  role="tab" data-toggle="tab"><img src="img/toch/4.jpg" alt="#" /></a></li>
										</ul>
									</div>
									<!-- End Toch-prond-Menu -->
								</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<h2 class="title-product"> <?php echo $products['data'][0]['prod_name']; ?></h2>
									<div class="about-toch-prond">
										<p>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<a href="#">1 reviews</a>
											/
											<a href="#">Write a review</a>
										</p>
										<hr />
										<p class="short-description">
										<?php echo $products['data'][0]['prod_short_desc']; ?>
										</p>
										<hr />
										<span class="current-price">$100.00</span>
										<span class="item-stock">Availability: <span class="text-stock">In Stock</span></span>
									</div>
									<div class="about-product">
										<!--<div class="product-select product-color">
											<label><sup>*</sup>Color</label>
											<select class="form-control">
												<option> --- Please Select --- </option>
												<option>Black (+$10.00) </option>
												<option>White (+$8.00)</option>
												<option>Pink (+$30.00)</option>
												<option>Green (+$30.00)</option>
											</select>
										</div>
										<div class="product-select product-Size">
											<label><sup>*</sup>Size</label>
											<select class="form-control">
												<option> --- Please Select --- </option>
												<option>Small (+$10.00)</option>
												<option>Medium (+$20.00)</option>
												<option>Large (+$30.00)</option>
												<option>Extra Large (+$35.00)</option>
											</select>
										</div>-->
										<!--<div class="product-select product-type">
											<label><sup>*</sup>Quantity</label>
											<input type="text"  class="form-control" placeholder="Amount you want to Buy"/>
										</div>-->
										<!--<div class="product-select product-date">
											<label><sup>*</sup>Date</label>
											<input type="text"  class="form-control" placeholder="2016/02/15"/>
										</div>
										<div class="product-select product-checkbox">
											<label><sup>*</sup>Checkbox</label>
											<label><input type="checkbox" /> Checkbox 1  (+$5.00)</label>
										</div>
										<div class="product-select product-button">
											<button type="submit" >
												<i class="fa fa-calendar"></i>
											</button>
										</div>-->
									</div>
									<div class="product-quantity">
										<span>Quantity</span>
										<input name="prod_qty" min="1" type="number" value="1" />
										<button name="add_to_cart" type="submit" class="toch-button toch-add-cart">Add to Cart</button>
										<!--<button type="submit" class="toch-button toch-wishlist">wishlist</button>
										<button type="submit" class="toch-button toch-compare">Compare</button>-->
										<hr />
										<a href="#"><img src="img/icon/social.png" alt="#" /></a>
									</div>
								</div>
							</div>
							</form>
							<!-- Start Toch-Box -->
							<div class="toch-box">
								<div class="row">
									<div class="col-xs-12">
										<!-- Start Toch-Menu -->
										<div class="toch-menu">
											<ul role="tablist">
												<li role="presentation" class=" active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
												<li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (1)</a></li>
											</ul>
										</div>
										<!-- End Toch-Menu -->
										<div class="tab-content toch-description-review">
											<!-- Start display-description -->
											<div role="tabpanel" class="tab-pane fade in active" id="description">
												<div class="row">
													<div class="col-xs-12">
														<div class="toch-description">
															<p>
															<?php echo $products['data'][0]['prod_details']; ?>
															</p>
														</div>
													</div>
												</div>
											</div>
											<!-- End display-description -->
											<!-- Start display-reviews -->
											<div role="tabpanel" class="tab-pane fade" id="reviews">
												<div class="row">
													<div class="col-xs-12">
														<div class="toch-reviews">
															<div class="toch-table">
																<table class="table table-striped table-bordered">
																	<tbody>
																		<tr>
																			<td><strong>plaza theme</strong></td>
																			<td class="text-right"><strong>16/02/2016</strong></td>
																		</tr>
																		<tr>
																			<td colspan="2">
																				<p>It is part of Australia's network of offshore processing centres for irregular migrants who arrive by boat, and also houses New Zealanders facing deportation from Australia.</p>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star"></i></span>
																				<span><i class="fa fa-star-o"></i></span>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="toch-review-title">
																<h2>Write a review</h2>
															</div>
															<div class="review-message">
																<div class="col-xs-12">
																	<p><sup>*</sup>Your Name <br>
																		<input type="text" class="form-control" />
																	</p>
																	<p><sup>*</sup>Your Name <br>
																		<textarea class="form-control"></textarea>
																	</p>
																</div>
																<div class="help-block">
																	<span class="note">Note:</span>
																	 HTML is not translated!
																</div>
																<div class="get-rating">
																	<span><sup>*</sup>Rating </span>
																	Bad
																	<input type="radio" value="1" name="rating" />
																	<input type="radio" value="2" name="rating" />
																	<input type="radio" value="3" name="rating" />
																	<input type="radio" value="4" name="rating" />
																	<input type="radio" value="5" name="rating" />
																	Good
																</div>
																<div class="buttons clearfix">
																	<button class="btn btn-primary pull-right">Continue</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End Product = display-reviews -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Toch-Box -->
							<!-- START PRODUCT-AREA -->
							<div class="product-area">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<!-- Start Product-Menu -->
										<div class="product-menu">
											<div class="product-title">
												<h3 class="title-group-2 gfont-1">Related Products</h3>
											</div>
										</div>
									</div>
								</div>
								<!-- End Product-Menu -->
								<div class="clear"></div>
								<!-- Start Product -->
								<div class="product carosel-navigation">
									<div class="row">
										<div class="active-product-carosel">
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/3bg.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Various Versions</a></h5>
														<div class="price-box">
															<span class="price">$80.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/11.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$79.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Established Fact</a></h5>
														<div class="price-box">
															<span class="price">$75.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$95.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Established Fact</a></h5>
														<div class="price-box">
															<span class="price">$82.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Trid Palm</a></h5>
														<div class="price-box">
															<span class="price">$99.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
											<!-- Start Single-Product -->
											<div class="col-xs-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
														</a>
													</div>
													<div class="product-description">
														<h5><a href="#">Various Versions</a></h5>
														<div class="price-box">
															<span class="price">$95.00</span>
														</div>
													</div>											
												</div>
											</div>
											<!-- End Single-Product -->
										</div>
									</div>

								</div>
								<!-- End Product -->
							</div>
							<!-- END PRODUCT-AREA -->
						</div>
						<!-- End Toch-Prond-Area -->
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