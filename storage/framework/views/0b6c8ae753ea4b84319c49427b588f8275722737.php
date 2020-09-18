<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Averti</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/foodassets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/foodassets/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/foodassets/css/animsition.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/foodassets/css/animate.css')); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/foodassets/css/style.css')); ?>" rel="stylesheet"> </head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<body class="home">
<?php echo $__env->make('main.food_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-4">
    <?php echo $__env->yieldContent('food_content'); ?>
        </main>
<?php echo $__env->make('main.food_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->yieldPushContent('scripts-footer'); ?>
</body>
</html>
<?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/layouts/food_app.blade.php ENDPATH**/ ?>