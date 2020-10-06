<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
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
                                    <th scope="col">Specialization</th>                                  
                                    <th scope="col">Action</th>
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
								<td scope="row"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div>
								</td>
								<td>
                                <img src="<?php echo (($record['single']['profile_image'])!= NULL) ? url($record['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">

											</td>
								<td><a href="#"><?php echo e($record['name']); ?> </a></td>
                                <td><?php echo e($record['single']['phone_no']); ?></td>
                                <td><?php echo e($record['staff_details']['specialization']); ?></td>
								<td>    
                                <a class="btn btn-success waves-effect waves-light" href="<?php echo e(route('view_staff',['id'=>$record->id])); ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger waves-effect waves-light" href="<?php echo e(route('delete_data',['id'=>$record->id])); ?>"><i class="fa fa-trash"></i></a></td>
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

<?php echo $__env->make('food.food_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/health_staff/staff_list.blade.php ENDPATH**/ ?>