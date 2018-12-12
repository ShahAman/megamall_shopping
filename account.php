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
			<!-- Start Account-Create-Area -->
			<div class="account-create-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="page-menu">
								<li><a href="index.html">Home</a></li>
								<li class="active"><a href="account.html">Account</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group gfont-1">New Customer? Create Account!</h3>
							</div>
						</div>
					</div>
					<?php
					if(isset($_POST['register'])){
						if( !empty($_POST['cname'])||
							!empty($_POST['cemail'])||
							!empty($_POST['cpass'])||
							!empty($_POST['conpass'])||
							!empty($_POST['cphone'])||
							!empty($_POST['gender'])
						){
							if($_POST['cpass'] != $_POST['conpass']){
								echo '<div class="alert alert-danger">Confirm Password doesn\'t match!!!</div>';
							}else{
								@$RegCust = $control->reg_cust($_POST['cname'], $_POST['cemail'], $_POST['cpass'], $_POST['cphone'], $_POST['gender']);
								
								if($RegCust['status'] == true)
								{
									echo '<div class="alert alert-success">Successfully Registered!!!</div>';
								}
							}
						}
						else
							echo '<div class="alert alert-danger">All Fields are required!!!</div>';
					}
					?>
					<div class="account-create">
						<form action="#" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="account-create-box">
										<h2 class="box-info">Personal Information</h2>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p> Name <sup>*</sup></p>
													<input class="form-control" type="text" name="cname"/>
												</div>
											</div>
											
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>Email Address <sup>*</sup></p>
													<input class="form-control" type="email" name="cemail"/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>Password <sup>*</sup></p>
													<input class="form-control" type="password" name="cpass"/>
												</div>
											</div>
										
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>Confirm Password <sup>*</sup></p>
													<input class="form-control" type="password" name="conpass"/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>Phone Number <sup>*</sup></p>
													<input class="form-control" type="number" name="cphone"/>
												</div>
											</div>
											<div class="col-sm-4 col-xs-12">
												<div class="single-create">
													<p>Gender <sup>*</sup></p>
													<input type="radio" name="gender" value="male"> Male&nbsp;
													<input type="radio" name="gender" value="female"> Female&nbsp;
													<input type="radio" name="gender" value="other"> Other&nbsp;
													
												</div>
											</div>
											<!--<div class="col-xs-12">
												<p class="for-newsletter"><input type="checkbox" /> Sign Up for Newsletter</p>
											</div>-->
										</div>
									</div>
									<div class="submit-area">
										<p class="required text-right">* Required Fields</p>
										<button name="register" type="submit" class="btn btn-primary floatright">Register</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group gfont-1">Existing Customer? Login Here</h3>
							</div>
						</div>
					</div>
					<div class="account-create">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-12">
									
									<div class="account-create-box">
										<h2 class="box-info">Login Information</h2>
										<div class="row">
										
<?php 
	@$userDetails = $control->do_login($_REQUEST['username'], $_REQUEST['password']);
	if(isset($_POST['try_login']))
	{
		if($userDetails['status'] == true)
		{
			$_SESSION['SSC_login_time'] = date("Y-m-d H:i:s");
			$_SESSION['SSC_cust_id'] = $userDetails['data']['cust_id'];
			$_SESSION['SSC_cust_name'] = $userDetails['data']['cust_name'];
			$_SESSION['SSC_cust_email'] = $userDetails['data']['cust_email'];
			$_SESSION['SSC_cust_phone'] = $userDetails['data']['cust_phone'];
			echo '<meta http-equiv="refresh" content="0; URL=index" />';
		}
		else
			echo '<div class="alert alert-danger">Please check your Username/Password!</div>';
	}
?>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="single-create">
													<p>Username/Email <sup>*</sup></p>
													<input name="username" class="form-control" type="text" />
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="single-create">
													<p>Password <sup>*</sup></p>
													<input name="password" class="form-control" type="password" />
												</div>
											</div>
										</div>
									</div>
									<div class="submit-area">
										<!--<p class="required text-right">* Required Fields</p>-->
										<button name="try_login" type="submit" class="btn btn-primary floatright">submit</button>
										<a href="/" class="float-left"><span><i class="fa fa-angle-double-left"></i></span> Back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Account-Create-Area -->
			<!-- START BRAND-LOGO-AREA -->
		<?php include("view/brand-logo.php"); ?>	
			<!-- END BRAND-LOGO-AREA -->
			<!-- START SUBSCRIBE-AREA -->
		<?php include("view/subscribe.php"); ?>	
			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END PAGE-CONTENT -->
	<?php include("view/footer.php"); ?>	