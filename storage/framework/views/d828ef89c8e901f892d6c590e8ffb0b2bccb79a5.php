<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
			
		<!-- Main content -->
		<section class="content">		    
			 <div class="row">
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Users</h4>
						</div>
						<div class="box-body">
							<div id="bar-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">User List</h4>
						</div>
						<div class="box-body">
							<div id="column-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">User Calling</h4>
						</div>
						<div class="box-body">
							<div id="donut-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Chat Details</h4>
						</div>
						<div class="box-body">
							<div id="pie-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">User Recordings</h4>
						</div>
						<div class="box-body">
							<div id="stacked-bar"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title">Task</h4>
						</div>
						<div class="box-body">
							<div id="stacked-column"></div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /.content -->
  	 
		<section class="content">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="box overflow-hidden">
						<div class="box-header">
							<h4 class="box-title">Total Revenue</h4>
						</div>
						<div class="box-body p-0">
							<div class="px-30 py-20">
								<h4 class="text-white mb-0">$346,042k </h4>
								<p class="text-white-50"><small>Got From 1456 customers</small></p>
							</div>
							<div id="spark2"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="p-10"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pb-30 pt-0">
							<div class="d-flex justify-content-between align-items-center">
								<div><i class="fa fa-money text-success font-size-30"></i></div>
								<div>
									<h2 class="text-white mb-0">$7,232.00</h2>
									<p class="text-white-50 mb-0"><small>Operations Income</small></p>
								</div>
							</div>
						</div>
					</div>
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="p-10"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pb-30 pt-0">
							<div class="d-flex justify-content-between align-items-center">
								<div><i class="fa fa-money text-primary font-size-30"></i></div>
								<div>
									<h2 class="text-white mb-0">$4,329.00</h2>
									<p class="text-white-50 mb-0"><small>Pharmacy Income</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>				
				<div class="col-lg-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Advisor History</h4>
						</div>
						<div class="box-body">
							<div id="patient_history"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Time Admitted</h4>
						</div>
						<div class="box-body">
							<div id="admitted-trend"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">User By Division</h4>
						</div>
						<div class="box-body">
							<div class="d-flex align-items-center justify-content-between pb-10 pr-20">
								<h5 class="my-0 text-light"><i class="fa fa-home mr-50 w-20"></i>Division</h5>
								<p class="mb-0 text-light">PT.</p>
							</div>
							<div class="pat-div">								
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-heart"></i>Cardiology</h5>
									<p class="mb-0">74</p>
								</div>								
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-user"></i>Neurology</h5>
									<p class="mb-0">32</p>
								</div>								
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-user-md"></i>Surgery</h5>
									<p class="mb-0">15</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-medkit"></i>Covid</h5>
									<p class="mb-0">35</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-stethoscope"></i>General</h5>
									<p class="mb-0">158</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-plus-square"></i>Oncology</h5>
									<p class="mb-0">85</p>
								</div>							
								<div class="d-flex align-items-center justify-content-between my-15 pr-20">
									<h5 class="my-0"><i class="mr-50 w-20 fa fa-wheelchair-alt"></i>Emergency</h5>
									<p class="mb-0">45</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box overflow-hidden bg-primary">
						<div class="box-body p-0">
							<div class="px-30 pt-20">
								<h4 class="text-white mb-0">34,042 </h4>
								<p class="text-white-50">User this month</p>
							</div>
							<div id="statisticschart3"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-primary-light rounded-circle">
									<i class="text-primary mr-0 font-size-20 fa fa-heartbeat"></i>
								</div>
								<div>
									<h3 class="mb-0 font-weight-500">4,235</h3>
									<p class="text-mute mb-0">Total User</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-info-light rounded-circle">
									<i class="text-info mr-0 font-size-20 fa fa-user-md"></i>
								</div>
								<div>
									<h3 class="mb-0 font-weight-500">394</h3>
									<p class="text-mute mb-0">Available Staff</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-warning-light rounded-circle">
									<i class="text-warning mr-0 font-size-20 fa fa-money"></i>
								</div>
								<div>
									<h3 class="mb-0 font-weight-500">$2,526</h3>
									<p class="text-mute mb-0">Avg Treat. Costs</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 col-12">
					<div class="box">
						<ul class="box-controls pull-right">
						  <li class="dropdown">
							<a data-toggle="dropdown" href="#" class="px-10 pt-5"><i class="ti-more-alt"></i></a>
							<div class="dropdown-menu dropdown-menu-right">
							  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
							  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
							  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
							</div>
						  </li>
						</ul>
						<div class="box-body pt-0">
							<div class="d-flex align-items-center justify-content-between">
								<div class="icon bg-danger-light rounded-circle">
									<i class="text-danger mr-0 font-size-20 fa fa-ambulance"></i>
								</div>
								<div>
									<h3 class="mb-0 font-weight-500">35</h3>
									<p class="text-mute mb-0">Available Cars</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Out User vs. In User Trend</h4>
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li class="dropdown">
								<button class="btn btn-rounded btn-outline btn-primary dropdown-toggle px-10 " data-toggle="dropdown" href="#">Show By Months</button>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-lg-8 col-12">
									<div id="patients-trend"></div>
								</div>
								<div class="col-lg-4 col-12">
									<div id="progressbar1" class="mx-auto w-200 my-25 position-relative text-center"></div>
									<h4 class="text-center">Hospital Bed Availability</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">User by Gender</h4>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div id="progressbar2" class="mx-auto w-200 my-25 position-relative text-center"></div>
									<h4 class="text-center">Male</h4>
								</div>
								<div class="col-lg-6 col-12">
									<div id="progressbar3" class="mx-auto w-200 my-25 position-relative text-center"></div>
									<h4 class="text-center">Female</h4>
								</div>
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

  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/Adviser/dashboard.blade.php ENDPATH**/ ?>