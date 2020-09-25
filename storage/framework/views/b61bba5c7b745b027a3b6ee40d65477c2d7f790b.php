<!DOCTYPE html>
<head>
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo e(Auth::user()['name']); ?></title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.9/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.9/css/react-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<style>
    body {
        padding-top: 50px;
    }
    .light-logo img{
        width: 200px;
        height: 70px;
    }
</style>

<nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

           <?php if(Auth::user()->role_id==2): ?>
			  <span class="light-logo"><img src="<?php echo e(asset('assets/images/averti1.png')); ?>" alt="logo"></span>
			  <?php else: ?>
			  <span class="light-logo"><img src="<?php echo e(asset('assets/images/averti.png')); ?>" alt="logo"></span>
			  <?php endif; ?>
		  </div>
        </div>
        <div id="navbar">
            <form class="navbar-form navbar-right" id="meeting_form">
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" value="<?php echo e($name); ?>" placeholder="Name" class="form-control" required>
                </div>
                
          <input type="hidden" value="oncall/<?php echo e($mid); ?>" id="url">
			<input type="hidden" value="/status/<?php echo e($mid); ?>" id="rurl">
			<input type="hidden" value="<?php echo e($mid); ?>" id="meeting_number">
			<input type="hidden" value="<?php echo e($p); ?>" id="meeting_pwd">
            <input type="hidden" value="<?php echo e($role); ?>" id="meeting_role">
                
                
                <button type="submit" class="btn btn-primary" id="join_meeting">Join</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


 <script src="https://source.zoom.us/1.7.9/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.7.9/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.7.9/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.7.9/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.7.9/lib/vendor/jquery.min.js"></script>
    <script src="https://source.zoom.us/1.7.9/lib/vendor/lodash.min.js"></script>

    <!-- import ZoomMtg -->
    <script src="https://source.zoom.us/zoom-meeting-1.7.9.min.js"></script>
<script src="<?php echo e(asset('js/tool.js')); ?>"></script>
<script src="<?php echo e(asset('js/index.js')); ?>"></script>

<script>
   
</script>
</body>
</html>
<?php /**PATH G:\averti\resources\views/zoom/hostmeeting.blade.php ENDPATH**/ ?>