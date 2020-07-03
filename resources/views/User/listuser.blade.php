@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User List</h3>
				</div>
			</div>
		</div>
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h4 class="box-title"></h4>
							<div class="box-controls pull-right">
								<div class="lookup lookup-circle lookup-right">
									<input type="text" name="s">
								</div>
							</div>
						</div>
						<div class="box-body no-padding">
							<div class="table-responsive">
							<table class="table">
                        <thead>
                          <tr>
                                    <th scope="col"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div></th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th> 
                                    <th scope="col">Advisor Type</th>                                  
                                    <th scope="col">Action</th>
                                  
                          </tr>
                            </thead>
                            <tbody style="height:50%">
                                @foreach ($users as $record)
                <tr>
								<td scope="row"><div class="icheck-material-primary">
									<input type="checkbox" id="primary2" >
									<label for="primary2"></label>
									</div>
								</td>
								<td>
								<img src="<?php echo (($record['single']['profile_image'])!= NULL) ? url($record['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
											</td>
								<td><a href="{{ route('view_profile',['id'=>$record->id]) }}">{{$record['name']}} </a></td>
								<td>{{$record['single']['phone_no']}}</td>
								<td>{{$record['catname']['category_name']}}</td>
								<td><button type="button" data-toggle="modal" data-target="#modal-right_2" class="btn btn-primary waves-effect waves-light" data-target="#video-call"><i class="fa fa-video-camera"></i></button>
                                        <a class="btn btn-success waves-effect waves-light" href="{{ route('view_profile',['id'=>$record->id]) }}"><i class="fa fa-edit"></i></a>
                                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fa fa-trash"></i></button></td>
							</tr>
              @endforeach
                                
                            </tbody>
                        </table>
                   		</div>
						</div>	
					</div>
				</div>
			</div>	
		
  		
		</section>
	
	</div>
</div>
<div class="modal modal-right fade" id="modal-right_2" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title">Video Calling</h3>
			<button type="button" class="close" data-dismiss="modal">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
		  <img src="{{asset('assets/images/advisor/video_call.jpg')}}" alt="..." class="m-10">
				<textarea class="publisher-input auto-expand" rows="4" placeholder="Type notes here..."></textarea>
		  </div>
		  <div class="modal-footer modal-footer-uniform">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			
		</div>
	  </div>
	</div>
@endsection
