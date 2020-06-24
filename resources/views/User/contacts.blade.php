@extends('layouts.app')

@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Contacts</h3>
				</div>
			</div>
		</div>  

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="box">
					  <div class="media-list media-list-divided media-list-hover">
						<div class="media align-items-center">
						  <span class="badge badge-dot badge-success"></span>
						  <a class="avatar avatar-lg status-success" href="#">
							<img src="{{asset('assets/img/avatars/1.jpg')}}" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Aaron</strong></a>
							  <small class="sidetitle">Online</small>
							</p>
							<p>+017896552</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="action lead" href="{{route('chat')}}" data-toggle="tooltip" title="Message"><i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="{{route('mail')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                            <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>


							
						  </div>
						</div>

						<div class="media align-items-center">

						  <span class="badge badge-dot badge-warning"></span>	

						  <a class="avatar avatar-lg" href="#">
							<img src="{{asset('assets/img/avatars/2.jpg')}}" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Isaiah</strong></a>
							  <small class="sidetitle">Last seen: 2 hours ago</small>
							</p>
							<p>+018967552</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="action lead" href="{{route('chat')}}" data-toggle="tooltip" title="Message">            <i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="{{route('mail')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                            <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>

                            
						  </div>
						</div>

						<div class="media align-items-center">

						  <span class="badge badge-dot badge-success"></span>	

						  <a class="avatar avatar-lg status-warning" href="#">
							<img src="{{asset('assets/img/avatars/3.jpg')}}" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Cameron</strong></a>
							  <small class="sidetitle">Last seen: 12 min ago</small>
							</p>
							<p>+017896482</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="action lead" href="{{route('chat')}}" data-toggle="tooltip" title="Message">            <i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="{{route('mail')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>

                            <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>

                            
						  </div>
						</div>

						<div class="media align-items-center">

						  <span class="badge badge-dot badge-danger"></span>	

						  <a class="avatar avatar-lg status-success" href="#">
							<img src="{{asset('assets/img/avatars/1.jpg')}}" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Eli</strong></a>
							  <small class="sidetitle">Offline</small>
							</p>
							<p>+017896425</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="action lead" href="{{route('chat')}}" data-toggle="tooltip" title="Message">            <i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="{{route('mail')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>

                            <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>

                            
						  </div>
						</div>

						<div class="media align-items-center">

						  <span class="badge badge-dot badge-success"></span>	

						  <a class="avatar avatar-lg status-success" href="#">
							<img src="{{asset('assets/img/avatars/5.jpg')}}" alt="...">
						  </a>

						  <div class="media-body">
							<p>
							  <a href="#"><strong>Charles</strong></a>
							  <small class="sidetitle">Last seen: yesterday</small>
							</p>
							<p>+017898552</p>

							<nav class="nav mt-2">
							  <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-github"></i></a>
							  <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
							</nav>
						  </div>

						  <div class="media-right gap-items">
							<a class="action lead" href="#" data-toggle="tooltip" title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <a class="action lead" href="{{route('chat')}}" data-toggle="tooltip" title="Message">            <i class="fa fa-fw fa-comments"></i></a>
                            <a class="action lead" href="{{route('mail')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>

                            <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>

							
						  </div>
						</div>

					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="box no-shadow">
						<div class="box-body">
						  <a class="btn btn-outline btn-success mb-5 d-flex justify-content-between" href="javascript:void(0)">Online <span class="pull-right">103</span></a>
						  <a class="btn btn-outline btn-danger mb-5 d-flex justify-content-between" href="javascript:void(0)">Offline <span class="pull-right">19</span></a>
						  <a class="btn btn-outline btn-info mb-5 d-flex justify-content-between" href="javascript:void(0)">Available <span class="pull-right">623</span></a>
						  <a class="btn btn-outline btn-primary mb-5 d-flex justify-content-between" href="javascript:void(0)">Private <span class="pull-right">53</span></a>
						  <a class="btn btn-warning mt-10 d-flex justify-content-between" href="javascript:void(0)">All Contacts <span class="pull-right">123</span></a>
						  <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-success mt-10 d-block text-center">+ Add New Contact</a>
					  </div>
					</div>
				</div>				
			</div>
		</section>
		<!-- /.content -->
	  </div>	  
  </div>
  <!-- /.content-wrapper -->
	
  <!-- Popup Model Plase Here -->
	  <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Add Contact</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-md-12">Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<label class="col-md-12">Email</label>
							<div class="col-md-12">
								<input type="email" class="form-control" placeholder="Email">
							</div>
							<label class="col-md-12">Phone</label>
							<div class="col-md-12">
								<input type="tel" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12">Address</label>
							<div class="col-md-12">
								<textarea class="form-control" placeholder=""></textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Add</button>
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

@endsection('content')