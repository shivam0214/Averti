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
                        
                        <?php $__currentLoopData = $meetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row"><?php echo e($record['meeting_id']); ?></th>
                            <td><?php echo e($record['topic']); ?></td>
                            <td><?php echo e($record['status']); ?></td>
                            <td><?php echo e(date('Y-m-d',strtotime($record['start_time']))); ?>  <?php echo e(date('H-i a',strtotime($record['start_time']))); ?></td>
                            <td><a href="javascript:void(0)" role="<?php echo e($record['meeting_id']); ?>" class="btn btn-primary waves-effect waves-light invite" >Invite</a> <a  class="btn btn-primary waves-effect waves-light" href="<?php echo e(route('allmeeting',$record['meeting_id'])); ?>">Start</a></td>
                            
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/zoom/list.blade.php ENDPATH**/ ?>