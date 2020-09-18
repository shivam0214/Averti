<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
                	<div class="box">
						<div class="box-header with-border">
						<h3 class="page-title">Hi </h3>
                    <p> What's the reason for you visit today?</p>
									</div>
							<div class="box-body no-padding">
                            <div class="col-12">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
							<form method="POST" action="<?php echo e(route('staff_booking')); ?>" >
							<?php echo csrf_field(); ?>

                                 <div class="row">
								 	<div class="col-md-5">
								 		<div class="form-group">
											<label>Select disease..</label>
											<select class="form-control select2" style="width: 100%;" name="disease_id" onChange="getstaff(this.value)">
											<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($record['id']); ?>"><?php echo e($record['disease']); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
                                    	</div>
                                	</div> 
									<div class="col-md-5">
								 		<div class="form-group">
											<label>Doctor</label>
											<input type="hidden"  class="form-control" id="staff_id" name="staff_id">
											<input type="hidden"  class="form-control" id="advisor_id" name="advisor_id">

											<input type="text" class="form-control" id="staff_name" name="staff_name">
                                    	</div>
                                	</div> 
								</div>	
                                <div class="row">
									<div class="col-md-5">
										<div class="form-group">
										<label for="where">Description</label>
										<input type="textarea" class="form-control" id="description" name="description" >
										</div>
                            		</div>
									<div class="col-md-5">
                                		<div class="form-group">
											<span class="input-group-btn">
											<a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
												<i class="fa fa-picture-o"></i> Upload Picture
											</a>							
											<input id="thumbnail" class="form-control" type="text" name="profile_image"  name="filepath">
											</span>
						    			</div>
									</div>	
                                </div>   
                                <div class="row">
									<div class="form-group">
									<button type="submit" class="btn btn-primary float-right">Submit</button>	
									</div>
                                </div>
                            </form>
								</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
						</div>	
					</div>
				</div>
			</div>	
		</section>
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
			console.log(data);
		//	document.getElementById("to").innerHTML = data.mail_result;
			$("#staff_name").val(data.result.name)
			$("#staff_id").val(data.result.id)
			$("#advisor_id").val(data.result.perent_id)
		}
	});
}

</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/user_disease/user_issue.blade.php ENDPATH**/ ?>