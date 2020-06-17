<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
	
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Calendar</h4>
		    	   </div>
     </div>
    <!-- End Breadcrumb-->
  
            <div id='calendar'></div>
			
			<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
 </div> 

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/event/event.blade.php ENDPATH**/ ?>