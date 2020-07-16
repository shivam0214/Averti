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
		    <div class="col-10">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-header with-border"><h4>
				<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="d-block text-right">+ Add New Group</a>
				</h4>
				</div>
			<!-- Popup Model Plase Here For Add Group-->
			<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Add Group</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>					
				<form class="form-horizontal" role="form"  method="post" action="{{route('add_group')}}">
				@csrf
				<div class="modal-body">

						<div class="form-group">
							<label class="col-md-12">Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Name" name="group_name">
							</div>
						</div>			
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" >Add</button>
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<!-- /Popup Model Plase Here -->

				<div class="box-body">
					<!-- Nav tabs -->
							<div class="tab-pane active" id="home3" role="tabpanel" aria-expanded="true">
                            <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                    @foreach ($groups as $record)
                                    <div class="media align-items-center">
                                    <a class="avatar avatar-lg status-success" href="#">
                                    <img src="{{asset('assets/img/avatars/user.png')}}" alt="&#xf013;" height="50px" width="50px">
                                    </a>
                                   <div class="media-body">
                                        <p>
                                        <a href="{{ route('show_list',['id'=>$record->id]) }}"><strong>{{$record['group_name']}}</strong></a>
                                        </p>
									</div>
									<div class="media-right gap-items">
									<a class="action lead user_list"  role="{{$record['id']}}" href="javascript:void(0)" title="Add User"><i class="fa fa-user-plus"></i></i> </a>
                                        <a class="action lead group_mail" role="{{$record['id']}}" href="javascript:void(0)"  alt="default" title="Mail"><i class="ti-email"></i></i> </a>
                                        <a class="action lead" href="#" data-toggle="tooltip" title="Remove"><i class="fa fa-fw fa-remove"></i> </a>
                                    </div>
                                    </div>
                                    @endforeach
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
			<!-- /Popup Model For Mail -->
				<div class="modal fade bs-example-modal-lg" id="mail_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content group_mail_box">

						</div>
					</div>
				</div>
	<!-- Popup Model Plase Here -->
	<div id="myModal2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Users</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>					
				<div class="modal-body">
				<div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
		                          @foreach ($contacts as $records)
								  <form class="form-horizontal" role="form"  method="post" action="{{route('group_list')}}">
									@csrf
									<input type="hidden" name="groupid" class="groupid" value="">
                                    <div class="media align-items-center">
                                  <a class="avatar avatar-lg status-success" href="#">
								  <input type="hidden" value="{{$records->id}}" name="id">
                                    <img src="<?php echo (($records['single']['profile_image'])!= NULL) ? url($records['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
                                    </a>
                                    <div class="media-body">
                                        <p>
                                        <a href="#"><strong>{{$records['name']}}</strong></a>
                                        </p>
                                        <p><strong>{{$records['email']}}</strong></p>
                                    </div>
                                    <div class="media-right gap-items">
									<button type="submit" class="btn btn-success" >Add</button>
									</div>
                                    </div>
									</form>

                                    @endforeach
                                </div>
                                </div>
                            </div>			
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default float-right" data-dismiss="modal">Cancel</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

 
</section>
</div>
</div>
@endsection('content')