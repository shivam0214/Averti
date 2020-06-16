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
    <link rel="icon" href="https://www.multipurposethemes.com/admin/florence-admin-template/images/favicon.ico">	
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary">
<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/layouts/app.blade.php ENDPATH**/ ?>