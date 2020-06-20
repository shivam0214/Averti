<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User List</h3>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title"></h4>
							<div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
									<input type="text" name="s">
								</div>
							</div>
						</div>
						<div class="box-body no-padding">
							<div class="table-responsive">
							<table class="table">
                        <thead>
                          <tr>
                                    <th scope="col"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div></th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th> 
                                    <th scope="col">Status</th>                                  
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
								<td scope="row"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div>
								</td>
								<td><img src="<?php echo e(asset('assets/img/avatars/1.jpg')); ?>" alt="user avatar" class="customer-img rounded-circle"><?php echo e($record['single']['profile']); ?></td>
								<td><a href="<?php echo e(route('view_profile')); ?>"><?php echo e($record['name']); ?> </a></td>
								<td><?php echo e($record['single']['phone_no']); ?></td>
								<td><span class="badge badge-pill badge-danger">Pending</span></td>
								<td><?php echo e($record['single']['city']); ?></td>
								
                
								<td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button></td>
							</tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                   		</div>
						</div>	
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/listuser.blade.php ENDPATH**/ ?>