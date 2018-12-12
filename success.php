<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<?php include("SSLCZ_php_class\SSLCommerz.php");?>
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
						<!--<div class="product-banner">
							<div class="row">
								<div class="col-xs-12">
									<div class="banner">
										<a href="#"><img src="img/banner/12.jpg" alt="Product Banner"></a>
									</div>
								</div>
							</div>
						</div>-->
						<!-- END PRODUCT-BANNER -->
						<!-- Start Shopping-Cart -->
						<div class="shopping-cart">
							<div class="row">
								<div class="col-md-12">
									<div class="cart-title">
										<h2 class="entry-title">Shopping Status</h2>
									</div>
									<!-- Start Table -->
									
<?php 

$sslc = new SSLCommerz();
$currency = "BDT";
$amount = $_SESSION['TOTAL_PRICE'];
$transaction_id = $_SESSION['SSC_trx_id'];

# PASS THE TRANSACTION ID , AMOUNT, CURRENCY TYPE FROM YOUR SYSTEM (NOT WHICH ARE RETURNED BY SSLCOMMERZ)
$validation = $sslc->orderValidate($transaction_id, $amount, $currency, $_POST);

# EXAMPLE TO TEST
$validation = $sslc->orderValidate($_POST['tran_id'], $_POST['amount'], $_POST['currency_type'], $_POST);


if($validation == true)
	echo '<div class="alert alert-success">Your order has been received Successfully</div>';
else
	echo '<div class="alert alert-danger">Sorry! Unable to process your order! Payment failed!</div>';
?>
										
									
									<!-- End Table -->
									<!-- Accordion end -->
									<div class="row">
										<div class="col-sm-4 col-sm-offset-8">
											
										</div>
									</div>
									<div class="shopping-checkout">
										<a href="index" class="btn btn-default pull-left">Continue Shopping</a>
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