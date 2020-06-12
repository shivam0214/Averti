<?php $__env->startSection('content'); ?> 
<body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo e(asset('assets/images/auth-bg/bg-4.jpg')); ?>)" data-overlay="5">
<section class="error-page h-p100">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center text-center">
			  <div class="col-lg-7 col-md-10 col-12">
				  <div class="rounded30 bg-white p-50 shadow-lg">
					  <img src="<?php echo e(asset('assets/images/auth-bg/404.jpg')); ?>" class="max-w-200" alt="" />
					  <h1>Page Not Found !</h1>
					  <h3>looks like, page doesn't exist</h3>
					  <div class="my-30"><a href="index.html" class="btn btn-danger">Back to dashboard</a></div>				  

					  <form class="search-form mx-auto mt-30 w-p75">
						<div class="input-group rounded5 overflow-h">
						  <input type="text" name="search" class="form-control" placeholder="Search">
						  <div class="input-group-prepend">
							  <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="fa fa-search"></i></button>
							</div>
						</div>
						<!-- /.input-group -->
					  </form>
				  </div>
			  </div>				
		  </div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gesut', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\averti\resources\views/notfound.blade.php ENDPATH**/ ?>