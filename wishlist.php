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
							<li class="active"><a href="#">Wish List</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<!-- CATEGORY-MENU-LIST START -->
	                  <?php include("view/category-menu.php"); ?>
						<!-- END CATEGORY-MENU-LIST -->
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
						<div class="Wishlist-area">
							<h2>My Wish List</h2>
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
								<a href="#" class="btn btn-primary">Continue</a>
							</div>
						</div>
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