<?php $__env->startSection('content'); ?> 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Advanced Medias</h3>
					
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
			<div class="row">
                <div class="col-md-6 col-12">
                <form role="form" method="post" action="#">
                  <?php echo csrf_field(); ?>
					<div class="media bg-primary mb-20">
					  <span class="avatar status-success">
					  </span>                            
					  <div class="media-body">
                      <input type="hidden" name="id">
						<p><strong>aa</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p></p>
						<div class="d-inline-block pull-right mt-10">
						  <button type="submit" class="btn btn-rounded btn-sm btn-success m-5">Add Advisor</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>
						</div>
					  </div>
                    </div>
                    </form> 				
				</div>		
            </div>
        </section>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/adviser/user_request.blade.php ENDPATH**/ ?>