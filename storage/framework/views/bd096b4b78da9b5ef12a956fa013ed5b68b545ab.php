<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Add Advisor</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_advisor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
                <div class="col-md-6 col-12">
                <form role="form" method="post" action="<?php echo e(route('advisor_request_send')); ?>">
                  <?php echo csrf_field(); ?>
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
                      <img src="<?php echo (($r_advisor['single']['profile_image'])!= NULL) ? url($r_advisor['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="<?php echo e($r_advisor->id); ?>" name="id">
						<p><strong><?php echo e($r_advisor->name); ?></strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p><?php echo e($r_advisor->email); ?></p>
						<div class="d-inline-block pull-right mt-10">
						  <button type="submit" class="btn btn-rounded btn-sm btn-success m-5">Send Request</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/advisor_request.blade.php ENDPATH**/ ?>