<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Invoice List</h3>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-xl-10 col-lg-9 col-12">
				<div class="box">
					<div class="box-header with-border">						
						<h4 class="box-title">Invoice List</h4>
						<h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
					</div>
					<div class="box-body">						
						<div class="table-responsive">

							<table id="example" class="table table-lg invoice-archive">
								<thead>
									<tr>
										<th>#</th>
										<th>Period</th>
										<th>Issued to</th>
										<th>Status</th>
										<th>Issue date</th>
										<th>Due date</th>
										<th>Amount</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#0025</td>
										<td>February 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Jacob</a>
												<span class="d-block text-muted">Payment method: Skrill</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold" selected>On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											April 18, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-success">Paid on Mar 16, 2018</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$36,890 <span class="d-block text-muted font-weight-normal">VAT $4,859</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0024</td>
										<td>February 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Mason</a>
												<span class="d-block text-muted">Payment method: Wire transfer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid" selected>Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											April 17, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-warning">5 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$8,854 <span class="d-block text-muted font-weight-normal">VAT $4,785</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0023</td>
										<td>February 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">William</a>
												<span class="d-block text-muted">Payment method: Payoneer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid" selected>Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											April 17, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-primary">27 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$12,854 <span class="d-block text-muted font-weight-normal">VAT $7,845</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0022</td>
										<td>January 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Jayden</a>
												<span class="d-block text-muted">Payment method: Paypal</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel" selected>Canceled</option>
											</select>
										</td>
										<td>
											January 15, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-primary">12 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$458 <span class="d-block text-muted font-weight-normal">VAT $985</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0021</td>
										<td>January 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Noah</a>
												<span class="d-block text-muted">Payment method: Paypal</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue" selected>Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											January 10, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-danger">- 3 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$845 <span class="d-block text-muted font-weight-normal">VAT $98</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0020</td>
										<td>January 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Ethan</a>
												<span class="d-block text-muted">Payment method: Wire transfer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid" selected>Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											January 10, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-secondary">On hold</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$985 <span class="d-block text-muted font-weight-normal">VAT $548</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0019</td>
										<td>January 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Alexander</a>
												<span class="d-block text-muted">Payment method: Paypal</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold" selected>On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											December 26, 2017
										</td>
										<td>
											<span class="badge badge-pill badge-success">Paid on Feb 25, 2018</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$958 <span class="d-block text-muted font-weight-normal">VAT $652</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0018</td>
										<td>January 2018</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Aiden</a>
												<span class="d-block text-muted">Payment method: Skrill</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending" selected>Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											June 17, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-secondary">On hold</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$358 <span class="d-block text-muted font-weight-normal">VAT $652</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0017</td>
										<td>December 2017</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Daniel</a>
												<span class="d-block text-muted">Payment method: Wire transfer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending" selected>Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											May 6, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-warning">2 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$687 <span class="d-block text-muted font-weight-normal">VAT $845</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0016</td>
										<td>December 2017</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Anthony</a>
												<span class="d-block text-muted">Payment method: Paypal</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue" selected>Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											March 7, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-primary">15 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$985 <span class="d-block text-muted font-weight-normal">VAT $365</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0015</td>
										<td>December 2017</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Matthew</a>
												<span class="d-block text-muted">Payment method: Payoneer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid" selected>Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											March 23, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-warning">6 days</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$369 <span class="d-block text-muted font-weight-normal">VAT $85</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0014</td>
										<td>December 2017</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Elijah</a>
												<span class="d-block text-muted">Payment method: Paypal</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending">Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel" selected>Canceled</option>
											</select>
										</td>
										<td>
											March 2, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-secondary">On hold</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$985 <span class="d-block text-muted font-weight-normal">VAT $458</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td>#0013</td>
										<td>November 2017</td>
										<td>
											<h6 class="mb-0">
												<a href="#">Liam</a>
												<span class="d-block text-muted">Payment method: Wire transfer</span>
											</h6>
										</td>
										<td>
											<select name="status" class="form-control" data-placeholder="Select status">
												<option value="overdue">Overdue</option>
												<option value="hold">On hold</option>
												<option value="pending" selected>Pending</option>
												<option value="paid">Paid</option>
												<option value="invalid">Invalid</option>
												<option value="cancel">Canceled</option>
											</select>
										</td>
										<td>
											February 25, 2018
										</td>
										<td>
											<span class="badge badge-pill badge-success">Paid on Feb 15, 2018</span>
										</td>
										<td>
											<h6 class="mb-0 font-weight-bold">$985 <span class="d-block text-muted font-weight-normal">VAT $124</span></h6>
										</td>
										<td class="text-center">
											<div class="list-icons d-inline-flex">
												<a href="#" class="list-icons-item mr-10"><i class="fa fa-eye-slash"></i></a>
												<div class="list-icons-item dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-download"></i> Download</a>
														<a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-remove"></i> Remove</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-3 col-12">
				<div class="box box-inverse box-success">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Invoice</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="font-size-60">2,064</div>
					  <span>Total Invoice</span>
					</div>
				  </div>
				</div>
				<div class="box box-inverse box-primary">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Re Generate Invoice</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="font-size-60">1,738</div>
					  <span>Re Generate Invoice</span>
					</div>
				  </div>				
				</div>
				<div class="box box-inverse box-danger">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Overdue Payment Invoice</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="font-size-60">1100</div>
					  <span>Overdue Payment Invoice</span>
					</div>
				  </div>

				</div>
				<div class="box box-inverse box-warning">
				  <div class="box-body">
					<div class="flexbox">
					  <h5>Pending Invoice</h5>
					  <div class="dropdown">
						<span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
						  <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
						</div>
					  </div>
					</div>

					<div class="text-center my-2">
					  <div class="font-size-60">964</div>
					  <span>Pending</span>
					</div>
				  </div>
				</div>
			</div>
		  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/sales/invoice_list.blade.php ENDPATH**/ ?>