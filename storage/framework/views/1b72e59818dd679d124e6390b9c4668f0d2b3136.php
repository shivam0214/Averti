
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Averti </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/slicknav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/gijgo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/animated-headline.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/gym_assets/css/style.css')); ?>">
</head>
<body class="black-bg">
<?php echo $__env->make('main.gym_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-4">
    <?php echo $__env->yieldContent('gym_content'); ?>
        </main>
<?php echo $__env->make('main.gym_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->yieldPushContent('scripts-footer'); ?>

</body>
</html><?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/layouts/gym_app.blade.php ENDPATH**/ ?>