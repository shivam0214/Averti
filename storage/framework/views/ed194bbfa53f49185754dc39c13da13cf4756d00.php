<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Invitation for meeting by Advisor</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
        <?php $__currentLoopData = $invites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_advisor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="row">
                <div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar avatar-lg status-success">
                      <img src="<?php echo (($r_advisor['user']['single']['profile_image'])!= NULL) ? url($r_advisor['user']['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
					  </span>                            
					  <div class="media-body">
                      <input type="hidden" value="<?php echo e($r_advisor->id); ?>" name="id">
					<h5><p><strong><?php echo e($r_advisor['user']['name']); ?></strong> </p></h5>
						<p><?php echo e($r_advisor['user']['email']); ?></p>
                        <p>Time <?php echo e(date('Y-m-d',strtotime($r_advisor['mymeeting']['start_time']))); ?> <?php echo e(date('H-i a',strtotime($r_advisor['mymeeting']['start_time']))); ?></p>
						<div class="d-inline-block pull-right mt-10">
						  <a href="<?php echo e(route('allmeeting',$r_advisor['mid'])); ?>" class="btn btn-rounded btn-sm btn-success m-5">Start</a>
						</div>
					  </div>
                    </div>		
				</div>		
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/zoom/invited.blade.php ENDPATH**/ ?>