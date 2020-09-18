<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Contacts</h3>
				</div>
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="box">
					  <div class="media-list media-list-divided media-list-hover">
					  	<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="media align-items-center">
						  <a class="avatar avatar-lg status-success" href="#">
						  <img src="<?php echo (($record['profile_image'])!= NULL) ? url($record['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong><?php echo e($record['name']); ?></strong></a>
							  <small class="sidetitle">Online</small>
							</p>
							<p>+<?php echo e($record['phone_no']); ?></p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="action lead" href="<?php echo e(route('chat')); ?>" data-toggle="tooltip" title="Message"><i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="<?php echo e(route('mailer.index')); ?>" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                            <a class="action lead" href="<?php echo e(route('delete_contact',['id'=>$record->id])); ?>" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
						  </div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="box no-shadow">
						<div class="box-body">
						  <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Online <span class="pull-right">103</span></a>
						  <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Offline <span class="pull-right">19</span></a>
						  <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Available <span class="pull-right">623</span></a>
						  <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Private <span class="pull-right">53</span></a>
						  <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">All Contacts <span class="pull-right">123</span></a>
						  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-success mt-10 d-block text-center">+ Add New Contact</a>
					  </div>
					</div>
				</div>				
			</div>
		</section>
		<!-- /.content -->
	  </div>	  
  </div>
  <!-- /.content-wrapper -->
	
  <!-- Popup Model Plase Here -->
	  <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Add Contact</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="POST" action="<?php echo e(route('add_contact')); ?>">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<label class="col-md-12">Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="name" placeholder="Name">
							</div>
							<label class="col-md-12">Email</label>
							<div class="col-md-12">
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
							<label class="col-md-12">Phone</label>
							<div class="col-md-12">
								<input type="tel" class="form-control" name="phone_no" placeholder="Phone">
							</div>
							<label class="col-md-12">Picture</label>

							<div class="col-md-12">
											<span class="input-group-btn">
											<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
												<i class="fa fa-picture-o"></i> Upload Picture
											</a>							
											<input id="thumbnail" class="form-control" type="text" name="profile_image"  name="filepath">
											</span>
						    			</div>
							<label class="col-md-12">Faceebook</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="social[facebook][]" placeholder="Facebook">
							</div>
							<label class="col-md-12">Twiter</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="social[twiter][]" placeholder="Twiter">
							</div>
							<label class="col-md-12">Instagram</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="social[instagram][]" placeholder="Instagram">
							</div>
							<label class="col-md-12">Linkedin</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="social[linkedin][]" placeholder="Linkedin">
							</div>

						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Add</button>
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div>
				</form>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/contacts.blade.php ENDPATH**/ ?>