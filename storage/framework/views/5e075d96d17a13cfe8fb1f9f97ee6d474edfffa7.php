<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
	    <div class="user-profile px-10 py-15">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="<?php echo ((Auth::user()->single->profile_image)!= NULL) ? url(Auth::user()->single->profile_image) : url(asset('assets/img/avatars/user.png')); ?>"
          class="avatar avatar-lg">
        </div>
				<div class="info ml-10">
					<p class="mb-0">Welcome</p>
					<h5 class="mb-0"><?php echo e(Auth::user()->name); ?></h5>
				</div>
			</div>
        </div>	
		
      <!-- sidebar menu-->
<ul class="sidebar-menu" data-widget="tree">
 <?php if(Auth::user()->role_id==2): ?>
        <li>
          <a href="<?php echo e(route('dashboard')); ?>">
            <i class="ti-dashboard"></i>
      <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ti-user"></i>
			<span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('add_user')); ?>"><i class="ti-more"></i>Add User</a></li>
            <li><a href="<?php echo e(route('user')); ?>"><i class="ti-more"></i>List User</a></li>
          </ul>
        </li>
        	
		  <li>
        <li>
          <a href="<?php echo e(route('contacts')); ?>">
            <i class="ti-menu-alt"></i>
			    <span>Contacts</span>
          </a>
        </li>	
	    <li>
          <a href="<?php echo e(route('mailer.index')); ?>">
            <i class="ti-email"></i>
            <span>Mailbox</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="ti-align-justify"></i>
			<span>Task</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('calender')); ?>">
            <i class="ti-calendar"></i>
			<span>Event</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('chat')); ?>">
            <i class="ti-comment-alt"></i>
			<span>Chat</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ti-receipt"></i>
			<span>Meet</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Zoom Meeting</a></li>
            <li><a href="#"><i class="ti-more"></i>Event</a></li>
            <li><a href="#"><i class="ti-more"></i>Calendly api</a></li>

          </ul>
        </li>
    
      </li>
      <li class="treeview">
          <a href="#">
            <i class="ti-receipt"></i>
			<span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo e(route('invoice')); ?>"><i class="ti-more"></i>Invoice</a></li>
            <li><a href="<?php echo e(route('invoice_list')); ?>"><i class="ti-more"></i>Invoice List</a></li>
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid2"></i>
			<span>Booking</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a hregf="#"><i class="ti-more"></i>Booking List</a></li>
            <li><a href="<?php echo e(route('booking')); ?>"><i class="ti-more"></i> Booking Schedule</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo e(route('getmeeting')); ?>">
            <i class="fa fa-video-camera"></i>
			<span>Zoom Meeting</span>
          </a>
        </li>

  <?php else: ?>
       <li>
          <a href="<?php echo e(route('advisor_request')); ?>">
            <i class="ti-dashboard"></i>
      <span>Reuest to Advisor</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('chat')); ?>">
            <i class="ti-comment-alt"></i>
			<span>Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="ti-bell"></i>
			<span>Notification</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('mailer.index')); ?>">
            <i class="ti-email"></i>
            <span>Mailbox</span>
          </a>
        </li>
     
  
         <li>
          <a href="<?php echo e(route('booknow')); ?>">
            <i class="ti-dashboard"></i>
      <span>Booking</span>
          </a>
        </li>
<?php endif; ?>
      </ul>
      
    </section>
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a  href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form></a>
	</div>
  </aside>
 <?php /**PATH H:\updateDemitrius\Averti\Averti\resources\views/main/sidebar.blade.php ENDPATH**/ ?>