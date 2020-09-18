<style>
.modal-right .modal-content{
  height:auto;
}
</style>
 
<script src="<?php echo e(asset('assets/js/custom/zoom.js')); ?>"></script>
<?php echo Form::open(['id'=>'create_meetingform']); ?>

<div class="modal-dialog">
		<div class="modal-content">
    
		  <div class="modal-header">
      
			<h5 class="modal-title">Create Meeting</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="backloader"><div class="loader"></div></div>
            
            <?php echo Form::label('title','Meeting title'); ?>

            <?php echo Form::text("topic",'',['class'=>'form-control']); ?>

            <?php echo Form::label('email','Email'); ?>

            <?php echo Form::email('email','', ['class'=>'form-control']); ?>

            <?php echo Form::label('email','Start Date Time'); ?>

            <input class="form-control" type="datetime-local" value=""  name="start_time" id="example-datetime-local-input">
            <?php echo Form::label('password',''); ?>

            <?php echo Form::password('password', ['class'=>'form-control']); ?>

            <?php echo Form::label('Duration','Duration (Min)'); ?>

            <?php echo Form::number('duration','', ['class'=>'form-control']); ?>

            
            <?php echo Form::label('timezone','Timezone'); ?>


            <select class="form-control" name="timezone">
                
                <?php $__currentLoopData = $timezone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k['name']); ?>"><?php echo e($k['timezome']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </select>
            
            
          <div class="form-check">
          <?php echo Form::checkbox('option_jbh',1, '', ['class'=>'form-check-input','id'=>'defaultCheck1']); ?>

          <?php echo Form::label("defaultCheck1", 'Join Before Host',['class'=>'form-check-lable']); ?>

          </div>
          <div class="form-check">
            <?php echo Form::checkbox('option_host_videot',1, '', ['class'=>'form-check-input','id'=>'defaultCheck2']); ?>

            <?php echo Form::label("defaultCheck2", 'Host join start',['class'=>'form-check-lable']); ?>

          </div>
          <div class="form-check">
            <?php echo Form::checkbox('option_participants_video',1, '', ['class'=>'form-check-input','id'=>'defaultCheck3']); ?>

            <?php echo Form::label("defaultCheck3", 'Participants Video',['class'=>'form-check-lable']); ?>

          </div>  
            
            
            
            
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			
      
      <?php echo Form::submit("Create", ['class'=>'btn btn-primary float-right',"id"=>"createmfm"]); ?>

      
		
      </div>
		
    </div>
	  </div>
    <?php echo Form::close(); ?>  <?php /**PATH G:\averti\resources\views/zoom/index.blade.php ENDPATH**/ ?>