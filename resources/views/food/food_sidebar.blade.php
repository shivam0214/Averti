<aside  >
    <!-- sidebar-->
    <section class="side ">	
			<div class="d-flex align-items-center">							
				<div class="info ml-10">
				</div>
        </div>	
      <!-- sidebar menu-->
    <ul class="sidenav" data-widget="tree">
        <li class="treeview">
          <a href="#">
          <i class="ti-layout-grid2"></i>
			<span>Food product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('add_product')}}"><i class="ti-more"></i>Add food item</a></li>
            <li><a href="{{route('view_product')}}"><i class="ti-more"></i>View product</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="ti-layout-grid2"></i>
			<span> Health Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li>
          <a href="{{route('add_staff')}}"><i class="ti-more"></i>Add Staff Details</a>
        </li>            
        <li><a href="{{route('staff_list')}}"><i class="ti-more"></i>Staff List</a></li>
        <li>
          <a href="{{route('staff_user')}}"><i class="ti-more"></i>Notification</a>
        </li>        
          </ul>
        </li>
                
      </ul>  
          
    </section>
  </aside>
 