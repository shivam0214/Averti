<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
	    <div class="user-profile px-10 py-15">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="#" class="avatar avatar-lg" alt="User Image">
				</div>
				<div class="info ml-10">
					<p class="mb-0">Welcome</p>
					<h5 class="mb-0">{{ Auth::user()->name }}</h5>
				</div>
			</div>
        </div>	
		
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li>
          <a href="{{route('dashboard')}}">
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
            <li><a href="{{route('add_user')}}"><i class="ti-more"></i>Add User</a></li>
            <li><a href="{{route('user')}}"><i class="ti-more"></i>List User</a></li>
          </ul>
        </li>
        	
		<li>
          <a href="{{route('mail')}}">
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
          <a href="{{route('calender')}}">
            <i class="ti-calendar"></i>
			<span>Event</span>
          </a>
        </li>
        <li>
          <a href="{{route('chat')}}">
            <i class="mdi mdi-message-text"></i>
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
            <li><a href="{{route('booking')}}"><i class="ti-more"></i> Booking Schedule</a></li>
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
		<a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></a>
	</div>
  </aside>
 