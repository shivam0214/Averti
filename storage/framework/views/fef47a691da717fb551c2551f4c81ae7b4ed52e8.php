<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Templates</h3>
				</div>
			</div>
		</div>
<section class="content">
		  <div class="row">
			<div class="col-12">          

			 
			  <div class="box">
				<div class="box-body">
					<h4 class="box-title">Info Table</h4>
					<h6 class="box-subtitle mb-20">To use add class <code>.bg-info</code> in the <code>&lt;thead&gt;</code> and add class <code>.b-1 .border-info</code> in <code>&lt;table&gt;</code></h6>
					<div class="table-responsive">
					<table class="table b-1 border-info">
							<thead class="bg-info">
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Nigam</td>
									<td>Eichmann</td>
									<td>@Sonu</td>
									<td ><a href="javascript:void(0)" class="btn btn-circle btn-success btn-xs mr-10" data-toggle="tooltip" data-original-title="Edit">
										<i class="ti-marker-alt"></i>
									</a><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Deshmukh</td>
									<td>Prohaska</td>
									<td>@Genelia</td>
									<td ><a href="javascript:void(0)" class="btn btn-circle btn-success btn-xs mr-10" data-toggle="tooltip" data-original-title="Edit">
										<i class="ti-marker-alt"></i>
									</a><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Roshan</td>
									<td>Rogahn</td>
									<td>@Hritik</td>
									<td ><a href="javascript:void(0)" class="btn btn-circle btn-success btn-xs mr-10" data-toggle="tooltip" data-original-title="Edit">
										<i class="ti-marker-alt"></i>
									</a><a href="javascript:void(0)" class="btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			 
			  <!-- /.box -->

			</div>
			<!-- /.col-->
		  </div>
		  <!-- ./row -->
		</section>


	  </div>
  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/mail/list.blade.php ENDPATH**/ ?>