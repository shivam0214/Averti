<?php
use App\Libraries\Zooms\Myzoom;
 $d = new Myzoom;
        
?>
<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Latest Meeting</h3>
				</div>
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Meeting ID</th>
                            <th scope="col">Topic</th>
                            <th scope="col">status</th>
                            <th scope="col">Date - Time</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(count($meetings['meetings'])==0): ?>
                            <h2 class="">No Meetings Found</h2>
                        <?php endif; ?> 
                        <?php $__currentLoopData = $meetings['meetings']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $meet_details = json_decode($d->getMeetingInfo($record['id']),JSON_OBJECT_AS_ARRAY); ?>
                        
                        
                            <tr>
                            <th scope="row"><?php echo e(str_replace("'",'',$record['id'])); ?></th>
                            <td><?php echo e($record['topic']); ?></td>
                            <td><?php echo e($meet_details['status']); ?></td>
                            <td><?php echo e(date('Y-m-d',strtotime($record['start_time']))); ?>  <?php echo e(date('H-i a',strtotime($record['start_time']))); ?></td>
                            <td><a href="javascript:void(0)" role="<?php echo e($record['id']); ?>" class="btn btn-primary waves-effect waves-light invite" >Invite</a> <a  class="btn btn-primary waves-effect waves-light" href="<?php echo e(route('allmeeting',$record['id'])); ?>">Start</a> <a  class="btn btn-primary waves-effect waves-light" href="<?php echo e(route('deletemeeting',$record['id'])); ?>"><i class="fa fa-trash"></i></a></td>
                            
                            </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                            
                            
                        </tbody>
                    </table>
                    </section>
    </div>
</div>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/zoom/list.blade.php ENDPATH**/ ?>