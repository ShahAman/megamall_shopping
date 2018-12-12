<!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="dashboard"><i class="fa fa-bullhorn"></i> <span>Dashboard</span></a></li>
				
				<?php 
				
				# Superadmin Sales Operator
				
				if($_SESSION['SSA_TYPE'] == "Sales" || $_SESSION['SSA_TYPE'] == "Superadmin") 
				{
					echo '
						<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Invoice</span></a>
							<ul class="sub-menu-list">
								<li><a href="list-invoice"> View Invoices</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Order</span></a>
							<ul class="sub-menu-list">
								<li><a href="list-order"> View Orders</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Customer</span></a>
							<ul class="sub-menu-list">
								<li><a href="list-customer"> View Customer</a></li>
							</ul>
						</li>';
				}
				
				if($_SESSION['SSA_TYPE'] == "Operator" || $_SESSION['SSA_TYPE'] == "Superadmin") 
				{
					echo '
					<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Product</span></a>
						<ul class="sub-menu-list">
							<li><a href="list-product"> View Products</a></li>
							<li><a href="add-product"> Create Product</a></li>
						</ul>
					</li>
					
					<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Sub-Category</span></a>
						<ul class="sub-menu-list">
							<li><a href="list-subcat"> View Sub-Category</a></li>
							<li><a href="add-subcat"> Create Sub-Category</a></li>

						</ul>
					</li>
					
					<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Category</span></a>
						<ul class="sub-menu-list">
							<li><a href="list-category"> View Category</a></li>
							<li><a href="add-category"> Create Category</a></li>

						</ul>
					</li>';
				}
				
				if($_SESSION['SSA_TYPE'] == "Superadmin") 
				{
					echo '<li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Admin</span></a>
						<ul class="sub-menu-list">
							<li><a href="list-admin"> View Admin</a></li>
							<li><a href="add-admin"> Create Admin</a></li>

						</ul>
					</li>
					';
				}

				?>
				
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->