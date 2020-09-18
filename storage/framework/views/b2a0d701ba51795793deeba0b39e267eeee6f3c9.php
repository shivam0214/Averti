<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<?php if(session()->has('messgae')): ?>
			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <?php echo e(session()->get('messgae')); ?> 
			</div>
		<?php endif; ?>

		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Mail Templates</h3>
				</div>
			</div>
		</div>
		<section class="content">
		  <div class="row">
			<div class="col-12">          
			  <div class="box">
				<div class="box-body">
					<h4 class="box-title">Your Mail Templates</h4>
					<div class="table-responsive">
					<table class="table b-1 border-info">
							<thead class="bg-info">
								<tr>
									<th>#</th>
									<th>Templates Title</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e(++$k); ?></td>
									<td><?php echo e($val->title); ?></td>
									<td id="delete<?php echo e($val->id); ?>"><a href="<?php echo e(route('templateedit',['templateid'=>$val->id])); ?>" class="btn btn-circle btn-success btn-xs mr-10" data-toggle="tooltip" data-original-title="Edit">
										<i class="ti-marker-alt"></i>
									</a><a href="javascript:void(0)" onClick="deleteTemplate(<?php echo e($val->id); ?>)" class="btn btn-circle btn-danger btn-xs" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash"></i></a></td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			 
			  <!-- /.box -->

			</div>
			<!-- /.col-->
		  </div>
		  <!-- ./row -->
		</section>


	  </div>
  </div>
  
<?php $__env->stopSection(); ?>
<script>
function deleteTemplate(val){
	// alert(val);
	$.ajax({
		type: "DELETE",
		url: '/deletetemplate',
		data: {templateid: val,"_token": "<?php echo e(csrf_token()); ?>"},
		success: function( msg ) 
		{
			console.log(msg);
			$("#delete"+val).parent('tr').hide();
		}
	});

}
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/mail/templatelist.blade.php ENDPATH**/ ?>