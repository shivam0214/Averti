<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Create Meeting</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			
            <?php echo Form::open(); ?>

            <?php echo Form::label('title','Meeting title'); ?>

            <?php echo Form::text("meetingtitle",'',['class'=>'form-control']); ?>

            <?php echo Form::label('email','Email'); ?>

            <?php echo Form::email('email','', ['class'=>'form-control']); ?>

            <?php echo Form::label('email','Start date'); ?>

            <?php echo Form::date('startdate','', ['class'=>'form-control']); ?>

            <?php echo Form::label('email','Start Time'); ?>

            <?php echo Form::text('starttime','', ['class'=>'form-control timepicker']); ?>

            <div class="form-group">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
						<input type="text" class="form-control timepicker">
					  </div>
					  <!-- /.input group -->
					</div>
            
            
            
            <?php echo Form::label('Timezone','timezone'); ?>


            <select class="form-control" name="timezone">
                
                <?php $__currentLoopData = $timezone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k['name']); ?>"><?php echo e($k['timezome']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </select>
            
            
            <?php echo Form::close(); ?>

            
            
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary float-right">Create</button>
		  </div>
		</div>
	  </div><?php /**PATH G:\averti\resources\views/zoom/index.blade.php ENDPATH**/ ?>