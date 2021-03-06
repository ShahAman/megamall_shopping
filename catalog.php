<?php 
require_once("config/default.php");
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
							<li class="active"><a href="#">Bestseller Product</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                  <?php include("view/category-menu.php"); ?>
						<!-- END CATEGORY-MENU-LIST -->
						<!-- shop-filter start -->
						<div class="shop-filter">
							<div class="area-title">
								<h3 class="title-group gfont-1">Filters Products</h3>
							</div>
							<h4 class="shop-price-title">Price</h4>
							<div class="info_widget">
								<div class="price_filter">
									<div id="slider-range"></div>
									<div class="price_slider_amount">
										<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
										<input type="submit"  value="Filter"/>  
									</div>
								</div>
							</div>
						</div>
						<!-- shop-filter start -->
						<!-- filter-by start -->
						<div class="accordion_one">
							<h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">Color</a></h4>
							<div id="divone" class="collapse in">
								<div class="filter-menu">
									<ul>
										<li><a href="#">Black (2)</a></li>
										<li><a href="#">Blue (2)</a></li>
										<li><a href="#">Brown (3)</a></li>
										<li><a href="#">Green (3)</a></li>
										<li><a href="#">Orange (2)</a></li>
										<li><a href="#">Pink (2)</a></li>
										<li><a href="#">Red (11)</a></li>
										<li><a href="#">Yellow (3)</a></li>
									</ul>
								</div>
							</div>
							<h4><a class="accordion-trigger" data-toggle="collapse" href="#div2">manufacture</a></h4>
							<div id="div2" class="collapse in">
								<div class="filter-menu">
									<ul>
										<li><a href="#">Chanel (2)</a></li>
										<li><a href="#">Christian Dior (2)</a></li>
										<li><a href="#">Ermenegildo (2)</a></li>
										<li><a href="#">Ferragamo (1)</a></li>
										<li><a href="#">Hermes (2)</a></li>
										<li><a href="#">Louis Vuitton (3)</a></li>
										<li><a href="#">Prada (1)</a></li>
									</ul>
								</div>
							</div>
							<h4><a class="accordion-trigger" data-toggle="collapse" href="#div3">Size</a></h4>
							<div id="div3" class="collapse in">
								<div class="filter-menu">
									<ul>
										<li><a href="#">L (1)</a></li>
										<li><a href="#">M (5)</a></li>
										<li><a href="#">S (7)</a></li>
										<li><a href="#">XL (5)</a></li>
										<li><a href="#">XXL (6)</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- filter-by end -->
					</div>
					<div class="col-md-9 col-xs-12">
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
						<!-- START PRODUCT-AREA -->
						<div class="product-area">
							<div class="row">
								<div class="col-xs-12">
									<!-- Start Product-Menu -->
									<div class="product-menu">
										<div class="product-title">
											<h3 class="title-group-3 gfont-1">cameras & photography</h3>
										</div>
									</div>
									<div class="product-filter">
										<ul role="tablist">
											<li role="presentation" class="list">
												<a href="#display-1-1" role="tab" data-toggle="tab"></a>
											</li>
											<li role="presentation"  class="grid active">
												<a href="#display-1-2" role="tab" data-toggle="tab"></a>
											</li>
										</ul>
										<div class="sort">
											<label>Sort By:</label>
											<select>
												<option value="#">Default</option>
												<option value="#">Name (A - Z)</option>
												<option value="#">Name (Z - A)</option>
												<option value="#">Price (Low > High)</option>
												<option value="#">Rating (Highest)</option>
												<option value="#">Rating (Lowest)</option>
												<option value="#">Name (A - Z)</option>
												<option value="#">Model (Z - A))</option>
												<option value="#">Model (A - Z)</option>
											</select>
										</div>
										<div class="limit">
											<label>Show:</label>
											<select>
												<option value="#">8</option>
												<option value="#">16)</option>
												<option value="#">24</option>
												<option value="#">40</option>
												<option value="#">80</option>
												<option value="#">100</option>
											</select>
										</div>
									</div>
									
									<!-- End Product-Menu -->
									<div class="clear"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-md-12">		
									<!-- Start Product -->
									<div class="product">
										<div class="tab-content">
											<!-- Product -->
											<div role="tabpanel" class="tab-pane fade" id="display-1-1">
												<div class="row">
													<div class="listview">
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/10.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/10bg.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
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
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/13.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/11.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
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
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/10bg.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/10.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
																<div class="product-description">
																	<h5><a href="#">Established Fact</a></h5>
																	<div class="price-box">
																		<span class="price">$92.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/3.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/3bg.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
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
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button  type="submit"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/1.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/1bg.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
																<div class="product-description">
																	<h5><a href="#">Ultra Consequad</a></h5>
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
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/2.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/2bg.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
																<div class="product-description">
																	<h5><a href="#">Established Fact</a></h5>
																	<div class="price-box">
																		<span class="price">$92.00</span>
																		<span class="old-price">$110.00</span>
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
														<!-- Start Single-Product -->
														<div class="single-product">
															<div class="col-md-3 col-sm-4 col-xs-12">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="#">
																		<img class="primary-img" src="img/product/mediam/12.jpg" alt="Product">
																		<img class="secondary-img" src="img/product/mediam/12bg.jpg" alt="Product">
																	</a>
																</div>
															</div>
															<div class="col-md-9 col-sm-8 col-xs-12">	
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
																	<p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
																	<div class="product-action">
																		<div class="button-group">
																			<div class="product-button">
																				<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																			</div>
																			<div class="product-button-2">
																				<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																				<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																				<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- End Single-Product -->
													</div>
												</div>
												<!-- Start Pagination Area -->
												<div class="pagination-area">
													<div class="row">
														<div class="col-xs-5">
															<div class="pagination">
																<ul>
																	<li class="active"><a href="#">1</a></li>
																	<li><a href="#">2</a></li>
																	<li><a href="#">></a></li>
																	<li><a href="#">>|</a></li>
																</ul>
															</div>
														</div>
														<div class="col-xs-7">
															<div class="product-result">
																<span>Showing 1 to 16 of 19 (2 Pages)</span>
															</div>
														</div>
													</div>
												</div>
												<!-- End Pagination Area -->
											</div>
											<!-- End Product -->
											<!-- Start Product-->
											<div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
												<div class="row">
													<?php 
													$products = $control->get_data("product", "prod_subcat_id", $_REQUEST['id']);
													
													if($products['status'] == false)
													{ 
														echo "News products are upcoming! Keep visiting! Get lost!"; 
													}
													else
														foreach($products['data'] AS $eachProduct)
														{
															echo '
															<div class="col-md-3 col-sm-4 col-xs-12">
															<div class="single-product">
																<div class="label_new">
																	<span class="new">new</span>
																</div>
																<div class="sale-off">
																	<span class="sale-percent">-55%</span>
																</div>
																<div class="product-img">
																	<a href="details?id='.$eachProduct['prod_id'].'">
																		<img class="primary-img" src="admin/gallery/products/'.$eachProduct['prod_pic_1'].'" alt="Product">
																		<img class="secondary-img" src="admin/gallery/products/'.$eachProduct['prod_pic_2'].'" alt="Product">
																	</a>
																</div>
																<div class="product-description">
																	<h5><a href="details?id='.$eachProduct['prod_id'].'">'.$eachProduct['prod_name'].'</a></h5>
																	<div class="price-box">
																		<span class="price">'.$eachProduct['prod_price'].'</span>
																		<!--<span class="old-price">$110.00</span>-->
																	</div>
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
																</div>
																<div class="product-action">
																	<div class="button-group">
																		<div class="product-button">
																			<button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
																		</div>
																		<div class="product-button-2">
																			<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
																			<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
																			<a href="#" class="modal-view" data-toggle="modal" data-target="#productModal"><i class="fa fa-search-plus"></i></a>
																		</div>
																	</div>
																</div>												
															</div>
														</div>
														';
													}
													?>
													
													
													<!-- End Single-Product -->
													
												</div>
												<!-- Start Pagination Area -->
												<div class="pagination-area">
													<div class="row">
														<div class="col-xs-5">
															<div class="pagination">
																<ul>
																	<li class="active"><a href="#">1</a></li>
																	<li><a href="#">2</a></li>
																	<li><a href="#">></a></li>
																	<li><a href="#">>|</a></li>
																</ul>
															</div>
														</div>
														<div class="col-xs-7">
															<div class="product-result">
																<span>Showing 1 to 16 of 19 (2 Pages)</span>
															</div>
														</div>
													</div>
												</div>
												<!-- End Pagination Area -->
											</div>
											<!-- End Product = TV -->
										</div>
									</div>
									<!-- End Product -->
								</div>
							</div>
						</div>
						<!-- END PRODUCT-AREA -->
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