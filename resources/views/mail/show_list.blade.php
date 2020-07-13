@extends('layouts.app')
@section('content') 
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Group User</h3>
				</div>
				
			</div>
		</div>
		<!-- Main content -->
		<section class="content">
		    <div class="col-10">
			  <div class="box box-default">
				<!-- /.box-header -->
				<div class="box-body">
					<!-- Nav tabs -->
							<div class="tab-pane active" id="home3" role="tabpanel" aria-expanded="true">
                            <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="box">
                                <div class="media-list media-list-divided media-list-hover">
                                    @foreach ($value as $record)
                                    <div class="media align-items-center">
                                    <a class="avatar avatar-lg status-success" href="#">
                                    <img src="<?php echo (($record['single']['profile_image'])!= NULL) ? url($record['single']['profile_image']) : url(asset('assets/img/avatars/user.png')); ?>" alt="&#xf013;" height="50px" width="50px">
                                    </a>
                                   <div class="media-body">
                                   <input type="hidden" value="{{$record->id}}" name="id">
                                        <h5>{{$record['name']}}</h5>
                                        <p>
                                        <a href="#"><strong>{{$record['email']}}</strong></a>
                                        </p>
									</div>
									<div class="media-right gap-items">
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
</section>
</div>
</div>
@endsection('content')