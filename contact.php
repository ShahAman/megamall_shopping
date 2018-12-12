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
							<li><a href="index.php">Home</a></li>
							<li class="active"><a href="#">Contact Us</a></li>
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
													<img class="primary-img" src="img/product/small/3.jpg" alt="Product">
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
													<img class="primary-img" src="img/product/small/4.jpg" alt="Product">
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
													<img class="primary-img" src="img/product/small/7.jpg" alt="Product">
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
													<img class="primary-img" src="img/product/small/8.jpg" alt="Product">
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
									</div>
								</div>
							</div>
						</div>
						<!-- END SMALL-PRODUCT-AREA -->
					</div>
					<div class="col-md-9">
						<!-- Start Map area -->
						<div class="map-area">
							<div id="googleMap" style="width:100%;height:350px;"></div>
						</div>
						<!-- End Map area -->
						<!-- Start Contact-Message -->
						<div class="contact-message">
							<fieldset>
								<form method="post" action="https://devitems.com/tf/malias-preview/malias/mail.php">
									<legend>Contact Form</legend>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>Your Name</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="name"/>
											</div>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>E-Mail Address</label>
											<div class="col-sm-10">
												<input class="form-control" type="email" name="email"/>
											</div>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="row">
											<label class="col-sm-2 control-label"><sup>*</sup>Enquiry</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="10" name="message"></textarea>
											</div>
										</div>
									</div>
									<div class="buttons pull-right">
										<input class="btn btn-primary" type="submit" value="submit" name="submit"/>
									</div>
								</form>
							</fieldset>
						</div>
						<!-- End Contact-Message -->
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