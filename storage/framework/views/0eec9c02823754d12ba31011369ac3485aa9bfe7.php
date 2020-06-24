
<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/averti1.jpg')); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('assets/css/vendors_css.css')); ?>">
	<!-- Style-->  
	
    
    <?php if(Auth::user()->role_id==2): ?>
    <link rel="stylesheet" id="<?php echo e(Auth::user()->role_id); ?>" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/skin_color.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/usercss/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/usercss/skin_color.css')); ?>">
    <?php endif; ?>
    <link rel='stylesheet' href="<?php echo e(asset('assets/css/selectdropdown.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.timepicker.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/wizard.css')); ?>">
  <link rel="stylesheet" src="<?php echo e(asset('assets/icons/material-design-iconic-font/css/materialdesignicons.css')); ?>"></link>	

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    
    <style>
.loader {
border: 6px solid #f3f3f3;
    border-radius: 50%;
    border-top: 6px solid #001640;
    border-bottom: 6px solid #001640;
    width: 50px;
    height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.backloader{
    background: #222e4cb0;
    position: absolute;
    width: 93%;
    z-index: 9;
    height: 100%;
    display:none;
    text-align: -webkit-center;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body class="hold-transition <?php if(Auth::user()['role_id']==2): ?> dark-skin <?php else: ?> light-skin <?php endif; ?> sidebar-mini theme-primary">

<?php echo $__env->make('main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('main.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
<?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<script>
 <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
    switch(type){
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>");
            break;

        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>");
            break;

        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;

        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
  <?php endif; ?>
  </script>
    <script>
   var route_prefix = "/filemanager";
  </script>
   <script>
    <?php echo \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')); ?>

  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    // $('#lfm').filemanager('file', {prefix: route_prefix});
  </script>

  <script>
    var lfm = function(id, type, options) {
      let button = document.getElementById(id);

      button.addEventListener('click', function () {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        var target_input = document.getElementById(button.getAttribute('data-input'));
        var target_preview = document.getElementById(button.getAttribute('data-preview'));

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
          var file_path = items.map(function (item) {
            return item.url;
          }).join(',');

          // set the value of the desired input to image url
          target_input.value = file_path;
          target_input.dispatchEvent(new Event('change'));

          // clear previous preview
          target_preview.innerHtml = '';

          // set or change the preview image src
          items.forEach(function (item) {
            let img = document.createElement('img')
            img.setAttribute('style', 'height: 5rem')
            img.setAttribute('src', item.thumb_url)
            target_preview.appendChild(img);
          });

          // trigger change event
          target_preview.dispatchEvent(new Event('change'));
        };
      });
    };

    lfm('lfm2', 'file', {prefix: route_prefix});
  </script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
  <style>
    .popover {
      top: auto;
      left: auto;
    }
  </style>
  <script>
    $(document).ready(function(){

      // Define function to open filemanager window
      var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
      };

      // Define LFM summernote button
      var LFMButton = function(context) {
        var ui = $.summernote.ui;
        var button = ui.button({
          contents: '<i class="note-icon-picture"></i> ',
          tooltip: 'Insert image with filemanager',
          click: function() {

            lfm({type: 'image', prefix: '/filemanager'}, function(lfmItems, path) {
              lfmItems.forEach(function (lfmItem) {
                context.invoke('insertImage', lfmItem.url);
              });
            });

          }
        });
        return button.render();
      };

      // Initialize summernote with LFM button in the popover button group
      // Please note that you can add this button to any other button group you'd like
      $('#summernote-editor').summernote({
        toolbar: [
          ['popovers', ['lfm']],
        ],
        buttons: {
          lfm: LFMButton
        }
      })
    });
  </script>
</body>
</html>
<?php /**PATH G:\averti\resources\views/layouts/app.blade.php ENDPATH**/ ?>