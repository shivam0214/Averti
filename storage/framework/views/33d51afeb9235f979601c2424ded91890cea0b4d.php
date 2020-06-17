<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome To Our Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<meta name="author" content="LabArtisan">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/x-icon.png')); ?>">
	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-grid.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/all.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/lightcase.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/flaticon/flaticon.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/swiper.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick-theme.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jquery.nstSlider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<?php echo $__env->make('frontmain.frontheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
        </main>
<?php echo $__env->make('frontmain.frontfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/Frontview/frontmain/frontapp.blade.php ENDPATH**/ ?>