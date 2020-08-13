<style>
.formbox {
    border: #41475e 1px solid;
    margin: 30px 0px;
    border-radius: 20px;
    display: inline-block;
    width: 100%;
    overflow: hidden;
}
</style>
<?php $__env->startSection('content'); ?> 

<div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
		
		 <!-- Step wizard -->
		  <div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">HI  <?php echo e(Auth::user()->name); ?></h4>
			</div>
			<!-- /.box-header -->
				<div class="col-lg-8 col-sm-10 col-md-8 col-xs-12 offset-lg-2 offset-md-2 offset-lg-1">

					<form method="POST" action="<?php echo e(route('staff_booking')); ?>" >
							<?php echo csrf_field(); ?>
							<div class="formbox">
						<div class="box-header with-border">
						  <h4 class="box-title">Tell me how you're feeling or select an issue from the list.. </h4>
						</div>
						<!-- /.box-header -->
						<form class="form">
							<div class="box-body">
								
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
                  <label>Select disease..</label>
											<select class="form-control select2" style="width: 100%;" name="disease_id" onChange="getstaff(this.value)">
											<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($record['id']); ?>"><?php echo e($record['disease']); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
                    </div>
								  </div>
								  <div class="col-md-6">
									<div class="form-group">
                  <label>Doctor</label>
											<input type="hidden"  class="form-control" id="staff_id" name="staff_id">
											<input type="hidden"  class="form-control" id="advisor_id" name="advisor_id">
											<input type="text" class="form-control" id="staff_name" name="staff_name">
                                    	</div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-6">
									<div class="form-group">
									  <label>Duration</label>
									  <input type="text" class="form-control" placeholder="Duration" name="duration">
									</div>
								  </div>
								  <div class="col-md-6">
								<div class="form-group">
								<label>Picture</label>
									<div class="input-group">
                						<span class="input-group-btn" >
											<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white form-control">
												<i class="fa fa-picture-o"></i> Upload Image										</a>			
											<input id="thumbnail" class="form-control" type="hidden" name="profile_image"  name="filepath">
										</span>
									</div>	
						    	</div>
								  </div>
								</div>
								
							
								<div class="form-group">
                					<label for="where">Description</label>
								  <textarea rows="5" class="form-control" placeholder="Discription" name="description"></textarea>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer">
						
								<button type="submit" class="btn btn-rounded btn-primary text-white btn-outline pull-right mb-20">
								 Submit
								</button>
							</div>  
						</form>
					  </div>

	</form>
</div>

		  </div>
		  <!-- /.box -->

		
		</section>
		<!-- /.content -->
	  </div>
  </div>
 
<?php $__env->stopSection(); ?>
<script>
function getstaff(id){
//	console.log(id);
	$.ajax({
		type: "GET",
		url: '/getstaff_name',
		data: {disease_id: id,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( data ) {
			$("#staff_name").val(data.result.name)
			$("#staff_id").val(data.result.id)
			$("#advisor_id").val(data.result.perent_id)

		}
	});
}

</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/User/user_staff_booking.blade.php ENDPATH**/ ?>