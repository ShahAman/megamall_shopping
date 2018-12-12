<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								<!-- Start Language -->
								<ul class="language">
									<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#"><img class="right-5" src="img/flags/fr.png" alt="#">French</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
											<li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Language -->
								<!-- Start Currency -->
								<ul class="currency">
									<li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
										<ul>
											<li><a href="#">$ EUR</a></li>
											<li><a href="#">$ GBP</a></li>
											<li><a href="#">$ USD</a></li>
										</ul>
									</li>
								</ul>
								<!-- End Currency -->
								<p class="welcome-msg">Welcome <?php echo @$_SESSION['SSC_cust_name']; ?></p>
							</div>
							<!-- Start Top-Link -->
							<div class="top-link">
								<ul class="link">
									<li><a href="my-account.php"><i class="fa fa-user"></i> My Account</a></li>
									<li><a href="wishlist.php"><i class="fa fa-heart"></i> Wish List (0)</a></li>
									<li><a href="checkout.php"><i class="fa fa-share"></i> Checkout</a></li>
									<?php 
										if(empty($_SESSION['SSC_cust_email']))
											echo '<li><a href="account.php"><i class="fa fa-unlock-alt"></i> Login</a></li>';
										else
											echo '<li><a href="?exit=yes"><i class="fa fa-sign-out"></i> Log Out</a></li>';
									?>
								</ul>
							</div>
							<!-- End Top-Link -->
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->