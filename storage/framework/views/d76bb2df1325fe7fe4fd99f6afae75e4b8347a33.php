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
                                    <th scope="col">#</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th> 
                                    <th scope="col">Status</th>                                  
                                    <th scope="col">COMPLETION</th>
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                               
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary2" >
                                    <label for="primary2"></label>
								  </div>
								</th>
								<td>
									<img src="<?php echo e(asset('assets/img/avatars/1.jpg')); ?>" alt="user avatar" class="customer-img rounded-circle">
								</td>
                                    <td><a href="<?php echo e(route('view_profile')); ?>">Sonya Frost</a></td>
                                    <td>+555444555</td>
                                    <td>
										  <span class="badge badge-pill badge-danger">Pending</span>
                                          </span>
                                        </td>
                                        <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                                           </div>
                                        </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary3" >
                                    <label for="primary3"></label>
                                  </div></th>
                                    <td><img src="<?php echo e(asset('assets/img/avatars/2.jpg')); ?>" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Sara Jen</td>
                                    <td>+555222333</td>
									<td><span class="badge badge-pill badge-success">Complete</span></td>
								     <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                                           </div>
                                        </td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary5" >
                                    <label for="primary5"></label>
                                  </div></th>
                                    <td><img src="<?php echo e(asset('assets/img/avatars/7.jpg')); ?>" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Colleen Hurst</td>
									<td>+555222444</td>
									<td><span class="badge badge-pill badge-info">on schedule</span></td>

                                    <td>
                                     <div class="progress shadow" style="height: 4px;">
                                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 85%"></div>
                                       </div>
                                            </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary4" >
                                    <label for="primary4"></label>
                                  </div></th>
                                    <td><img src="<?php echo e(asset('assets/img/avatars/4.jpg')); ?>" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Herrod Chandler</td>
                                    <td>+555222888</td>
									<td><span class="badge badge-pill badge-warning">delayed</span></td>
                                        <td>
                                 <div class="progress shadow" style="height: 4px;">
                                              <div class="progress-bar gradient-orange" role="progressbar" style="width: 70%"></div>
                                           </div>
                                        </td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light"><i class="fa fa-edit"></i></button>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button>
                                      
                                      </td>
                                    
                                </tr>
                                
                                
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