@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Groups</h3>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

<div class="col-12">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
					<div class="vtabs customvtab">
						<ul class="nav nav-tabs tabs-vertical" role="tablist">
							<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home3" role="tab" aria-expanded="true"><span class="hidden-sm-up"><i class="ion-home"></i></span> <span class="hidden-xs-down">Group1</span> </a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ion-person"></i></span> <span class="hidden-xs-down">Group2</span></a> </li>
							<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages3" role="tab" aria-expanded="false"><span class="hidden-sm-up"><i class="ion-email"></i></span> <span class="hidden-xs-down">Group3</span></a> </li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home3" role="tabpanel" aria-expanded="true">
                            <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                    @foreach ($contacts as $record)
                                    <div class="media align-items-center">
                                    <span class="badge badge-dot badge-success"></span>
                                    <a class="avatar avatar-lg status-success" href="#">
                                    <img src="<?php echo (($record['single']['profile_image'])!= NULL) ? url($record['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
                                    </a>

                                    <div class="media-body">
                                        <p>
                                        <a href="#"><strong>{{$record['name']}}</strong></a>
                                        <small class="sidetitle">Online</small>
                                        </p>
                                        <p>+{{$record['single']['phone_no']}}</p>

                                        
                                    </div>

                                    <div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                                        <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
                                    </div>
                                    </div>
                                    @endforeach
                                </div>
                                </div>
                            </div>
            			</div>
							</div>
							<div class="tab-pane" id="profile3" role="tabpanel" aria-expanded="false">
								<div class="p-15">
                                <div class="box">
						<div class="media-list media-list-divided media-list-hover">
							<div class="media align-items-center">
							<span class="badge badge-dot badge-success"></span>
							<a class="avatar avatar-lg status-success" href="#">
								<img src="{{asset('assets/img/avatars/user.png')}}" alt="...">
							</a>

							<div class="media-body">
								<p>
								<a href="#"><strong>Aaron</strong></a>
								<small class="sidetitle">Online</small>
								</p>
								<p>Designer</p>

								
							</div>
                            <div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                                        <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
                                    </div>
                                    
							</div>

						
							<div class="media align-items-center">

							<span class="badge badge-dot badge-success"></span>	

							<a class="avatar avatar-lg status-success" href="#">
								<img src="{{asset('assets/img/avatars/4.jpg')}}" alt="...">
							</a>

							<div class="media-body">
								<p>
								<a href="#"><strong>Eli</strong></a>
								<small class="sidetitle">Online</small>
								</p>
								<p>Support Agent</p>

								
							</div>

							<div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
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
								<p>Marketing Department</p>

								
							</div>

							<div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                                        <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
                                    </div>
                                    
							</div>

						</div>
						</div>	</div>
							</div>
							<div class="tab-pane" id="messages3" role="tabpanel" aria-expanded="false">
								<div class="p-15">
                                <div class="media-list media-list-divided media-list-hover">

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
                                        <p>Full Stack Developer</p>

                                      
                                    </div>
                                    <div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
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
                                        <p>Support Agent</p>

                                      
                                    </div>
                                    <div class="media-right gap-items">
                                        
                                        <a class="action lead" href="{{route('mailer.index')}}" data-toggle="tooltip" title="Mail"><i class="ti-email"></i></i> </a>
                                        <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
                                    </div>
                                    
                                    </div>
                                    </div>
</div>   
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
</section>
</div>
</div>
@endsection('content')