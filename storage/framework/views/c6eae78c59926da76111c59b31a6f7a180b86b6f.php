<?php $__env->startSection('content'); ?> 

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

        <?php echo $__env->make('food.food_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <section>
				<!-- /.content -->
	  </div>
  </div>

  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/food/food_layout.blade.php ENDPATH**/ ?>