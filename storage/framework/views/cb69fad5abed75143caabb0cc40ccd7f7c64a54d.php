<?php echo Form::open(['id'=>'sendinvite']); ?>

<div class="modal-header">
      
			<h5 class="modal-title">Invite User</h5>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="backloader"><div class="loader"></div></div>
            
            <?php echo Form::hidden('mid', $mid); ?>

            
            <?php echo Form::label('title','Meeting title'); ?>

            <?php echo Form::text("topic",'',['class'=>'form-control']); ?>

           
            <?php echo Form::label('user','Chooser users'); ?>


            <select class="" id="multiple" name="users[]" multiple>
                
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k['id']); ?>"><?php echo e($k['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </select>
            
            <br>
            <br>
         
      
      <?php echo Form::submit("Invite", ['class'=>'btn btn-primary float-right',"id"=>""]); ?>

   
		
      </div>
         <?php echo Form::close(); ?>  
         <br>
<script>
$(document).ready(function(){  
new SlimSelect({
select: '#multiple', 
});

$('#sendinvite').submit(function(e) {
    e.preventDefault();
    var inputData = new FormData($(this)[0]);
    $.ajax({
            url:'/sendinvite',
            type:'POST',
            dataType: 'json',
            data:inputData,
            processData:false,
            contentType:false,
             beforeSend: function () {
                $('.backloader').show();
              },
              complete: function () {
                $('.backloader').hide();
              },
            success: function (response) {
                
              if(response.status==1){
                $('#modal-right').modal('hide');
                toastr.success(response.msg);
                setTimeout(function(){ window.location.href = "/getmeeting"; }, 3000);
              }else{
                toastr.error(response.message);
              }
             
            }
      });
  });
  });
</script>		<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/zoom/invite.blade.php ENDPATH**/ ?>