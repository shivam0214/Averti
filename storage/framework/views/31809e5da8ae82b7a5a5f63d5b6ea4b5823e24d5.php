<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Averti</title>
  <link rel="icon" href="<?php echo e(URL::asset('assets/image/averti1.jpg')); ?>" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?php echo e(asset('assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo e(asset('assets/css/animate.css')); ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="<?php echo e(asset('assets/css/horizontal-menu.css')); ?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo e(asset('assets/css/app-style.css')); ?>" rel="stylesheet"/> 
  <link href="<?php echo e(asset('assets/plugins/fullcalendar/css/fullcalendar.css')); ?>" rel='stylesheet'/> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 
  <script type = "text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js">
    
  </script>
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 
 <?php echo $__env->yieldPushContent('header-scripts'); ?>
 </head>
<style>
  .contain {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  content: "";
  clear: both;
  display: table;
}

.darker {
  content: "";
  clear: both;
  display: table;
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  border-color: #ccc;
  background-color: #ddd;
    float: right;


}
  .time-right {
      float: right;
      color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<body>


<!-- Start wrapper-->
<div id="wrapper">
 
<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link" href="javascript:void();">
        <div class="media align-items-center">
           <img src="assets/image/averti1.jpg" class="logo-icon" alt="logo icon">
          <div class="media-body">
            <h5 class="logo-text">Averti Advisor</h5>
          </div>
        </div>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
    
  </ul>    
  <ul class="navbar-nav align-items-center right-nav-link">

    <li class="nav-item">
       <a class=" nav-link waves-effect waves-light" data-toggle="modal" data-target="#callmodal"><i aria-hidden="true" class="fa fa-user"></i></a>        
     </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Advisor</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">                  
            <h6 class="mt-2 user-title"><?php echo e(Auth::user()->name); ?></h6>
            <p class="user-subtitle"><?php echo e(Auth::user()->email); ?></p>
            </div>            
           </div>           
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-user mr-2"></i><a href="<?php echo e(route('details')); ?>" ><?php echo e(__('Profile')); ?> </a></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i><a href="<?php echo e(route('details')); ?>" > <?php echo e(__('Setting')); ?></li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"> <i class="icon-power mr-2"></i> 
        <a href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?>

        </a><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?></form> 
      </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<!-- start horizontal Menu -->
    <nav>
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		
      <ul id="respMenu" class="horizontal-menu">
  		
  			<li>
                  <a href="<?php echo e(route('home')); ?>">
                      <i class="zmdi zmdi-view-dashboard" aria-hidden="true"></i>
                      <span class="title">Dashboard</span>
                                                    <span class=""></span>

                  </a>
              </li>
  			
              <li>
                  <a href="javascript:;">
                <i class="fa fa-user"></i>                    
                <span class="title">Users</span>
            		                <span class="arrow"></span>

                  </a>
                  <ul>
            <li><a href="<?php echo e(route('add_user')); ?>"><i class="zmdi zmdi-dot-circle-alt"></i> Add User</a></li>
  					<li><a href="<?php echo e(route('user_list')); ?>"><i class="zmdi zmdi-dot-circle-alt"></i> All User</a></li>
  					      </ul>
              </li>

              <li>
                  <a href="<?php echo e(route('new_mail')); ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i>                  
                    <span class="title">Mail</span>
                        <span class=""></span>

                  </a>
              </li>              
              <li>
                  <a class="" href="<?php echo e(route('leads')); ?>">
                      <i class="zmdi zmdi-chart"></i>
                      <span class="title">Leads</span>
                <span class=""></span>

                  </a>
              </li>
  			
  			       <li>
                  <a class="" href="<?php echo e(route('contact')); ?>">
                      <i class="fa fa-user-circle-o"></i>                                
                      <span class="title">Contacts</span>
                      <span class=""></span>
                  </a>
              </li>
  			       <li>
                  <a class="" href="<?php echo e(route('event')); ?>">
                    <i aria-hidden="true" class="fa fa-calendar"></i>                      
                      <span class="title">Event</span>
                      <span class=""></span>
                  </a>
              </li>
  			       <li>
                  <a class="" href="<?php echo e(route('task')); ?>">
                      <i aria-hidden="true" class="fa fa-tasks"></i>                    
                        <span class="title">Task</span>
                        <span class=""></span>
                  </a>
              </li> 
              <li class="float-right">
                    <a class="" href="https://nrji.ca/averti/">
                    
                        <span class="title">Website</span>
                        <span class=""></span>
                  </a>
              </li> 
                           
  	  </ul>
               
    </nav>
    <!-- end horizontal Menu -->
    <!--start overlay-->
	 
    <!-- End container-fluid-->
    
</div>
    <main class="py-5" style="min-height: 550px">
            <?php echo $__env->yieldContent('content'); ?>
   </main>
<!--Start footer-->
<footer class="footer" style="position: relative;">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Averti Advisor
        </div>
      </div>
</footer>
     <div class="modal fade" id="callmodal">
                  <div class="modal-dialog modal-dialog-right">
                    <div class="modal-content animated flipInX">
                      <div class="modal-content">
                      <div class="modal-header">
                        User                                                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="table-responsive">

                    <table class="table">
                        <thead>
                          <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                                <tr>
                                  <th scope="row">
                                    <div class="icheck-material-primary">
                                    <input type="checkbox" id="primary1" >
                                    <label for="primary1"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/8.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Jhon Deo</td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>  
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary2" >
                                    <label for="primary2"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/1.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Sonya Frost</td>
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                      </td>
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary3" >
                                    <label for="primary3"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/2.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Sara Jen</td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary5" >
                                    <label for="primary5"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/7.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Colleen Hurst</td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                      </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row"><div class="icheck-material-primary">
                                    <input type="checkbox" id="primary4" >
                                    <label for="primary4"></label>
                                  </div></th>
                                    <td><img src="assets/img/avatars/4.jpg" alt="user avatar" class="customer-img rounded-circle"></td>
                                    <td>Herrod Chandler</td>
                                    
                                    <td><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                      </td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                      </div>
                      </div>

                    </div>
                    </div>
                  </div>
                </div>
                 <div class="modal fade" id="video-call">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <ul class="nav nav-tabs nav-tabs-primary">
                            <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#video_tabe"><i class="fa fa-video-camera"></i></span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#chat_tabe"> <i class="fa fa-wechat"></i></span></a>
                            </li>
                         </ul>                        
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-6 col-sm-2">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/Uga1-L1GgIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                          </div>
                          <div class="col-md-6 col-sm-2 "> 
                           <div class="contain">  
                                <p>Hello. How are you?</p>
                                <span class="time-left">11:00</span>
                            </div>  
                            <div class="darker">
                              <p class="float-right">Hey! I'm fine. </p><br>
                              <span class="time-right">11:01</span>
                            </div>                              
                            <form  style="margin-top: 80%">
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="Type Message...">
                                   <div class="input-group-append">
                                    <span class="input-group-text"><a href="javascript:;" class="btn btn-primary waves-effect waves-light float-right"><span> <i class="fa fa-send-o"></i></span></a></span>
                                  </div>
                              
                            </form>                      
                          
                        </div>                        
                      </div>
                    </div>
                      
                  </div>
                </div>  
    <!--End footer-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div>
<?php echo $__env->yieldPushContent('footer-scripts'); ?>
 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
	
 <!-- simplebar js -->
  <script src="<?php echo e(asset('assets/plugins/simplebar/js/simplebar.js')); ?>"></script>
  <!-- horizontal-menu js -->
  <script src="<?php echo e(asset('assets/js/horizontal-menu.js')); ?>"></script>
  <!-- loader scripts -->
  <!-- <script src="<?php echo e(asset('assets/js/jquery.loading-indicator.js')); ?>"></script> -->
  <!-- Custom scripts -->
  <script src="<?php echo e(asset('assets/js/app-script.js')); ?>"></script>
  <!-- Chart js -->
  
  <script src="<?php echo e(asset('assets/plugins/Chart.js/Chart.min.js')); ?>"></script>
  <!-- Vector map JavaScript -->
  <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>


  
  <!-- Easy Pie Chart JS -->
  <script src="<?php echo e(asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')); ?>"></script>
  <!-- Sparkline JS -->
  <script src="<?php echo e(asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/jquery-knob/excanvas.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/jquery-knob/jquery.knob.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/form-validation.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/fullcalendar/js/moment.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/fullcalendar/js/fullcalendar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/plugins/fullcalendar/js/fullcalendar-custom-script.js')); ?>"></script>  
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
     <script>
   var route_prefix = "/filemanager";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=ce]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token=<?php echo e(csrf_token()); ?>',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token=<?php echo e(csrf_token()); ?>'
    });
  </script>

  <!-- TinyMCE init -->
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=tm]",
      plugins: [
        "link image"
      ],
      relative_urls: false,
      height: 129,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
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
  <!-- Index js -->
  
</body>
</html>
<?php /**PATH G:\averti\resources\views/main/header.blade.php ENDPATH**/ ?>