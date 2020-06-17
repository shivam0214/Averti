<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome To Our Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 	<meta name="author" content="LabArtisan">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/averti1.jpg')); ?>">
	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/bootstrap-grid.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/all.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/lightcase.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/flaticon/flaticon.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/swiper.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/slick.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/slick-theme.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/jquery.nstSlider.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/wizard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontassets/css/slider.css')); ?>" type="text/css">
    
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/frontassets/css/zInput_default_stylesheet.css')); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

</head>
<body>
<?php echo $__env->make('main.frontheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-4">
    <?php echo $__env->yieldContent('content'); ?>
        </main>
<?php echo $__env->make('main.frontfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/layouts/frontapp.blade.php ENDPATH**/ ?>