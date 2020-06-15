<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
	    <div class="user-profile px-10 py-15">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="<?php echo e(asset('assets/images/averti1.png')); ?>" class="avatar avatar-lg" alt="User Image">
				</div>
				<div class="info ml-10">
					<p class="mb-0">Welcome</p>
					<h5 class="mb-0"><?php echo e(Auth::user()->name); ?></h5>
				</div>
			</div>
        </div>	
		
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li>
          <a href="index.html">
            <i class="ti-dashboard"></i>
			<span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid"></i>
			<span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="extra_calendar.html"><i class="ti-more"></i>Add User</a></li>
            <li><a href="contact_app.html"><i class="ti-more"></i>List User</a></li>
          </ul>
        </li>
        	
		<li>
          <a href="#">
            <i class="ti-email"></i>
			<span>Mailbox</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="ti-layout-grid2"></i>
			<span>Task</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="ti-calendar"></i>
			<span>Event</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="ti-email"></i>
			<span>Chat</span>
          </a>
        </li>
  
		<li class="treeview">
          <a href="#">
            <i class="ti-layout-grid2"></i>
			<span>Apps</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="extra_calendar.html"><i class="ti-more"></i>Calendar</a></li>
            <li><a href="contact_app.html"><i class="ti-more"></i>Contact List</a></li>
            <li><a href="contact_app_chat.html"><i class="ti-more"></i>Chat</a></li>
            <li><a href="extra_taskboard.html"><i class="ti-more"></i>Todo</a></li>
          </ul>
        </li>
		
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
 <?php /**PATH G:\averti\resources\views/main/sidebar.blade.php ENDPATH**/ ?>