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
					<h5 class="mb-0">{{ Auth::user()->name }}</h5>
				</div>
			</div>
        </div>	
		
      <!-- sidebar menu-->
<ul class="sidebar-menu" data-widget="tree">
 @if(Auth::user()->role_id==2)
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
            <li><a href="{{route('user_request')}}"><i class="ti-more"></i>User Requests</a></li>
          </ul>
        </li>
        	
		  <li>
        <li>
          <a href="{{route('contacts')}}">
            <i class="ti-menu-alt"></i>
			    <span>Contacts</span>
          </a>
        </li>	
        <li class="treeview">
          <a href="#">
            <i class="ti-email"></i>
			<span>Email</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li>
          <a href="{{route('mailer.index')}}">
            <i class="ti-more"></i>
            <span>Mailbox</span>
          </a>
        </li>
     
            <li><a href="{{route('mail_template')}}"><i class="ti-more"></i>Template</a></li>
            <li><a href="{{route('mailtemplist')}}"><i class="ti-more"></i>Template List</a></li>
            <li><a href="{{route('groups')}}"><i class="ti-more"></i>Group</a></li>
          </ul>
        </li>
        
	      <li>
          <a href="#">
            <i class="ti-align-justify"></i>
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
            <li><a  id="createzoom2" onclick="$('#modal-right').modal('show');" href="javascript:void(0)"><i class="ti-more"></i>Create Meeting</a></li>
            <li><a href="{{route('getmeeting')}}"><i class="ti-more"></i>All Meetings</a></li>
            <li><a href="{{route('calender')}}"><i class="ti-more"></i>Event</a></li>
            <li><a href="javascript:void(0)" onclick="Calendly.showPopupWidget('https://calendly.com/shivam-sam');return false;"><i class="ti-more"></i>Calendly api</a></li>
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
            <li><a href="{{route('invoice')}}"><i class="ti-more"></i>Invoice</a></li>
            <li><a href="{{route('invoice_list')}}"><i class="ti-more"></i>Invoice List</a></li>
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
            <li><a href="{{route('booking')}}"><i class="ti-more"></i> Booking Schedule</a></li>
          </ul>
        </li>
       

  @else
       <li>
          <a href="{{route('advisor_request')}}">
            <i class="ti-dashboard"></i>
      <span>Reuest to Advisor</span>
          </a>
        </li>
        <li>
          <a href="{{route('chat')}}">
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
          <a href="{{route('mailer.index')}}">
            <i class="ti-email"></i>
            <span>Mailbox</span>
          </a>
        </li>
     
  <li>
          <a href="{{route('invited')}}">
            <i class="ti-dashboard"></i>
      <span>Meeting Invitation</span>
          </a>
        </li>
         <li>
          <a href="{{route('booknow')}}">
            <i class="ti-dashboard"></i>
      <span>Booking</span>
          </a>
        </li>
@endif
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
 