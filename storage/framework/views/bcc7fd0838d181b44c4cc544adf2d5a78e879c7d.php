<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/vendors_css.css')); ?>">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/skin_color.css')); ?>">	
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
  

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>



</body>
</html>
<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/layouts/gesut.blade.php ENDPATH**/ ?>