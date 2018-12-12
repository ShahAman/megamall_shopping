<?php 
require_once("config/default.php");
require_once("control/control.php");
?>

	<?php include("view/header.php"); ?>
    <?php include("view/left-sidebar.php"); ?>
    
    <!-- main content start-->
    <div class="main-content" >

	<?php include("view/header-bar.php"); ?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                View Invoice
            </h3>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
				<section class="panel">
					<header class="panel-heading">
						List of Invoice
						<span class="tools pull-right">
						<a href="javascript:;" class="fa fa-chevron-down"></a>
						<a href="javascript:;" class="fa fa-times"></a>
					 </span>
					</header>
					<div class="panel-body">
						<div class="adv-table">
							<table class="display table table-bordered table-striped" id="dynamic-table">
								<thead>
									<tr>
										<th>No</th>
										<th>Customer Name</th>
										<th>Invoice Total</th>
										<th>Date</th>
										<th>Status</th>
										<th>Trx-date</th>
										<th>Trx-status</th>
										<th class="hidden-phone">Edit</th>
										<th class="hidden-phone">Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$invoiceList = $control->get_invoice();
										$n = 1;
										
										foreach(@$invoiceList['data'] AS $invoiceData)
										{
											echo '
											<tr class="gradeA">
												<td>' . $n . '</td>
												<td>' . $invoiceData['cust_name'] . '</td>
												<td>' . $invoiceData['inv_total'] . '</td>
												<td>' . $invoiceData['inv_date'] . '</td>
												<td>' . $invoiceData['inv_status'] . '</td>
												<td>' . $invoiceData['trx_date']  . '</td>
												<td>' . $invoiceData['trx_status'] . '</td>
												<td><a href="?edit_inv='.$invoiceData['inv_id'].'"><span class="center hidden-phone label label-primary">Edit</span></a>
												</td>
												<td><a href="?del_inv='.$invoiceData['inv_id'].'"><span class="label label-danger">Delete</span></a></td>
											</tr>
											';
											$n++;
										}
									?>
									
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Customer Name</th>
										<th>Invoice Total</th>
										<th>Date</th>
										<th>Status</th>
										<th>Trx-date</th>
										<th>Trx-status</th>
										<th class="hidden-phone">Edit</th>
										<th class="hidden-phone">Delete</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</section>
			</div>
		</div>
        </div>
        <!--body wrapper end-->

<?php include("view/footer.php"); ?>