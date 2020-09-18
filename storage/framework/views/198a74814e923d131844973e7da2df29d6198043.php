<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User Request</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
		<h4><?php echo e((count($value)==0)?"No Request Found":''); ?></h4>
		<?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<div class="row">
                <div class="col-md-6 col-12">
                <form role="form" method="post" action="<?php echo e(route('accept_userreq')); ?>">
                  <?php echo csrf_field(); ?>
					<div class="media bg-primary mb-20">
					  <span class="avatar status-success">
					  <img src="<?php echo (($r_user['single']['profile_image'])!= NULL) ? url($r_user['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">

					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="<?php echo e($r_user->id); ?>" name="id">
						<p><strong><?php echo e($r_user->name); ?></strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p><?php echo e($r_user->email); ?></p>
						<p><?php echo e($r_user->phone_no); ?></p>

						<div class="d-inline-block pull-right mt-10">
						  <button type="submit" class="btn btn-rounded btn-sm btn-success m-5">Add User</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Cancle</button>
						</div>
					  </div>
                    </div>
                    </form> 				
				</div>		
            </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/Adviser/user_request.blade.php ENDPATH**/ ?>